<?php $pt="Business Email Hosting – Professional Email Services Mumbai | iDesign"; require_once __DIR__.'/../includes/header.php'; ?>
<div class="banner">
  <h1>Professional <span style="color:var(--red)">Email</span> Hosting</h1>
  <p>Secure, branded business email for companies of all sizes in Mumbai and across India</p>
</div>

<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos">
      <span class="sec-tag">Email Plans</span>
      <h2 class="sec-title">Pick Your <span>Email</span> Plan</h2>
      <p class="sec-desc">From solo entrepreneurs to large enterprises — a plan that fits perfectly.</p>
    </div>
    <div class="grid-sv" id="eSvc" data-svc="email"></div>
  </div>
</section>

<section class="sec sec-alt">
  <div class="wrap">
    <div class="sec-hd aos">
      <span class="sec-tag">Features</span>
      <h2 class="sec-title">Every Email Plan <span>Includes</span></h2>
    </div>
    <div class="grid-ft">
    <?php foreach([
      ['fa-shield-alt','Advanced Spam Filter','AI-powered spam and virus filtering keeps your inbox clean and safe.'],
      ['fa-mobile-alt','Mobile Sync','Access your email, calendar and contacts on any smartphone or tablet.'],
      ['fa-globe','Webmail Access','Use your email from any browser anywhere in the world — no setup needed.'],
      ['fa-key','99.9% Uptime','Enterprise-grade servers ensure your email is always available when you need it.'],
      ['fa-user-shield','SPF, DKIM & DMARC','Full email authentication setup to prevent spoofing and improve deliverability.'],
      ['fa-archive','Large Mailbox Storage','Generous mailbox storage ensures you never have to delete important messages.'],
    ] as [$ic,$ti,$de]):?>
    <div class="ftc aos"><div class="ic"><i class="fas <?=$ic?>"></i></div><h3><?=$ti?></h3><p><?=$de?></p></div>
    <?php endforeach;?>
    </div>
  </div>
</section>

<section class="sec">
  <div class="wrap" style="max-width:900px">
    <div class="sec-hd aos">
      <span class="sec-tag">Why Business Email Matters</span>
      <h2 class="sec-title">Stop Using <span>Gmail</span> for Business</h2>
    </div>
    <div class="aos" style="color:var(--grey);line-height:1.9;font-size:1rem">
      <p style="margin-bottom:1.2rem">Using a free Gmail or Yahoo account for business communication damages your brand credibility. A professional email like <strong style="color:var(--text)">you@yourbusiness.com</strong> immediately builds trust with clients, partners and vendors. iDesign provides fully hosted business email powered by enterprise-grade mail servers in India.</p>
      <p style="margin-bottom:1.2rem">Our business email hosting includes complete SPF, DKIM and DMARC configuration to ensure your emails land in the inbox — not the spam folder. Setup is quick, and our team can migrate all your existing emails from Gmail, Yahoo or any other provider without losing a single message.</p>
      <p>Whether you need 1 or 100 email accounts, iDesign's email hosting plans scale with your business. All accounts are accessible via Webmail, Outlook, Apple Mail, Thunderbird, and any Android or iOS mail app — keeping your team connected from anywhere.</p>
    </div>
  </div>
</section>

<section class="sec sec-alt">
  <div class="wrap" style="max-width:900px">
    <div class="sec-hd aos">
      <span class="sec-tag">FAQ</span>
      <h2 class="sec-title">Email Hosting <span>Questions</span></h2>
    </div>
    <div class="aos">
    <?php foreach([
      ['Can I use my existing domain with iDesign email?','Yes. If you already own a domain, we simply update your MX records to point to our mail servers. The process takes less than 30 minutes.'],
      ['Is Outlook and Apple Mail supported?','Yes, we provide ready-made configuration guides for Outlook, Apple Mail, Thunderbird, Android and iOS mail apps with IMAP and SMTP settings.'],
      ['How is spam handled?','We use a multi-layer spam filtering system powered by SpamAssassin and real-time block lists. Spam and phishing emails are blocked before they reach your inbox.'],
      ['Can I add more email accounts later?','Absolutely. You can add new mailboxes to your plan at any time through your control panel or by contacting our support team.'],
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
      <h2 class="sec-title">Get Your <span>Professional Email</span> Today</h2>
      <p class="sec-desc">Set up branded business email in minutes with iDesign's expert assistance.</p>
    </div>
    <a href="/contact" class="btn btn-red aos"><span>Get Started Free</span><i class="fas fa-arrow-right"></i></a>
  </div>
</section>

<?php require_once __DIR__.'/../includes/footer.php'; ?>
