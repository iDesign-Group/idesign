<?php $pt="Contact Us"; $sv=htmlspecialchars($_GET['service']??''); require_once __DIR__.'/../includes/header.php'; ?>
<div class="banner"><h1>Get In <span style="color:var(--red)">Touch</span></h1>
<p>We're here to help you succeed online &mdash; response within 24 hours</p></div>
<section class="sec">
  <div class="wrap">
    <div class="cg">
      <div class="ci aos">
        <h3>Let's Start a Conversation</h3>
        <p>Fill the form and our team will reach out with a tailored solution for your exact requirements.</p>
        <div class="cd"><i class="fas fa-envelope"></i><span><?=SITE_EMAIL?></span></div>
        <div class="cd"><i class="fas fa-phone"></i><span><?=SITE_PHONE?></span></div>
        <div class="cd"><i class="fas fa-clock"></i><span>Mon&ndash;Sat: 9 AM &ndash; 7 PM IST</span></div>
        <div class="cd"><i class="fas fa-map-marker-alt"></i><span>Mumbai, Maharashtra, India</span></div>
        <div class="cd"><i class="fas fa-globe"></i><a href="<?=SITE_URL?>"><?=str_replace(['https://','http://'],'',SITE_URL)?></a></div>
      </div>
      <div class="cf aos">
        <form id="cf" novalidate>
          <div class="fr">
            <div class="fg"><label>Full Name *</label><input type="text" name="name" required/></div>
            <div class="fg"><label>Email *</label><input type="email" name="email" required/></div>
          </div>
          <div class="fg"><label>Phone</label><input type="tel" name="phone" placeholder="+91 00000 00000"/></div>
          <div class="fg"><label>Service Interested In</label>
            <select name="service">
              <option value="">Select&hellip;</option>
              <option <?=($sv==='web-design'?'selected':'')?>>Web Designing</option>
              <option <?=($sv==='shared'?'selected':'')?>>Shared Hosting</option>
              <option <?=($sv==='dedicated'?'selected':'')?>>Dedicated Server</option>
              <option <?=($sv==='wordpress'?'selected':'')?>>WordPress Hosting</option>
              <option <?=($sv==='cloud'?'selected':'')?>>Cloud Hosting</option>
              <option <?=($sv==='email'?'selected':'')?>>Email Services</option>
              <option>Domain Names</option>
              <option <?=($sv==='ssl'?'selected':'')?>>SSL Certificate</option>
              <option <?=($sv==='backup'?'selected':'')?>>Backup Service</option>
            </select>
          </div>
          <div class="fg"><label>Message *</label>
            <textarea name="message" rows="5" placeholder="Describe your project or requirements&hellip;" required></textarea>
          </div>
          <button type="submit" class="btn btn-red fs"><span>Send Message</span><i class="fas fa-paper-plane"></i></button>
          <div id="fst"></div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php require_once __DIR__.'/../includes/footer.php'; ?>
