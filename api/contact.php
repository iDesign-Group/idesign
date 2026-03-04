<?php
/**
 * Contact form handler with reCAPTCHA v3 verification
 * ob_start() ensures no stray PHP warnings break the JSON response
 */
@ini_set('display_errors', 0);
error_reporting(0);
ob_start();

header('Content-Type: application/json');
require_once __DIR__.'/../config.php';

// Only accept POST
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    ob_end_clean();
    echo json_encode(['success'=>false,'message'=>'Method not allowed']);
    exit;
}

// ---- reCAPTCHA v3 verification ------------------------------------------
$rc_token  = trim($_POST['g-recaptcha-response'] ?? '');
$rc_secret = defined('RECAPTCHA_SECRET_KEY') ? RECAPTCHA_SECRET_KEY : '';

if($rc_secret && $rc_secret !== 'YOUR_SECRET_KEY'){
    if(empty($rc_token)){
        ob_end_clean();
        echo json_encode(['success'=>false,'message'=>'Security verification missing. Please refresh and try again.']);
        exit;
    }
    $verify_data = http_build_query([
        'secret'   => $rc_secret,
        'response' => $rc_token,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
    ]);
    $verify_opts = ['http'=>[
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $verify_data,
        'timeout' => 10
    ]];
    $verify_resp = @file_get_contents(
        'https://www.google.com/recaptcha/api/siteverify',
        false,
        stream_context_create($verify_opts)
    );
    $verify_json = $verify_resp ? @json_decode($verify_resp, true) : null;

    if(!$verify_json || !$verify_json['success']){
        ob_end_clean();
        echo json_encode(['success'=>false,'message'=>'Security check failed. Please try again.']);
        exit;
    }
    // Score: 1.0 = human, 0.0 = bot. Block below 0.5
    if(isset($verify_json['score']) && (float)$verify_json['score'] < 0.5){
        ob_end_clean();
        echo json_encode(['success'=>false,'message'=>'Your request was flagged as suspicious. Please try again.']);
        exit;
    }
}

// ---- Sanitise & validate -------------------------------------------------
$name    = filter_input(INPUT_POST, 'name',    FILTER_SANITIZE_SPECIAL_CHARS) ?: '';
$email   = filter_input(INPUT_POST, 'email',   FILTER_SANITIZE_EMAIL)         ?: '';
$phone   = filter_input(INPUT_POST, 'phone',   FILTER_SANITIZE_SPECIAL_CHARS) ?: '';
$service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_SPECIAL_CHARS) ?: '';
$msg     = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS) ?: '';

if(!$name || !$email || !$msg){
    ob_end_clean();
    echo json_encode(['success'=>false,'message'=>'Please fill all required fields.']);
    exit;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    ob_end_clean();
    echo json_encode(['success'=>false,'message'=>'Invalid email address.']);
    exit;
}

// ---- Send email ----------------------------------------------------------
$to      = defined('SITE_EMAIL') ? SITE_EMAIL : 'info@idesigngroup.co.in';
$subject = 'New Inquiry from '.$name.($service ? ' — '.$service : '');
$body    = "Name: $name\r\nEmail: $email"
         . ($phone   ? "\r\nPhone: $phone"     : '')
         . ($service ? "\r\nService: $service" : '')
         . "\r\n\r\nMessage:\r\n$msg";
$headers = implode("\r\n", [
    'From: iDesign Website <'.$to.'>',
    'Reply-To: '.$name.' <'.$email.'>',
    'X-Mailer: PHP/'.phpversion(),
    'Content-Type: text/plain; charset=UTF-8'
]);

@mail($to, $subject, $body, $headers);

ob_end_clean();
echo json_encode(['success'=>true,'message'=>'Thank you! We will get back to you within 24 hours.']);
?>
