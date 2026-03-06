<?php $pt="Web Design Services Mumbai – Custom Website Design | iDesign"; require_once __DIR__.'/../includes/header.php'; ?>
<div class="banner">
  <h1>Web <span style="color:var(--red)">Design</span> Services</h1>
  <p>Custom, responsive websites designed to rank on Google and convert visitors into customers</p>
</div>

<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos">
      <span class="sec-tag">Our Expertise</span>
      <h2 class="sec-title">What We <span>Build</span></h2>
      <p class="sec-desc">Every website we create is mobile-first, SEO-optimised and built to load fast on Indian networks.</p>
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

<section class="sec sec-alt">
  <div class="wrap" style="max-width:900px">
    <div class="sec-hd aos">
      <span class="sec-tag">Our Process</span>
      <h2 class="sec-title">How We <span>Work</span></h2>
    </div>
    <div class="grid-ft">
    <?php foreach([
      ['fa-comments','1. Discovery & Brief','We begin by understanding your business, target audience, competitors and goals through a detailed consultation.'],
      ['fa-pencil-ruler','2. Design & Wireframe','Our designers create wireframes and visual mockups for your approval before any code is written.'],
      ['fa-code','3. Development','We build your website with clean, semantic HTML, CSS and PHP/JavaScript — optimised for speed and SEO from day one.'],
      ['fa-check-double','4. Testing & Launch','Thorough cross-device testing across mobile, tablet and desktop before we push your site live.'],
    ] as [$ic,$ti,$de]):?>
    <div class="ftc aos"><div class="ic"><i class="fas <?=$ic?>"></i></div><h3><?=$ti?></h3><p><?=$de?></p></div>
    <?php endforeach;?>
    </div>
  </div>
</section>

<section class="sec">
  <div class="wrap" style="max-width:900px">
    <div class="sec-hd aos">
      <span class="sec-tag">Why iDesign</span>
      <h2 class="sec-title">Mumbai's Trusted <span>Web Design</span> Agency</h2>
    </div>
    <div class="aos" style="color:var(--grey);line-height:1.9;font-size:1rem">
      <p style="margin-bottom:1.2rem">iDesign is a Mumbai-based web design agency with over 10 years of experience building websites for startups, SMEs, manufacturing companies, trading firms and e-commerce businesses across India. We specialise in creating fast, SEO-friendly websites that not only look great but also rank well on Google and generate real business leads.</p>
      <p style="margin-bottom:1.2rem">Every website we design is fully responsive — meaning it automatically adapts to smartphones, tablets and desktops. We follow Google's Core Web Vitals guidelines to ensure fast loading times, smooth interactivity and visual stability. Our sites are structured with clean semantic HTML, proper heading hierarchy and metadata to give you the best possible organic search visibility from day one.</p>
      <p>From a simple 5-page corporate website to a complex multi-vendor e-commerce platform, iDesign has the expertise and technology to deliver. We also offer post-launch website maintenance, content updates, SEO services and hosting — so you have one trusted partner for everything digital.</p>
    </div>
  </div>
</section>

<section class="sec sec-alt">
  <div class="wrap" style="max-width:900px">
    <div class="sec-hd aos">
      <span class="sec-tag">FAQ</span>
      <h2 class="sec-title">Web Design <span>Questions</span></h2>
    </div>
    <div class="aos">
    <?php foreach([
      ['How long does it take to build a website?','A standard 5–10 page corporate website typically takes 2–4 weeks. E-commerce stores may take 4–8 weeks depending on the number of products and features required.'],
      ['Do you build websites on WordPress?','Yes. We develop custom WordPress themes, WooCommerce stores and PrestaShop e-commerce sites. We also build bespoke PHP websites without any CMS for maximum performance.'],
      ['Will my website rank on Google?','We build every website with on-page SEO best practices — proper heading structure, meta tags, schema markup, fast load times and mobile optimisation — giving you a solid SEO foundation.'],
      ['Do you provide website maintenance after launch?','Yes. We offer monthly website maintenance packages that cover content updates, security patches, backups, plugin updates and performance monitoring.'],
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
      <h2 class="sec-title">Let's Build Your <span>Website</span></h2>
      <p class="sec-desc">Tell us about your project and get a free quote from iDesign's expert team.</p>
    </div>
    <a href="/contact" class="btn btn-red aos"><span>Get a Free Quote</span><i class="fas fa-arrow-right"></i></a>
  </div>
</section>

<?php require_once __DIR__.'/../includes/footer.php'; ?>
