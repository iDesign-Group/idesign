<?php $pt="Web Hosting Plans"; require_once __DIR__.'/../includes/header.php'; ?>
<div class="banner"><h1>Web <span style="color:var(--red)">Hosting</span> Plans</h1>
<p>Reliable, fast and secure hosting for every type of website</p></div>
<section class="sec" id="shared">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">All Hosting Plans</span>
      <h2 class="sec-title">Choose Your <span>Plan</span></h2>
      <p class="sec-desc">All plans include free SSL, daily backups, cPanel and 99.9% uptime guarantee.</p>
    </div>
    <div class="grid-sv" id="hSvc" data-svc="hosting"></div>
  </div>
</section>
<section class="sec sec-alt">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Included with Every Plan</span>
      <h2 class="sec-title">What's Always <span>Included</span></h2>
    </div>
    <div class="grid-ft">
    <?php foreach([
      ['fa-lock','Free SSL Certificate','Every plan ships with a free Let's Encrypt SSL for full HTTPS security.'],
      ['fa-database','Daily Automated Backups','Your data is backed up every night and stored off-site for 30 days.'],
      ['fa-terminal','cPanel Control Panel','The industry-standard control panel makes managing your hosting effortless.'],
      ['fa-envelope','Free Business Email','Get branded @yourdomain email addresses included with every plan.'],
    ] as [$ic,$ti,$de]):?>
    <div class="ftc aos"><div class="ic"><i class="fas <?=$ic?>"></i></div><h3><?=$ti?></h3><p><?=$de?></p></div>
    <?php endforeach;?>
    </div>
  </div>
</section>
<?php require_once __DIR__.'/../includes/footer.php'; ?>
