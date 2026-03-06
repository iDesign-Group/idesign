<?php $pt="Web Design, Hosting, Email & Domain Services Mumbai | iDesign"; require_once __DIR__.'/includes/header.php'; ?>

<section class="hero">
  <canvas id="pCanvas"></canvas>
  <div class="hero-body">
    <div class="badge"><i class="fas fa-bolt"></i>&nbsp;Mumbai's Digital Agency</div>
    <h1>We Power Your <span>Digital</span> World</h1>
    <div class="hero-sub">Expert in&nbsp;<span id="typed"></span></div>
    <p class="hero-p">From blazing-fast web hosting to cutting-edge web design, email solutions and domain management &mdash; all under one roof in Mumbai.</p>
    <div class="hero-btns">
      <a href="/contact" class="btn btn-red"><span>Get Started Free</span><i class="fas fa-arrow-right"></i></a>
      <a href="/hosting" class="btn btn-ol"><i class="fas fa-server"></i><span>View Hosting Plans</span></a>
    </div>
  </div>
  <div class="scroll-ind"><span>SCROLL</span><i class="fas fa-chevron-down"></i></div>
</section>

<section class="stats">
  <div class="stats-g">
    <div class="aos"><span class="counter" data-target="50" data-suffix="+">0</span><p class="stat-p">Clients Served</p></div>
    <div class="aos"><span class="counter" data-target="99" data-suffix=".9%">0</span><p class="stat-p">Uptime SLA</p></div>
    <div class="aos"><span class="counter" data-target="10" data-suffix=" Yrs">0</span><p class="stat-p">Experience</p></div>
    <div class="aos"><span class="counter" data-target="24" data-suffix="/ 7">0</span><p class="stat-p">Expert Support</p></div>
    <div class="aos"><span class="counter" data-target="100" data-suffix="+">0</span><p class="stat-p">Websites Hosted</p></div>
  </div>
</section>

<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Hosting Solutions</span>
      <h2 class="sec-title">Hosting Plans for <span>Every Need</span></h2>
      <p class="sec-desc">High-performance hosting backed by enterprise-grade infrastructure and 99.9% uptime SLA.</p>
    </div>
    <div class="grid-sv" id="hSvc" data-svc="hosting"></div>
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
    <div class="grid-sv" id="eSvc" data-svc="email"></div>
  </div>
</section>

<section class="sec sec-alt">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Security &amp; Backup</span>
      <h2 class="sec-title">Protect What <span>Matters</span></h2>
      <p class="sec-desc">SSL certificates and automated backups keep your business data safe 24/7.</p>
    </div>
    <div class="grid-sv" id="sSvc" data-svc="security"></div>
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

<!-- SEO: About iDesign Section -->
<section class="sec sec-alt">
  <div class="wrap" style="max-width:960px">
    <div class="sec-hd aos">
      <span class="sec-tag">About iDesign</span>
      <h2 class="sec-title">Mumbai's Complete <span>Digital Agency</span></h2>
    </div>
    <div class="aos" style="color:var(--grey);line-height:1.9;font-size:1rem">
      <p style="margin-bottom:1.2rem">iDesign is a full-service digital agency based in Mumbai, India, providing web design, web hosting, business email, domain registration and website security services to businesses across Maharashtra and all of India. With over 10 years of experience and 100+ websites hosted, we are the trusted technology partner for startups, SMEs, manufacturing companies, trading firms and e-commerce brands.</p>
      <p style="margin-bottom:1.2rem">Our web hosting infrastructure runs on LiteSpeed web servers with NVMe SSD storage, delivering page load speeds up to 3&times; faster than traditional Apache hosting &mdash; a critical factor for both Google rankings and user experience. Every hosting plan comes with a free SSL certificate, daily automated backups, cPanel access and free business email accounts, making iDesign the most complete hosting provider in Mumbai.</p>
      <p>Whether you need a new corporate website, an e-commerce store, a custom WordPress theme or a complete digital presence from domain to design &mdash; iDesign has the expertise and technology to deliver results. Our Mumbai-based support team is available 24/7 via chat, phone and email to ensure your website is always fast, secure and online.</p>
    </div>
  </div>
</section>

<!-- SEO: Services Overview -->
<section class="sec">
  <div class="wrap" style="max-width:960px">
    <div class="sec-hd aos">
      <span class="sec-tag">Our Services</span>
      <h2 class="sec-title">Everything Your Business <span>Needs Online</span></h2>
    </div>
    <div class="grid-ft">
    <?php foreach([
      ['fa-server','Web Hosting Mumbai','NVMe SSD shared, VPS and dedicated server hosting with 99.9% uptime SLA and free SSL for Indian businesses.'],
      ['fa-globe','Domain Registration','Register .com, .in, .co.in, .net, .io and 500+ domain extensions with free WHOIS privacy protection.'],
      ['fa-envelope','Business Email Hosting','Branded @yourdomain.com email with advanced spam filtering, mobile sync, SPF/DKIM and 99.9% uptime.'],
      ['fa-lock','SSL & Website Security','Free SSL certificates, DDoS protection, daily malware scanning, WAF and automated off-site backups.'],
      ['fa-laptop-code','Web Design & Development','Custom responsive websites, WordPress, PrestaShop and e-commerce stores built for speed and SEO.'],
      ['fa-chart-line','SEO & Digital Marketing','On-page SEO, Google Search Console setup, schema markup and performance optimisation for better rankings.'],
    ] as [$ic,$ti,$de]):?>
    <div class="ftc aos"><div class="ic"><i class="fas <?=$ic?>"></i></div><h3><?=$ti?></h3><p><?=$de?></p></div>
    <?php endforeach;?>
    </div>
  </div>
</section>

<!-- SEO: FAQ Section -->
<section class="sec sec-alt">
  <div class="wrap" style="max-width:900px">
    <div class="sec-hd aos">
      <span class="sec-tag">FAQ</span>
      <h2 class="sec-title">Frequently Asked <span>Questions</span></h2>
    </div>
    <div class="aos">
    <?php foreach([
      ['What services does iDesign offer?','iDesign offers web hosting, domain registration, business email hosting, SSL certificates, website security, web design, WordPress development and e-commerce solutions — all under one roof in Mumbai.'],
      ['Where are iDesign\'s servers located?','Our servers are located in Tier-3 data centres in India, ensuring low latency for Indian visitors and compliance with Indian data residency requirements.'],
      ['Do you provide support for WordPress websites?','Yes. We provide full WordPress hosting, custom theme development, plugin installation, speed optimisation and ongoing maintenance for WordPress websites.'],
      ['How quickly can you launch a new website?','A standard business website can be designed and launched in 2–3 weeks. We also offer express launch packages for businesses with urgent requirements.'],
      ['Is free SSL included with hosting?','Yes. All iDesign hosting plans include a free Let\'s Encrypt SSL certificate installed and auto-renewed at no extra cost.'],
      ['Do you work with businesses outside Mumbai?','Absolutely. While we are based in Mumbai, we serve clients across India including Delhi, Bangalore, Pune, Ahmedabad and other cities, as well as international clients.'],
    ] as [$q,$a]):?>
    <div style="border-bottom:1px solid rgba(0,0,0,.08);padding:1.2rem 0">
      <h3 style="color:var(--text);font-size:1rem;margin-bottom:.4rem"><?=$q?></h3>
      <p style="color:var(--grey);font-size:.93rem"><?=$a?></p>
    </div>
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
