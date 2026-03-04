<?php
$pt = 'Web Hosting Plans — iDesign';
require_once __DIR__.'/../includes/header.php';
require_once __DIR__.'/../includes/services.php';
?>
<div class="banner">
  <h1>Web <span style="color:var(--red)">Hosting</span> Plans</h1>
  <p>High-performance hosting backed by enterprise-grade infrastructure and 99.9% uptime SLA.</p>
</div>
<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos">
      <span class="sec-tag">Hosting Solutions</span>
      <h2 class="sec-title">Hosting Plans for <span>Every Need</span></h2>
      <p class="sec-desc">From shared hosting to dedicated servers — choose the plan that fits your project.</p>
    </div>
    <div class="grid-sv">
      <?php render_services('hosting'); ?>
    </div>
  </div>
</section>
<?php require_once __DIR__.'/../includes/footer.php'; ?>
