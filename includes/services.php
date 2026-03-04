<?php
/**
 * Central service data store + render helper.
 * Included by pages that show flip-card grids.
 * No AJAX, no JSON fetch — renders directly with the page.
 */
$SERVICES = [
  'hosting' => [
    ['id'=>'shared',    'name'=>'Shared Hosting',    'icon'=>'fa-server',   'tagline'=>'Perfect for startups',       'price'=>'\u20b999/mo',   'features'=>['10 GB SSD Storage','5 Email Accounts','Free SSL Certificate','99.9% Uptime SLA','cPanel Control Panel']],
    ['id'=>'dedicated', 'name'=>'Dedicated Server',  'icon'=>'fa-database', 'tagline'=>'Full power & control',        'price'=>'\u20b94999/mo', 'features'=>['Unlimited SSD Storage','Unlimited Bandwidth','Full Root Access','24/7 Priority Support','Custom Server Config']],
    ['id'=>'wordpress', 'name'=>'WordPress Hosting', 'icon'=>'fa-wordpress','tagline'=>'Optimised for WordPress',     'price'=>'\u20b9199/mo',  'features'=>['1-Click WP Install','Auto Core Updates','LiteSpeed Cache','Free Premium Theme','Daily Automated Backup']],
    ['id'=>'cloud',     'name'=>'Cloud Hosting',     'icon'=>'fa-cloud',    'tagline'=>'Scale on demand',             'price'=>'\u20b9599/mo',  'features'=>['Auto-Scaling Resources','Load Balancing','99.99% Uptime','Multi-Region Deploy','Pay-as-you-Go']],
  ],
  'email' => [
    ['id'=>'basic',      'name'=>'Basic Email',      'icon'=>'fa-envelope',           'tagline'=>'For individuals & freelancers','price'=>'\u20b949/mo',   'features'=>['5 GB Mailbox Storage','5 Email Accounts','Webmail Interface','SMTP / IMAP / POP3','Spam & Virus Filter']],
    ['id'=>'enterprise', 'name'=>'Enterprise Email', 'icon'=>'fa-envelope-open-text', 'tagline'=>'For growing teams',           'price'=>'\u20b9149/mo',  'features'=>['25 GB Mailbox Storage','25 Email Accounts','Calendar & Contacts Sync','Mobile Device Sync','Advanced Spam Filter']],
    ['id'=>'corporate',  'name'=>'Corporate Email',  'icon'=>'fa-building',           'tagline'=>'For large organisations',     'price'=>'\u20b9399/mo',  'features'=>['Unlimited Storage','Unlimited Accounts','Microsoft Teams Integration','Email Archiving','Priority 24/7 Support']],
  ],
  'security' => [
    ['id'=>'ssl',    'name'=>'SSL Certificate',   'icon'=>'fa-lock',       'tagline'=>'Encrypt & build trust', 'price'=>'\u20b9499/yr',  'features'=>['256-bit Encryption','Green Padlock & HTTPS','Wildcard Option Available','Browser Trusted CA','Auto Renewal Reminder']],
    ['id'=>'backup', 'name'=>'Backup & Restore',  'icon'=>'fa-shield-alt', 'tagline'=>'Never lose your data',  'price'=>'\u20b9299/mo',  'features'=>['Daily Automated Backups','30-Day Backup Retention','One-Click Restore','Off-site Secure Storage','Email Backup Alerts']],
  ],
];

function render_services(string $cat): void {
  global $SERVICES;
  foreach ($SERVICES[$cat] ?? [] as $s) {
    $id  = htmlspecialchars($s['id']);
    $nm  = htmlspecialchars($s['name']);
    $ic  = htmlspecialchars($s['icon']);
    $tl  = htmlspecialchars($s['tagline']);
    $pr  = htmlspecialchars($s['price']);
    $fts = implode('', array_map(
      fn($f) => '<li><i class="fas fa-check"></i>'.htmlspecialchars($f).'</li>',
      $s['features']
    ));
    echo <<<HTML
    <div class="fc aos">
      <div class="fc-in">
        <div class="fc-f">
          <div class="svc-icon"><i class="fas {$ic}"></i></div>
          <h3>{$nm}</h3>
          <p class="tl">{$tl}</p>
          <div class="price">{$pr}</div>
          <span class="flip-tip">Hover to see features &rarr;</span>
        </div>
        <div class="fc-b">
          <h3>{$nm}</h3>
          <ul>{$fts}</ul>
          <a href="/contact?service={$id}" class="btn-sm">Get Started</a>
        </div>
      </div>
    </div>
    HTML;
  }
}
