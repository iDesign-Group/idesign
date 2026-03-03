<?php $pt="Email Hosting Services"; require_once __DIR__.'/../includes/header.php'; ?>
<div class="banner"><h1>Professional <span style="color:var(--red)">Email</span> Hosting</h1>
<p>Secure branded email for businesses of all sizes</p></div>
<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Email Plans</span>
      <h2 class="sec-title">Pick Your <span>Email</span> Plan</h2>
      <p class="sec-desc">From solo entrepreneurs to large enterprises — a plan that fits perfectly.</p>
    </div>
    <div class="grid-sv" id="eSvc" data-svc="email"></div>
  </div>
</section>
<section class="sec sec-alt">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Features</span>
      <h2 class="sec-title">Every Email Plan <span>Includes</span></h2>
    </div>
    <div class="grid-ft">
    <?php foreach([
      ['fa-shield-alt','Advanced Spam Filter','AI-powered spam and virus filtering keeps your inbox clean and safe.'],
      ['fa-mobile-alt','Mobile Sync','Access your email, calendar and contacts on any smartphone or tablet.'],
      ['fa-globe','Webmail Access','Use your email from any browser anywhere in the world — no setup needed.'],
      ['fa-key','99.9% Uptime','Enterprise-grade servers ensure your email is always available when you need it.'],
    ] as [$ic,$ti,$de]):?>
    <div class="ftc aos"><div class="ic"><i class="fas <?=$ic?>"></i></div><h3><?=$ti?></h3><p><?=$de?></p></div>
    <?php endforeach;?>
    </div>
  </div>
</section>
<?php require_once __DIR__.'/../includes/footer.php'; ?>
