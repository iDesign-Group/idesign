<?php
$root = str_repeat('../', substr_count($_SERVER['PHP_SELF'], '/') - 1);
if(!defined('SITE_NAME')) require_once $root.'config.php';

/* ── SEO helpers ──────────────────────────────────────────────── */
$_path     = strtok($_SERVER['REQUEST_URI'], '?');
$_seo      = defined('SEO_PAGES') ? (SEO_PAGES[$_path] ?? SEO_PAGES['/']) : [];
$meta_desc = $desc ?? ($_seo['desc'] ?? 'iDesign — Web Design, Hosting, Email & Domain Services in Mumbai, India.');
$meta_kw   = $kw   ?? ($_seo['kw']   ?? 'web design mumbai, web hosting india, domain registration india');
$meta_ttl  = isset($pt) ? $pt.' | '.SITE_NAME : SITE_NAME;
$canonical = rtrim(SITE_URL, '/') . $_path;
$og_image  = isset($og_img) ? $og_img : rtrim(SITE_URL, '/').'/assets/images/og-image.jpg';
$ga4_id    = defined('GA4_ID') ? GA4_ID : 'G-XXXXXXXXXX';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta name="theme-color" content="#dc1e1e"/>

  <!-- Primary SEO -->
  <title><?=htmlspecialchars($meta_ttl)?></title>
  <meta name="description" content="<?=htmlspecialchars($meta_desc)"/>
  <meta name="keywords"    content="<?=htmlspecialchars($meta_kw)"/>
  <meta name="author"      content="iDesign Group, Mumbai"/>
  <meta name="robots"      content="index, follow, max-snippet:-1, max-image-preview:large"/>
  <link rel="canonical"    href="<?=htmlspecialchars($canonical)"/>

  <!-- Open Graph -->
  <meta property="og:type"        content="website"/>
  <meta property="og:url"         content="<?=htmlspecialchars($canonical)"/>
  <meta property="og:title"       content="<?=htmlspecialchars($meta_ttl)"/>
  <meta property="og:description" content="<?=htmlspecialchars($meta_desc)"/>
  <meta property="og:image"       content="<?=htmlspecialchars($og_image)"/>
  <meta property="og:image:width"  content="1200"/>
  <meta property="og:image:height" content="630"/>
  <meta property="og:site_name"   content="iDesign"/>
  <meta property="og:locale"      content="en_IN"/>

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image"/>
  <meta name="twitter:title"       content="<?=htmlspecialchars($meta_ttl)"/>
  <meta name="twitter:description" content="<?=htmlspecialchars($meta_desc)"/>
  <meta name="twitter:image"       content="<?=htmlspecialchars($og_image)"/>

  <!-- JSON-LD: LocalBusiness -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "iDesign",
    "url": "<?=SITE_URL?>",
    "logo": "<?=rtrim(SITE_URL,'/')?>/assets/images/logo.png",
    "image": "<?=htmlspecialchars($og_image)?>",
    "description": "<?=addslashes($meta_desc)?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Mumbai",
      "addressRegion": "Maharashtra",
      "postalCode": "400000",
      "addressCountry": "IN"
    },
    "telephone": "<?=SITE_PHONE?>",
    "email": "<?=SITE_EMAIL?>",
    "priceRange": "\u20b9\u20b9",
    "sameAs": [
      "https://www.facebook.com/idesigngroup",
      "https://www.instagram.com/idesigngroup",
      "https://www.linkedin.com/company/idesigngroup"
    ]
  }
  </script>

  <!-- Google Analytics GA4 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?=$ga4_id?>"></script>
  <script>
    window.dataLayer=window.dataLayer||[];
    function gtag(){dataLayer.push(arguments);}
    gtag('js',new Date());
    gtag('config','<?=$ga4_id?>');
  </script>

  <link rel="icon" href="<?=$root?>assets/images/logo.png" type="image/png"/>
  <link rel="stylesheet" href="<?=$root?>assets/css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&display=swap" rel="stylesheet"/>
</head>
<body>
<div class="noise"></div>
<nav class="navbar" id="nb">
  <div class="nav-wrap">
    <a href="/" class="nav-logo">
      <img src="<?=$root?>assets/images/logo.png" alt="iDesign" class="nav-logo-img" onerror="this.style.display='none';this.nextElementSibling.style.display='inline';" />
      <span class="nav-logo-text" style="display:none;"><span class="logo-i">i</span><span class="logo-d">Design</span></span>
    </a>
    <button class="hbg" id="hbg" aria-label="Menu"><span></span><span></span><span></span></button>
    <ul class="nav-links" id="nls">
      <li><a href="/" class="nav-a">Home</a></li>
      <li class="dd">
        <a href="/hosting" class="nav-a">Hosting <i class="fas fa-chevron-down fa-xs"></i></a>
        <ul class="dd-menu">
          <li><a href="/hosting#shared">Shared Hosting</a></li>
          <li><a href="/hosting#dedicated">Dedicated Server</a></li>
          <li><a href="/hosting#wordpress">WordPress Hosting</a></li>
          <li><a href="/hosting#cloud">Cloud Hosting</a></li>
        </ul>
      </li>
      <li><a href="/email" class="nav-a">Email</a></li>
      <li><a href="/domains" class="nav-a">Domains</a></li>
      <li><a href="/security" class="nav-a">Security</a></li>
      <li><a href="/webdesign" class="nav-a">Web Design</a></li>
      <li><a href="/contact" class="nav-a nav-cta">Get Started</a></li>
    </ul>
  </div>
</nav>
