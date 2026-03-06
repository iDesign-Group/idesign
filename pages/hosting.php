<?php $pt="Web Hosting Plans – Fast, Secure & Reliable | iDesign Mumbai"; require_once __DIR__.'/../includes/header.php'; ?>
<div class="banner">
  <h1>Web <span style="color:var(--red)">Hosting</span> Plans</h1>
  <p>LiteSpeed-powered NVMe SSD hosting with 99.9% uptime — built for Indian businesses</p>
</div>

<section class="sec" id="shared">
  <div class="wrap">
    <div class="sec-hd aos">
      <span class="sec-tag">All Hosting Plans</span>
      <h2 class="sec-title">Choose Your <span>Plan</span></h2>
      <p class="sec-desc">All plans include free SSL, daily backups, cPanel and 99.9% uptime guarantee.</p>
    </div>
    <div class="grid-sv" id="hSvc" data-svc="hosting"></div>
  </div>
</section>

<section class="sec sec-alt">
  <div class="wrap">
    <div class="sec-hd aos">
      <span class="sec-tag">Included with Every Plan</span>
      <h2 class="sec-title">What's Always <span>Included</span></h2>
    </div>
    <div class="grid-ft">
    <?php foreach([
      ['fa-lock','Free SSL Certificate','Every plan ships with a free Let\'s Encrypt SSL for full HTTPS security.'],
      ['fa-database','Daily Automated Backups','Your data is backed up every night and stored off-site for 30 days.'],
      ['fa-terminal','cPanel Control Panel','The industry-standard control panel makes managing your hosting effortless.'],
      ['fa-envelope','Free Business Email','Get branded @yourdomain email addresses included with every plan.'],
      ['fa-tachometer-alt','LiteSpeed Web Server','Pages load up to 3× faster than Apache — critical for SEO and conversions.'],
      ['fa-headset','24/7 Expert Support','Our Mumbai-based team resolves hosting issues instantly via chat, phone or email.'],
    ] as [$ic,$ti,$de]):?>
    <div class="ftc aos"><div class="ic"><i class="fas <?=$ic?>"></i></div><h3><?=$ti?></h3><p><?=$de?></p></div>
    <?php endforeach;?>
    </div>
  </div>
</section>

<section class="sec">
  <div class="wrap" style="max-width:900px">
    <div class="sec-hd aos">
      <span class="sec-tag">Why iDesign Hosting</span>
      <h2 class="sec-title">The Fastest Hosting in <span>Mumbai</span></h2>
    </div>
    <div class="aos" style="color:var(--grey);line-height:1.9;font-size:1rem">
      <p style="margin-bottom:1.2rem">iDesign offers premium web hosting services in Mumbai designed to handle everything from personal blogs to large e-commerce stores. Our servers run on NVMe SSD drives paired with LiteSpeed web server technology, delivering page loads up to 3× faster than traditional shared hosting — directly boosting your Google ranking and user experience.</p>
      <p style="margin-bottom:1.2rem">All our hosting plans are hosted on enterprise-grade infrastructure with redundant network connectivity, DDoS mitigation and real-time server monitoring. Whether you need shared hosting for a startup website or a VPS for a high-traffic application, iDesign has a plan that perfectly fits your requirements and budget.</p>
      <p>Every plan comes with cPanel access, one-click installs for WordPress, PrestaShop, Joomla and 400+ other apps via Softaculous, plus free business email addresses — making iDesign the most complete web hosting provider in Mumbai for small and medium businesses.</p>
    </div>
  </div>
</section>

<section class="sec sec-alt">
  <div class="wrap" style="max-width:900px">
    <div class="sec-hd aos">
      <span class="sec-tag">FAQ</span>
      <h2 class="sec-title">Hosting <span>Questions</span> Answered</h2>
    </div>
    <div class="aos">
    <?php foreach([
      ['Can I upgrade my hosting plan later?','Yes, you can upgrade your hosting plan at any time from your cPanel or by contacting our support team. Upgrades are seamless with zero downtime.'],
      ['Do you provide free website migration?','Absolutely. Our technical team migrates your existing website from any hosting provider to iDesign servers completely free of charge.'],
      ['What is the uptime guarantee?','We guarantee 99.9% uptime backed by an SLA. Our monitoring systems alert our team instantly if any issue arises, ensuring rapid resolution.'],
      ['Is PHP and MySQL supported?','Yes. All plans support PHP 7.x / 8.x, MySQL, MariaDB, Python, Node.js and more. You can switch PHP versions from cPanel in one click.'],
    ] as [$q,$a]):?>
    <div style="border-bottom:1px solid rgba(0,0,0,.08);padding:1.2rem 0">
      <h3 style="color:var(--text);font-size:1rem;margin-bottom:.4rem"><?=$q?></h3>
      <p style="color:var(--grey);font-size:.93rem"><?=$a?></p>
    </div>
    <?php endforeach;?>
    </div>
  </div>
</section>

<section class="sec">
  <div class="wrap" style="text-align:center">
    <div class="sec-hd aos">
      <h2 class="sec-title">Ready to <span>Host</span> Your Website?</h2>
      <p class="sec-desc">Get started with iDesign hosting today and experience the speed difference.</p>
    </div>
    <a href="/contact" class="btn btn-red aos"><span>Get Started Free</span><i class="fas fa-arrow-right"></i></a>
  </div>
</section>

<?php require_once __DIR__.'/../includes/footer.php'; ?>
