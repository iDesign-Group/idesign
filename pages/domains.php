<?php $pt="Domain Registration – Buy & Manage Domain Names | iDesign Mumbai"; require_once __DIR__.'/../includes/header.php'; ?>
<div class="banner">
  <h1>Find Your Perfect <span style="color:var(--red)">Domain</span></h1>
  <p>Register .com, .in, .co.in, .net, .io and 500+ extensions at the best prices in India</p>
</div>

<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos">
      <span class="sec-tag">Domain Search</span>
      <h2 class="sec-title">Search <span>Available</span> Domains</h2>
      <p class="sec-desc">Check availability across .com, .in, .co.in, .net, .org, .io, .store, .online and more.</p>
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

<section class="sec sec-alt">
  <div class="wrap">
    <div class="sec-hd aos">
      <span class="sec-tag">Why Register With Us</span>
      <h2 class="sec-title">Domain <span>Benefits</span></h2>
    </div>
    <div class="grid-ft">
    <?php foreach([
      ['fa-lock','Free Domain Privacy','WHOIS privacy protection keeps your personal info hidden from spammers.'],
      ['fa-sync','Auto-Renewal','Never lose your domain — set auto-renewal and relax.'],
      ['fa-bolt','Instant Activation','Domain goes live within minutes of registration and payment.'],
      ['fa-headset','DNS Management','Manage DNS records, redirects and subdomains from a simple dashboard.'],
      ['fa-shield-alt','Domain Lock','Prevent unauthorized transfers with registrar-lock security on all domains.'],
      ['fa-exchange-alt','Easy Transfer','Already own a domain elsewhere? Transfer it to iDesign quickly and hassle-free.'],
    ] as [$ic,$ti,$de]):?>
    <div class="ftc aos"><div class="ic"><i class="fas <?=$ic?>"></i></div><h3><?=$ti?></h3><p><?=$de?></p></div>
    <?php endforeach;?>
    </div>
  </div>
</section>

<section class="sec">
  <div class="wrap" style="max-width:900px">
    <div class="sec-hd aos">
      <span class="sec-tag">Domain Registration Guide</span>
      <h2 class="sec-title">How to Choose the <span>Right Domain</span></h2>
    </div>
    <div class="aos" style="color:var(--grey);line-height:1.9;font-size:1rem">
      <p style="margin-bottom:1.2rem">Your domain name is your brand's digital address — choosing the right one is critical for your online success. A good domain name is short, memorable, easy to spell and reflects your business or service. For Indian businesses, pairing a <strong style="color:var(--text)">.com</strong> with a <strong style="color:var(--text)">.in</strong> or <strong style="color:var(--text)">.co.in</strong> domain gives you maximum coverage across local and global searches.</p>
      <p style="margin-bottom:1.2rem">iDesign offers domain registration for 500+ extensions at competitive prices, along with free WHOIS privacy protection to keep your personal contact information safe from spammers and data harvesters. Our domain management dashboard makes it simple to update DNS records, set up redirects, add subdomains and manage renewals — all from one place.</p>
      <p>Once registered, connect your domain to any hosting provider in minutes. Our support team is available 24/7 to help you point nameservers, set up email MX records or troubleshoot any DNS issue — making iDesign the most reliable domain registrar in Mumbai.</p>
    </div>
  </div>
</section>

<section class="sec sec-alt">
  <div class="wrap" style="max-width:900px">
    <div class="sec-hd aos">
      <span class="sec-tag">FAQ</span>
      <h2 class="sec-title">Domain <span>Questions</span> Answered</h2>
    </div>
    <div class="aos">
    <?php foreach([
      ['How long does domain registration take?','Domain registration is instant for most extensions. Your domain becomes active within minutes of successful payment.'],
      ['Can I transfer my domain from another registrar?','Yes. Domain transfers are simple and free of hassle. Our team will guide you through the EPP code transfer process step by step.'],
      ['What is WHOIS privacy and do I need it?','WHOIS privacy hides your personal details (name, address, phone) from the public WHOIS database, protecting you from spam and unwanted contact. We strongly recommend it.'],
      ['Do you offer .in and .co.in domains?','Yes, we register all Indian domain extensions including .in, .co.in, .net.in, .org.in and more at competitive prices.'],
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
      <h2 class="sec-title">Register Your <span>Domain</span> Today</h2>
      <p class="sec-desc">Secure your brand's online identity before someone else does.</p>
    </div>
    <a href="/contact" class="btn btn-red aos"><span>Contact Us</span><i class="fas fa-arrow-right"></i></a>
  </div>
</section>

<?php require_once __DIR__.'/../includes/footer.php'; ?>
