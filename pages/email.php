<?php
$pt = 'Professional Email Services — iDesign';
require_once __DIR__.'/../includes/header.php';
require_once __DIR__.'/../includes/services.php';
?>
<div class="banner">
  <h1>Professional <span style="color:var(--red)">Email</span> Services</h1>
  <p>Branded email hosting with enterprise security and seamless device sync.</p>
</div>
<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos">
      <span class="sec-tag">Email Services</span>
      <h2 class="sec-title">Email Plans for <span>Every Team</span></h2>
      <p class="sec-desc">From individual freelancers to large organisations — a plan for every need.</p>
    </div>
    <div class="grid-sv">
      <?php render_services('email'); ?>
    </div>
  </div>
</section>
<?php require_once __DIR__.'/../includes/footer.php'; ?>
