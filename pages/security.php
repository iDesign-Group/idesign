<?php $pt="SSL Certificate & Website Security Services Mumbai | iDesign"; require_once __DIR__.'/../includes/header.php'; ?>
<div class="banner">
  <h1>Security &amp; <span style="color:var(--red)">Backup</span> Services</h1>
  <p>Enterprise-grade SSL, DDoS protection and automated backups for Indian websites</p>
</div>

<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos">
      <span class="sec-tag">SSL &amp; Backup</span>
      <h2 class="sec-title">Protect Your <span>Digital</span> Assets</h2>
      <p class="sec-desc">SSL certificates encrypt your data and build visitor trust. Automated backup ensures nothing is ever lost.</p>
    </div>
    <div class="grid-sv" id="sSvc" data-svc="security"></div>
  </div>
</section>

<section class="sec sec-alt">
  <div class="wrap">
    <div class="sec-hd aos">
      <span class="sec-tag">Security Features</span>
      <h2 class="sec-title">Full-Stack <span>Protection</span></h2>
    </div>
    <div class="grid-ft">
    <?php foreach([
      ['fa-certificate','Free SSL Certificate','Every hosting plan includes a free Let\'s Encrypt SSL — no extra cost.'],
      ['fa-shield-virus','Malware Scanning','Daily automated scans detect and remove malicious code before it causes damage.'],
      ['fa-network-wired','DDoS Mitigation','Layer-3 and Layer-7 DDoS protection keeps your site online during attacks.'],
      ['fa-database','Automated Backups','Daily off-site backups with 30-day retention so you can restore any version.'],
      ['fa-fire-alt','Web Application Firewall','WAF blocks SQL injection, XSS and other common web attacks in real time.'],
      ['fa-eye','24/7 Monitoring','Server and uptime monitoring with instant alerts and rapid incident response.'],
    ] as [$ic,$ti,$de]):?>
    <div class="ftc aos"><div class="ic"><i class="fas <?=$ic?>"></i></div><h3><?=$ti?></h3><p><?=$de?></p></div>
    <?php endforeach;?>
    </div>
  </div>
</section>

<section class="sec">
  <div class="wrap" style="max-width:900px">
    <div class="sec-hd aos">
      <span class="sec-tag">Why Security Matters</span>
      <h2 class="sec-title">An Unsecured Website <span>Costs You</span></h2>
    </div>
    <div class="aos" style="color:var(--grey);line-height:1.9;font-size:1rem">
      <p style="margin-bottom:1.2rem">Google Chrome marks websites without HTTPS as "Not Secure", immediately damaging user trust and driving visitors away. An SSL certificate encrypts all data transferred between your website and its visitors, protecting sensitive information like login credentials, contact forms and payment details.</p>
      <p style="margin-bottom:1.2rem">Beyond SSL, websites face threats from malware injections, brute-force login attacks and DDoS floods that can take your site completely offline. iDesign's security stack combines a Web Application Firewall (WAF), real-time malware scanning, automatic malware removal and multi-layer DDoS mitigation — providing complete website protection for Indian businesses.</p>
      <p>Our automated daily backup service stores encrypted copies of your website files and database off-site for 30 days. In case of any data loss, accidental deletion or security breach, our team can restore your website to a clean state within minutes — giving you total peace of mind.</p>
    </div>
  </div>
</section>

<section class="sec sec-alt">
  <div class="wrap" style="max-width:900px">
    <div class="sec-hd aos">
      <span class="sec-tag">FAQ</span>
      <h2 class="sec-title">Security <span>Questions</span> Answered</h2>
    </div>
    <div class="aos">
    <?php foreach([
      ['Does my website really need an SSL certificate?','Yes. SSL is no longer optional. Google uses HTTPS as a ranking factor, and browsers show a "Not Secure" warning on non-HTTPS sites, which hurts conversions and SEO.'],
      ['How often are backups taken?','Backups are taken automatically every day. We retain 30 days of backup history, giving you the ability to restore any version within the past month.'],
      ['What happens if my website is hacked?','Our team immediately quarantines the affected files, removes malicious code, patches the vulnerability and restores your website from a clean backup — usually within hours.'],
      ['Is the WAF included in hosting plans?','A basic WAF is included in all hosting plans. Advanced WAF with custom rules is available as an add-on for high-traffic or e-commerce websites.'],
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
      <h2 class="sec-title">Secure Your Website <span>Today</span></h2>
      <p class="sec-desc">Don't wait for a security breach. Get protected with iDesign's enterprise security stack.</p>
    </div>
    <a href="/contact" class="btn btn-red aos"><span>Get Protected Now</span><i class="fas fa-arrow-right"></i></a>
  </div>
</section>

<?php require_once __DIR__.'/../includes/footer.php'; ?>
