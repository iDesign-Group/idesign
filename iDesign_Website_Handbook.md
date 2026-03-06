# iDesign Website - Complete Technical Handbook

**Version:** 1.0  
**Date:** March 3, 2026  
**Created For:** iDesign Group, Mumbai  
**Website URL:** https://www.idesigngroup.co.in  

---

## Table of Contents

1. Project Overview
2. Technology Stack
3. File Structure
4. Page Details & Features
5. Design System
6. API Endpoints
7. Image Assets Guide
8. Deployment Instructions
9. Maintenance Guide
10. Troubleshooting
11. Security Best Practices
12. Performance Optimization

---

## 1. Project Overview

### 1.1 About iDesign
iDesign is a Mumbai-based digital agency specializing in:
- **Web Design & Development** - Custom responsive websites
- **Web Hosting** - Shared, Dedicated, WordPress, Cloud
- **Email Services** - Basic, Enterprise, Corporate plans
- **Domain Registration** - .com, .in, .co.in and 100+ TLDs
- **SSL Certificates** - 256-bit encryption
- **Backup Services** - Daily automated backups

### 1.2 Website Goals
- Generate qualified leads for all services
- Showcase hosting plans with interactive flip cards
- Provide real-time domain availability search
- Build trust through professional design
- Convert visitors with clear CTAs

### 1.3 Target Audience
- Small to medium businesses
- Startups and entrepreneurs
- E-commerce stores
- Agencies and developers
- Corporate clients

---

## 2. Technology Stack

### 2.1 Frontend
- **HTML5** - Semantic structure
- **CSS3** - Custom properties, Flexbox, Grid, DVH units
- **JavaScript ES6+** - Fetch API, IntersectionObserver
- **Font Awesome 6.5.0** - Icons
- **Google Fonts** - Orbitron (headings), Rajdhani (body)

### 2.2 Backend
- **PHP 8.0+** - Server logic, form processing
- **JSON** - Service data storage
- **Apache 2.4+** - Web server with mod_rewrite

### 2.3 Features
- 3D flip card animations
- AJAX form submissions
- Real-time domain search
- Particle canvas background
- Typed text animation
- Counter animations
- Scroll reveal effects
- Responsive hamburger menu

---

## 3. File Structure

```
idesign/
├── index.php                  ← Homepage (all sections)
├── config.php                 ← Site constants
├── .htaccess                  ← Apache config
│
├── assets/
│   ├── css/style.css          ← 14.5 KB stylesheet
│   ├── js/main.js             ← 5.5 KB JavaScript
│   └── images/                ← Logo, banners (to be added)
│
├── api/
│   ├── services.json          ← Service data (9 services)
│   ├── contact.php            ← Form handler
│   └── domain_check.php       ← Domain search
│
├── includes/
│   ├── header.php             ← Navbar + HTML head
│   └── footer.php             ← Footer + scripts
│
└── pages/
    ├── hosting.php            ← Hosting plans
    ├── email.php              ← Email services
    ├── domains.php            ← Domain search
    ├── security.php           ← SSL & Backup
    ├── webdesign.php          ← Web design
    └── contact.php            ← Contact form
```

**Total Size:** 18 KB (zipped), 45 KB (uncompressed)

---

## 4. Page Details & Features

### 4.1 Homepage (index.php)

#### Hero Section
- Animated particle canvas (80 red particles)
- Badge: "Mumbai's #1 Digital Agency"
- Heading: "We Power Your Digital World"
- Typed text cycling through services
- 2 CTA buttons: "Get Started Free", "View Hosting Plans"
- Scroll indicator with bounce animation

#### Stats Section
- 500+ Clients Served
- 99.9% Uptime SLA
- 10 Years Experience
- 24/7 Support
- 1200+ Websites Hosted
- Numbers count up on scroll

#### Service Sections
**Hosting** - 4 flip cards (Shared, Dedicated, WordPress, Cloud)
**Domain Search** - Real-time availability checker for 8 TLDs
**Email** - 3 flip cards (Basic, Enterprise, Corporate)
**Security** - 2 flip cards (SSL, Backup)
**Why iDesign** - 6 feature cards with hover effects
**Contact Form** - AJAX submission with validation

### 4.2 Hosting Page
- Page banner with heading
- All 4 hosting plans as flip cards
- "Included Features" section with 4 cards
- Anchor links: #shared, #dedicated, #wordpress, #cloud

### 4.3 Email Page
- Page banner
- 3 email plans as flip cards
- 4 feature cards explaining benefits

### 4.4 Domains Page
- Page banner
- Domain search tool (same as homepage)
- 4 domain benefit cards

### 4.5 Security Page
- Page banner
- 2 security service flip cards

### 4.6 Web Design Page
- Page banner
- 6 design service cards (no flipping)
- Services: Corporate sites, E-commerce, Mobile-first, WordPress, UI/UX, Landing pages

### 4.7 Contact Page
- Two-column layout
- Left: Contact info (email, phone, hours, location)
- Right: Contact form with service pre-selection
- URL parameter support: ?service=wordpress

---

## 5. Design System

### 5.1 Color Palette
```css
/* Brand Colors */
--red:      #dc1e1e  (buttons, accents, icons)
--red-dark: #a01010  (hover states)
--red-glow: rgba(220,30,30,0.4)  (glow effects)

/* Backgrounds */
--dark:  #0a0a0f  (page background)
--dark2: #111118  (alternate sections)
--dark3: #1a1a25  (cards, forms)
--dark4: #22222f  (inputs)

/* Text */
--white: #ffffff  (headings)
--light: #e8e8f0  (body text)
--grey:  #888899  (secondary text)
```

### 5.2 Typography
- **Headings:** Orbitron (900/700/400) - Futuristic, bold
- **Body:** Rajdhani (700/600/400/300) - Clean, readable
- **Base Size:** 16px
- **Scale:** Responsive with clamp()

### 5.3 Spacing
- Section padding: 6rem vertical, 2rem horizontal
- Card padding: 2rem
- Grid gaps: 2rem
- Button padding: 0.85rem 2rem

### 5.4 Animations
- Hero fade-up: 1.2s
- Pulse border: 2s infinite
- Bounce scroll: 2s infinite
- Flip cards: 0.7s cubic-bezier
- Scroll reveal: 0.7s ease

---

## 6. API Endpoints

### 6.1 Contact Form API
**Endpoint:** POST /api/contact.php

**Request:**
```javascript
formData.append('name', 'John Doe');
formData.append('email', 'john@example.com');
formData.append('service', 'shared-hosting');
formData.append('message', 'Need hosting');
```

**Response:**
```json
{
  "success": true,
  "message": "Thank you! We will contact you within 24 hours."
}
```

**Validation:**
- Name: Required, max 100 chars
- Email: Required, valid format
- Message: Required, max 1000 chars

### 6.2 Domain Check API
**Endpoint:** GET /api/domain_check.php?domain=mybusiness

**Response:**
```json
{
  "success": true,
  "results": [
    {
      "domain": "mybusiness.com",
      "available": true,
      "price": "Rs 899/yr"
    }
  ]
}
```

**TLDs Checked:** .com, .in, .co.in, .net, .org, .io, .store, .online

**Note:** Current implementation uses random availability. Replace with ResellerClub API for production.

### 6.3 Services JSON
**Endpoint:** GET /api/services.json

**Structure:**
```json
{
  "hosting": [
    {
      "id": "shared",
      "name": "Shared Hosting",
      "icon": "fa-server",
      "price": "Rs 99/mo",
      "features": ["10 GB SSD", "5 Emails", ...]
    }
  ],
  "email": [...],
  "security": [...]
}
```

---

## 7. Image Assets Guide

### 7.1 Logo Integration

**Current Logo:** iDesign-3D-Logo.jpg (339 KB, 1920x1080px)
- Red "i" + Black "Design" + Red spheres arc

**Placement:** /assets/images/idesign-logo.png

**Current Implementation:** Text-based logo in navbar
```html
<span class="logo-i">i</span><span class="logo-d">Design</span>
```

**To Use Image Logo:**
```html
<img src="assets/images/idesign-logo.png" alt="iDesign" height="40"/>
```

### 7.2 Required Images

#### Service Icons (Optional - Currently Font Awesome)
If using custom icons instead of Font Awesome:
- 64x64px SVG format
- Files: icon-shared-hosting.svg, icon-dedicated.svg, etc.
- Place in: /assets/images/icons/

#### Page Banners (Optional Enhancement)
- Dimensions: 1920x600px
- Format: JPG/PNG optimized under 200 KB
- Files needed:
  - banner-hosting.jpg (server room)
  - banner-email.jpg (inbox concept)
  - banner-domains.jpg (globe/network)
  - banner-security.jpg (lock/shield)
  - banner-webdesign.jpg (code editor)

### 7.3 Image Optimization
- Use TinyPNG for compression
- Max file size: 200 KB
- Add loading="lazy" for below-fold images
- Provide 2x retina versions for logos

---

## 8. Deployment Instructions

### 8.1 XAMPP Local Setup

**Step 1:** Install XAMPP from apache friends.org

**Step 2:** Extract files to C:\xampp\htdocs\idesign\

**Step 3:** Start Apache in XAMPP Control Panel

**Step 4:** Open http://localhost/idesign/

### 8.2 cPanel Production Deployment

**Step 1:** Upload files via File Manager
- Login to cPanel
- Navigate to public_html
- Upload & extract ZIP
- Move all files to root

**Step 2:** Set PHP Version
- cPanel > MultiPHP Manager
- Select domain
- Set PHP 8.0+

**Step 3:** Configure Email
Edit api/contact.php:
- Set correct $to email address
- Configure SMTP with PHPMailer (recommended)

**Step 4:** Enable HTTPS
- cPanel > SSL/TLS Status
- Run AutoSSL
- Test https:// access

**Step 5:** Test Features
- Homepage loads
- Flip cards work
- Domain search functions
- Contact form submits
- Mobile menu works

---

## 9. Maintenance Guide

### 9.1 Adding New Service Plan

Edit api/services.json:
```json
{
  "hosting": [
    {
      "id": "reseller",
      "name": "Reseller Hosting",
      "icon": "fa-network-wired",
      "price": "Rs 1,999/mo",
      "features": [...]
    }
  ]
}
```

No code changes needed - flip cards auto-update!

### 9.2 Changing Prices

Edit api/services.json:
```json
"price": "Rs 149/mo"  // Changed from Rs 99/mo
```

### 9.3 Adding New Page

**Step 1:** Create pages/newpage.php
```php
<?php 
$pt = "Page Title"; 
require_once __DIR__.'/../includes/header.php'; 
?>
<div class="banner">
  <h1>Page <span style="color:var(--red)">Title</span></h1>
</div>
<section class="sec">
  <!-- Content -->
</section>
<?php require_once __DIR__.'/../includes/footer.php'; ?>
```

**Step 2:** Add to navbar in includes/header.php

**Step 3:** Add to footer links

### 9.4 Update Contact Info

Edit config.php:
```php
define('SITE_EMAIL', 'support@idesigngroup.co.in');
define('SITE_PHONE', '+91 22 1234 5678');
```

Changes reflect automatically in footer and contact page.

---

## 10. Troubleshooting

### 10.1 Internal Server Error (500)

**Cause:** .htaccess syntax or mod_rewrite disabled

**Solution:**
- Rename .htaccess temporarily
- If site loads, fix .htaccess
- Enable mod_rewrite in Apache config

### 10.2 Flip Cards Not Working

**Cause:** JavaScript not loading or services.json not found

**Solution:**
- Check browser console (F12)
- Verify file path: api/services.json
- Validate JSON syntax at jsonlint.com

### 10.3 Contact Form Not Sending

**Cause:** PHP mail() disabled or spam filters

**Solution:**
- Use PHPMailer with SMTP
- Configure proper SMTP credentials
- Add SPF/DKIM DNS records

### 10.4 CSS Not Applying

**Cause:** Browser cache

**Solution:**
- Hard refresh: Ctrl+Shift+R
- Add version to CSS: style.css?v=1.1
- Clear browser cache

---

## 11. Security Best Practices

### 11.1 Input Sanitization
```php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
```

### 11.2 XSS Prevention
```php
echo htmlspecialchars($user_input, ENT_QUOTES, 'UTF-8');
```

### 11.3 HTTPS Enforcement
Already configured in .htaccess:
```apache
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

### 11.4 Rate Limiting
Implement session-based rate limiting in contact.php to prevent spam.

---

## 12. Performance Optimization

### Current Optimizations
- Minified CSS (14.5 KB)
- Efficient JS (5.5 KB)
- GZIP compression enabled
- Browser caching (30 days for static assets)
- Lazy loading with IntersectionObserver
- Async JSON loading

### Recommended Improvements
- Enable PHP OPcache
- Use Cloudflare CDN
- Convert images to WebP
- Implement lazy image loading
- Minify HTML output

---

## 13. Future Enhancements

### Phase 2 (Next 3 months)
- Client login portal
- Blog section
- Live chat integration
- Shopping cart & checkout
- Client testimonials

### Phase 3 (6-12 months)
- Full CRM system
- Mobile app
- Multi-language support
- Advanced analytics
- Payment gateway integration

---

## 14. Support Resources

### Documentation
- PHP Manual: php.net/manual
- Font Awesome: fontawesome.com/icons
- MDN Web Docs: developer.mozilla.org

### Tools
- PHPMailer: github.com/PHPMailer/PHPMailer
- ResellerClub API: manage.resellerclub.com/kb
- JSON Validator: jsonlint.com

---

## 15. Changelog

### Version 1.0 (March 3, 2026)
- Initial release
- Homepage with 7 sections
- 6 internal pages
- 3D flip card animations
- AJAX contact form
- Real-time domain search
- Particle canvas background
- Responsive design
- 16 files total

---

## Contact Information

**Website:** https://www.idesigngroup.co.in  
**Email:** info@idesigngroup.co.in  
**Phone:** +91 99999 99999  
**Location:** Mumbai, Maharashtra, India  
**Hours:** Monday-Saturday, 9 AM - 7 PM IST

---

**End of Handbook**

For technical support or questions about this documentation, contact the development team.
