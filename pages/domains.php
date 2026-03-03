<?php $pt="Domain Names & Registration"; require_once __DIR__.'/../includes/header.php'; ?>
<div class="banner"><h1>Find Your Perfect <span style="color:var(--red)">Domain</span></h1>
<p>Register your brand's online identity at the best prices</p></div>
<section class="sec">
  <div class="wrap">
    <div class="sec-hd aos"><span class="sec-tag">Domain Search</span>
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
    <div class="sec-hd aos"><span class="sec-tag">Why Register With Us</span>
      <h2 class="sec-title">Domain <span>Benefits</span></h2>
    </div>
    <div class="grid-ft">
    <?php foreach([
      ['fa-lock','Free Domain Privacy','WHOIS privacy protection keeps your personal info hidden from spammers.'],
      ['fa-sync','Auto-Renewal','Never lose your domain — set auto-renewal and relax.'],
      ['fa-bolt','Instant Activation','Domain goes live within minutes of registration and payment.'],
      ['fa-headset','DNS Management','Manage DNS records, redirects and subdomains from a simple dashboard.'],
    ] as [$ic,$ti,$de]):?>
    <div class="ftc aos"><div class="ic"><i class="fas <?=$ic?>"></i></div><h3><?=$ti?></h3><p><?=$de?></p></div>
    <?php endforeach;?>
    </div>
  </div>
</section>
<?php require_once __DIR__.'/../includes/footer.php'; ?>
