<?php
$root = str_repeat('../', substr_count($_SERVER['PHP_SELF'], '/') - 1);
if(!defined('SITE_NAME')) require_once $root.'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta name="description" content="iDesign — Web Design, Hosting, Email & Domain Services Mumbai"/>
  <title><?=isset($pt)?$pt.' | '.SITE_NAME:SITE_NAME?></title>
  <link rel="stylesheet" href="<?=$root?>assets/css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&display=swap" rel="stylesheet"/>
</head>
<body>
<div class="noise"></div>
<nav class="navbar" id="nb">
  <div class="nav-wrap">
    <a href="<?=$root?>index.php" class="nav-logo">
      <img src="<?=$root?>assets/images/logo.png" alt="iDesign" class="nav-logo-img" onerror="this.style.display='none';this.nextElementSibling.style.display='inline';" />
      <span class="nav-logo-text" style="display:none;"><span class="logo-i">i</span><span class="logo-d">Design</span></span>
    </a>
    <button class="hbg" id="hbg" aria-label="Menu"><span></span><span></span><span></span></button>
    <ul class="nav-links" id="nls">
      <li><a href="<?=$root?>index.php" class="nav-a">Home</a></li>
      <li class="dd">
        <a href="<?=$root?>pages/hosting.php" class="nav-a">Hosting <i class="fas fa-chevron-down fa-xs"></i></a>
        <ul class="dd-menu">
          <li><a href="<?=$root?>pages/hosting.php#shared">Shared Hosting</a></li>
          <li><a href="<?=$root?>pages/hosting.php#dedicated">Dedicated Server</a></li>
          <li><a href="<?=$root?>pages/hosting.php#wordpress">WordPress Hosting</a></li>
          <li><a href="<?=$root?>pages/hosting.php#cloud">Cloud Hosting</a></li>
        </ul>
      </li>
      <li><a href="<?=$root?>pages/email.php" class="nav-a">Email</a></li>
      <li><a href="<?=$root?>pages/domains.php" class="nav-a">Domains</a></li>
      <li><a href="<?=$root?>pages/security.php" class="nav-a">Security</a></li>
      <li><a href="<?=$root?>pages/webdesign.php" class="nav-a">Web Design</a></li>
      <li><a href="<?=$root?>pages/contact.php" class="nav-a nav-cta">Get Started</a></li>
    </ul>
  </div>
</nav>
