<?php
$pt = 'Web Design, Hosting, Email & Domain Services Mumbai';
require_once __DIR__.'/includes/header.php';
require_once __DIR__.'/includes/services.php';
?>

<section class="hero">
  <canvas id="pCanvas"></canvas>
  <div class="hero-body">
    <div class="badge"><i class="fas fa-bolt"></i>&nbsp;Mumbai's #1 Digital Agency</div>
    <h1>We Power Your <span>Digital</span> World</h1>
    <div class="hero-sub">Expert in&nbsp;<span id="typed"></span></div>
    <p class="hero-p">From blazing-fast web hosting to cutting-edge web design, email solutions and domain management &mdash; all under one roof.</p>
    <div class="hero-btns">
      <a href="/contact" class="btn btn-red"><span>Get Started Free</span><i class="fas fa-arrow-right"></i></a>
      <a href="/hosting" class="btn btn-ol"><i class="fas fa-server"></i><span>View Hosting Plans</span></a>
    </div>
  </div>
  <div class="scroll-ind"><span>SCROLL</span><i class="fas fa-chevron-down"></i></div>
</section>

<section class="stats">
  <div class="stats-g">
    <div class="aos"><span class="counter" data-target="500" data-suffix="+">0</span><p class="stat-p">Clients Served</p></div>
    <div class="aos"><span class="counter" data-target="99" data-suffix=".9%">0</span><p class="stat-p">Uptime SLA</p></div>
    <div class="aos"><span class="counter" data-target="10" data-suffix=" Yrs">0</span><p class="stat-p">Experience</p></div>
    <div class="aos"><span class="counter" data-target="24" data-suffix="/7">0</span><p class="stat-p">Expert Support</p></div>
    <div class="aos"><span class="counter" data-target="1200" data-suffix="+">0</span><p class="stat-p">Websites Hosted</p></div>
  </div>
</section>

<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Hosting Solutions</span>
      <h2 class="sec-title">Hosting Plans for <span>Every Need</span></h2>
      <p class="sec-desc">High-performance hosting backed by enterprise-grade infrastructure and 99.9% uptime SLA.</p>
    </div>
    <div class="grid-sv">
      <?php render_services('hosting'); ?>
    </div>
  </div>
</section>

<section class="sec sec-alt">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Domain Names</span>
      <h2 class="sec-title">Find Your Perfect <span>Domain</span></h2>
      <p class="sec-desc">Search hundreds of extensions and secure your online identity today.</p>
    </div>
    <div class="dsw aos">
      <form class="d-form" id="df">
        <i class="fas fa-globe" style="color:var(--grey)"></i>
        <input type="text" id="dq" placeholder="e.g. mybusiness" required/>
        <button type="submit" class="btn btn-red"><i class="fas fa-search"></i>&nbsp;Search</button>
      </form>
      <div id="dres"></div>
    </div>
  </div>
</section>

<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Email Services</span>
      <h2 class="sec-title">Professional <span>Email</span> Solutions</h2>
      <p class="sec-desc">Branded email hosting with enterprise security and seamless device sync.</p>
    </div>
    <div class="grid-sv">
      <?php render_services('email'); ?>
    </div>
  </div>
</section>

<section class="sec sec-alt">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Security &amp; Backup</span>
      <h2 class="sec-title">Protect What <span>Matters</span></h2>
      <p class="sec-desc">SSL certificates and automated backups keep your business data safe 24/7.</p>
    </div>
    <div class="grid-sv">
      <?php render_services('security'); ?>
    </div>
  </div>
</section>

<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Why Choose Us</span>
      <h2 class="sec-title">The <span>iDesign</span> Advantage</h2>
    </div>
    <div class="grid-ft">
    <?php foreach([
      ['fa-tachometer-alt','Blazing Fast NVMe SSD','LiteSpeed web server with NVMe SSD delivers pages 3x faster than traditional hosting.'],
      ['fa-headset','24/7 Expert Support','Our technical team resolves issues instantly via chat, phone and email round the clock.'],
      ['fa-shield-alt','Enterprise Security','Free SSL, DDoS protection, daily malware scanning and automatic off-site backups.'],
      ['fa-rupee-sign','Transparent Pricing','No hidden fees, no surprises. What you see is exactly what you pay — always.'],
      ['fa-cogs','1-Click App Installer','Deploy WordPress, PrestaShop, Joomla and 400+ apps in one click via cPanel Softaculous.'],
      ['fa-expand-arrows-alt','Effortless Scalability','Start small and scale to dedicated resources as your business grows — zero downtime.'],
    ] as [$ic,$ti,$de]):?>
    <div class="ftc aos"><div class="ic"><i class="fas <?=$ic?>"></i></div><h3><?=$ti?></h3><p><?=$de?></p></div>
    <?php endforeach;?>
    </div>
  </div>
</section>

<section class="sec sec-alt">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Contact Us</span>
      <h2 class="sec-title">Ready to <span>Launch?</span></h2>
      <p class="sec-desc">Tell us about your project and let's build something amazing together.</p>
    </div>
    <div style="text-align:center;padding:2rem 0;">
      <p style="color:var(--grey);margin-bottom:1.5rem;max-width:500px;margin-inline:auto;">Whether you need a new website, hosting, email setup or domain &mdash; our experts are ready to help.</p>
      <a href="/contact" class="btn btn-red"><span>Start a Conversation</span><i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<?php require_once __DIR__.'/includes/footer.php'; ?>
