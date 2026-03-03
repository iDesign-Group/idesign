<?php
/**
 * ResellerClub Domain Availability Check
 * GET  api/domain_check.php?domain=mybusiness
 */
require_once __DIR__.'/../config.php';

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

// ---- Sanitise input ----------------------------------------------------
$raw    = trim($_GET['domain'] ?? '');
$domain = strtolower(preg_replace('/[^a-z0-9\-]/', '', preg_replace('/\..+$/', '', $raw)));

if (!$domain || strlen($domain) < 2 || strlen($domain) > 63) {
    echo json_encode(['success' => false, 'message' => 'Enter a valid domain name (e.g. mybusiness).']);
    exit;
}

// ---- TLDs & pricing -----------------------------------------------------
$tlds = ['com', 'in', 'co.in', 'net', 'org', 'io', 'store', 'online'];

$prices = [
    'com'    => '\u20b9699/yr',
    'in'     => '\u20b9499/yr',
    'co.in'  => '\u20b9399/yr',
    'net'    => '\u20b9799/yr',
    'org'    => '\u20b9799/yr',
    'io'     => '\u20b93,499/yr',
    'store'  => '\u20b9199/yr',
    'online' => '\u20b9149/yr',
];

// ---- Build ResellerClub API request ------------------------------------
// Endpoint: https://httpapi.com/api/domains/available.json
$base  = 'https://httpapi.com/api/domains/available.json';
$query = http_build_query([
    'auth-userid' => RC_USERID,
    'api-key'     => RC_APIKEY,
    'domain-name' => $domain,
]);
// Append TLDs as repeated params (ResellerClub expects tlds=com&tlds=in ...)
$query .= '&' . implode('&', array_map(fn($t) => 'tlds=' . urlencode($t), $tlds));

$url = $base . '?' . $query;

// ---- cURL call ----------------------------------------------------------
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 15,
    CURLOPT_CONNECTTIMEOUT => 8,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_USERAGENT      => 'iDesign/1.0',
]);
$resp = curl_exec($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$err  = curl_error($ch);
curl_close($ch);

if ($err) {
    echo json_encode(['success' => false, 'message' => 'Network error. Please try again.']);
    exit;
}
if ($code !== 200) {
    echo json_encode(['success' => false, 'message' => 'API returned status ' . $code]);
    exit;
}

$data = json_decode($resp, true);
if (!is_array($data)) {
    echo json_encode(['success' => false, 'message' => 'Unexpected API response.']);
    exit;
}

// ---- Parse results ------------------------------------------------------
// Status meanings from ResellerClub:
//   available        = free to register
//   regthroughus     = registered with ResellerClub
//   regthroughothers = registered elsewhere
//   unknown / error  = could not determine

$results = [];
foreach ($tlds as $tld) {
    $key    = $domain . '.' . $tld;
    $entry  = $data[$key] ?? [];
    $status = strtolower($entry['status'] ?? 'unknown');
    $avail  = ($status === 'available');

    $results[] = [
        'domain'    => $key,
        'available' => $avail,
        'status'    => $status,
        'price'     => $avail ? ($prices[$tld] ?? '\u20b9—') : '\u2014',
    ];
}

echo json_encode(['success' => true, 'results' => $results], JSON_UNESCAPED_UNICODE);
