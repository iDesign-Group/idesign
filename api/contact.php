<?php
header('Content-Type: application/json');
if($_SERVER['REQUEST_METHOD']!=='POST'){echo json_encode(['success'=>false,'message'=>'Method not allowed']);exit;}
$name    = filter_input(INPUT_POST,'name',   FILTER_SANITIZE_SPECIAL_CHARS);
$email   = filter_input(INPUT_POST,'email',  FILTER_SANITIZE_EMAIL);
$service = filter_input(INPUT_POST,'service',FILTER_SANITIZE_SPECIAL_CHARS);
$msg     = filter_input(INPUT_POST,'message',FILTER_SANITIZE_SPECIAL_CHARS);
if(!$name||!$email||!$msg){echo json_encode(['success'=>false,'message'=>'Please fill all required fields.']);exit;}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){echo json_encode(['success'=>false,'message'=>'Invalid email address.']);exit;}
$to      = 'info@idesigngroup.co.in';
$subject = "New Inquiry from $name — $service";
$body    = "Name: $name\nEmail: $email\nService: $service\nMessage: $msg";
$headers = "From: $email\r\nReply-To: $email";
mail($to,$subject,$body,$headers);
echo json_encode(['success'=>true,'message'=>'Thank you! We will get back to you within 24 hours.']);
?>
