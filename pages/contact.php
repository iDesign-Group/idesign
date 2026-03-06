<?php
/**
 * Contact page — server-side form processing
 * Normal browser POST bypasses Monarx/WAF that blocks AJAX fetch() calls
 */
require_once __DIR__.'/../config.php';

$sent    = isset($_GET['sent'])  && $_GET['sent']  == '1';
$err_msg = '';
$sv      = htmlspecialchars($_GET['service'] ?? '');

// ---- Handle POST --------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // reCAPTCHA v3 verification
    $rc_token  = trim($_POST['g-recaptcha-response'] ?? '');
    $rc_secret = defined('RECAPTCHA_SECRET_KEY') ? RECAPTCHA_SECRET_KEY : '';

    if ($rc_secret && $rc_secret !== 'YOUR_SECRET_KEY' && !empty($rc_token)) {
        $vdata = http_build_query([
            'secret'   => $rc_secret,
            'response' => $rc_token,
            'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
        ]);
        $vopts = ['http' => [
            'method'  => 'POST',
            'header'  => 'Content-Type: application/x-www-form-urlencoded',
            'content' => $vdata,
            'timeout' => 10
        ]];
        $vresp = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, stream_context_create($vopts));
        $vjson = $vresp ? @json_decode($vresp, true) : null;
        if ($vjson && isset($vjson['score']) && (float)$vjson['score'] < 0.5) {
            $err_msg = 'Security check failed. Please refresh and try again.';
        }
    }

    if (!$err_msg) {
        $name    = filter_input(INPUT_POST, 'name',    FILTER_SANITIZE_SPECIAL_CHARS) ?: '';
        $email   = filter_input(INPUT_POST, 'email',   FILTER_SANITIZE_EMAIL)         ?: '';
        $phone   = filter_input(INPUT_POST, 'phone',   FILTER_SANITIZE_SPECIAL_CHARS) ?: '';
        $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_SPECIAL_CHARS) ?: '';
        $msg     = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS) ?: '';
        $sv      = htmlspecialchars($service);

        if (!$name || !$email || !$msg) {
            $err_msg = 'Please fill all required fields.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err_msg = 'Please enter a valid email address.';
        } else {
            $to      = SITE_EMAIL;
            $subject = 'New Inquiry from '.$name.($service ? ' — '.$service : '');
            $body    = "Name: $name\r\nEmail: $email"
                     . ($phone   ? "\r\nPhone: $phone"     : '')
                     . ($service ? "\r\nService: $service" : '')
                     . "\r\n\r\nMessage:\r\n$msg";
            $headers = implode("\r\n", [
                'From: iDesign Website <'.SITE_EMAIL.'>',
                "Reply-To: $name <$email>",
                'X-Mailer: PHP/'.phpversion(),
                'Content-Type: text/plain; charset=UTF-8'
            ]);
            @mail($to, $subject, $body, $headers);
            // PRG pattern — redirect to prevent duplicate submissions on refresh
            header('Location: /contact?sent=1');
            exit;
        }
    }
}

$pt = 'Contact Us';
require_once __DIR__.'/../includes/header.php';
?>
<div class="banner"><h1>Get In <span style="color:var(--red)">Touch</span></h1>
<p>We're here to help you succeed online &mdash; response within 24 hours</p></div>
<section class="sec">
  <div class="wrap">
    <div class="cg">
      <div class="ci aos">
        <h3>Let's Start a Conversation</h3>
        <p>Fill the form and our team will reach out with a tailored solution for your exact requirements.</p>
        <div class="cd"><i class="fas fa-envelope"></i><span><?=SITE_EMAIL?></span></div>
        <div class="cd"><i class="fas fa-phone"></i><span><?=SITE_PHONE?></span></div>
        <div class="cd"><i class="fas fa-clock"></i><span>Mon&ndash;Sat: 9 AM &ndash; 7 PM IST</span></div>
        <div class="cd"><i class="fas fa-map-marker-alt"></i><span>Mumbai, Maharashtra, India</span></div>
        <div class="cd"><i class="fas fa-globe"></i><a href="<?=SITE_URL?>"><?=str_replace(['https://','http://'],'',SITE_URL)?></a></div>
      </div>
      <div class="cf aos">

        <?php if($sent): ?>
        <div class="fst ok" style="padding:2rem;text-align:center;font-size:1.1rem;">
          <i class="fas fa-check-circle" style="font-size:2.5rem;color:#22c55e;display:block;margin-bottom:1rem;"></i>
          <strong>Message Sent Successfully!</strong><br/>
          <span style="opacity:.8">Thank you! We will get back to you within 24 hours.</span><br/><br/>
          <a href="/contact" class="btn btn-red" style="display:inline-flex;">Send Another Message</a>
        </div>
        <?php else: ?>

        <?php if($err_msg): ?>
        <div class="fst er" style="margin-bottom:1rem;padding:.8rem 1rem;">
          <i class="fas fa-exclamation-circle"></i> <?=htmlspecialchars($err_msg)?>
        </div>
        <?php endif; ?>

        <form id="cf" action="/contact" method="POST" novalidate>
          <!-- reCAPTCHA v3 hidden token — filled by JS before submit -->
          <input type="hidden" name="g-recaptcha-response" id="rc-token"/>
          <div class="fr">
            <div class="fg"><label>Full Name *</label><input type="text" name="name" value="<?=htmlspecialchars($_POST['name']??'')?>"/></div>
            <div class="fg"><label>Email *</label><input type="email" name="email" value="<?=htmlspecialchars($_POST['email']??'')?>"/></div>
          </div>
          <div class="fg"><label>Phone</label><input type="tel" name="phone" placeholder="+91 00000 00000" value="<?=htmlspecialchars($_POST['phone']??'')?>"/></div>
          <div class="fg"><label>Service Interested In</label>
            <select name="service">
              <option value="">Select&hellip;</option>
              <?php foreach(['Web Designing','Shared Hosting','Dedicated Server','WordPress Hosting','Cloud Hosting','Email Services','Domain Names','SSL Certificate','Backup Service'] as $opt): ?>
              <option <?=($sv===$opt||($_POST['service']??'')===$opt)?'selected':''?>><?=htmlspecialchars($opt)?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="fg"><label>Message *</label>
            <textarea name="message" rows="5" placeholder="Describe your project or requirements&hellip;" required><?=htmlspecialchars($_POST['message']??'')?></textarea>
          </div>
          <button type="submit" class="btn btn-red fs"><span>Send Message</span><i class="fas fa-paper-plane"></i></button>
        </form>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
<?php require_once __DIR__.'/../includes/footer.php'; ?>