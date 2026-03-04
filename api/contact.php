<?php
header('Content-Type: application/json');
require_once __DIR__.'/../config.php';

// Only accept POST
if($_SERVER['REQUEST_METHOD']!=='POST'){
    echo json_encode(['success'=>false,'message'=>'Method not allowed']);exit;
}

// ---- reCAPTCHA v3 verification ------------------------------------------
$rc_token  = trim($_POST['g-recaptcha-response'] ?? '');
$rc_secret = defined('RECAPTCHA_SECRET_KEY') ? RECAPTCHA_SECRET_KEY : '';

if($rc_secret && $rc_secret !== 'YOUR_SECRET_KEY'){
    if(empty($rc_token)){
        echo json_encode(['success'=>false,'message'=>'Security verification missing. Please refresh and try again.']);exit;
    }
    $verify_url = 'https://www.google.com/recaptcha/api/siteverify';
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
    $verify_resp = @file_get_contents($verify_url, false, stream_context_create($verify_opts));
    $verify_json = $verify_resp ? json_decode($verify_resp, true) : null;

    if(!$verify_json || !$verify_json['success']){
        echo json_encode(['success'=>false,'message'=>'Security check failed. Please try again.']);exit;
    }
    // v3 score: 0.0 (bot) to 1.0 (human). Threshold: 0.5
    if(isset($verify_json['score']) && $verify_json['score'] < 0.5){
        echo json_encode(['success'=>false,'message'=>'Your request was flagged as suspicious. Please try again.']);exit;
    }
}

// ---- Sanitise & validate form fields ------------------------------------
$name    = filter_input(INPUT_POST,'name',   FILTER_SANITIZE_SPECIAL_CHARS);
$email   = filter_input(INPUT_POST,'email',  FILTER_SANITIZE_EMAIL);
$phone   = filter_input(INPUT_POST,'phone',  FILTER_SANITIZE_SPECIAL_CHARS);
$service = filter_input(INPUT_POST,'service',FILTER_SANITIZE_SPECIAL_CHARS);
$msg     = filter_input(INPUT_POST,'message',FILTER_SANITIZE_SPECIAL_CHARS);

if(!$name||!$email||!$msg){
    echo json_encode(['success'=>false,'message'=>'Please fill all required fields.']);exit;
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo json_encode(['success'=>false,'message'=>'Invalid email address.']);exit;
}

// ---- Send email ----------------------------------------------------------
$to      = SITE_EMAIL;
$subject = "New Inquiry from $name" . ($service ? " — $service" : '');
$body    = "Name: $name\nEmail: $email" .
           ($phone  ? "\nPhone: $phone"   : '') .
           ($service? "\nService: $service": '') .
           "\n\nMessage:\n$msg";
$headers = implode("\r\n",[
    "From: iDesign Website <".SITE_EMAIL.">",
    "Reply-To: $name <$email>",
    "X-Mailer: PHP/".phpversion()
]);

mail($to,$subject,$body,$headers);
echo json_encode(['success'=>true,'message'=>'Thank you! We will get back to you within 24 hours.']);
?>
