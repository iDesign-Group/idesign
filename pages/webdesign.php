<?php $pt="Web Design Services"; require_once __DIR__.'/../includes/header.php'; ?>
<div class="banner"><h1>Web <span style="color:var(--red)">Design</span> Services</h1>
<p>Stunning responsive websites that convert visitors into customers</p></div>
<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Our Expertise</span>
      <h2 class="sec-title">What We <span>Build</span></h2>
    </div>
    <div class="grid-ft">
    <?php foreach([
      ['fa-laptop-code','Corporate Websites','Multi-page corporate sites that establish authority, build trust and generate leads.'],
      ['fa-shopping-cart','E-Commerce Stores','Full-featured stores with cart, payment gateways, inventory and order management.'],
      ['fa-mobile-alt','Mobile-First Design','Pixel-perfect responsive designs that look stunning on every device and screen size.'],
      ['fa-wordpress-simple','WordPress Development','Custom themes, plugins and WooCommerce stores engineered for speed and SEO.'],
      ['fa-paint-brush','UI / UX Design','User-centric interfaces with wireframes, prototypes, style guides and design systems.'],
      ['fa-rocket','Landing Pages','High-converting landing pages designed to capture leads and drive measurable sales.'],
    ] as [$ic,$ti,$de]):?>
    <div class="ftc aos"><div class="ic"><i class="fas <?=$ic?>"></i></div><h3><?=$ti?></h3><p><?=$de?></p></div>
    <?php endforeach;?>
    </div>
  </div>
</section>
<?php require_once __DIR__.'/../includes/footer.php'; ?>
