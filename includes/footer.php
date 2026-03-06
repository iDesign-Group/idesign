<footer class="footer">
  <div class="fg4">
    <div class="fbrand">
      <div class="flogo"><span class="logo-i">i</span><span class="logo-d">Design</span></div>
      <p>Crafting digital experiences that push boundaries. Your vision, our expertise.</p>
      <div class="social">
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="fcol"><h4>Hosting</h4><ul>
      <li><a href="/hosting#shared"><i class="fas fa-chevron-right"></i>Shared Hosting</a></li>
      <li><a href="/hosting#dedicated"><i class="fas fa-chevron-right"></i>Dedicated Server</a></li>
      <li><a href="/hosting#wordpress"><i class="fas fa-chevron-right"></i>WordPress Hosting</a></li>
      <li><a href="/hosting#cloud"><i class="fas fa-chevron-right"></i>Cloud Hosting</a></li>
    </ul></div>
    <div class="fcol"><h4>Services</h4><ul>
      <li><a href="/webdesign"><i class="fas fa-chevron-right"></i>Web Design</a></li>
      <li><a href="/email"><i class="fas fa-chevron-right"></i>Email Hosting</a></li>
      <li><a href="/domains"><i class="fas fa-chevron-right"></i>Domain Names</a></li>
      <li><a href="/security"><i class="fas fa-chevron-right"></i>SSL &amp; Backup</a></li>
    </ul></div>
    <div class="fcol"><h4>Contact</h4><ul>
      <li><i class="fas fa-envelope"></i> <?=SITE_EMAIL?></li>
      <li><i class="fas fa-phone"></i> <?=SITE_PHONE?></li>
      <li><i class="fas fa-map-marker-alt"></i> Mumbai, India</li>
      <li><i class="fas fa-globe"></i> <a href="<?=SITE_URL?>"><?=str_replace(['https://','http://'],'',SITE_URL)?></a></li>
    </ul></div>
  </div>
  <div class="fbot">&copy; <?=date('Y')?> iDesign Group. All rights reserved. &nbsp;|&nbsp; <a href="/sitemap.xml">Sitemap</a></div>
</footer>
<script src="<?=$root?>assets/js/main.js"></script>
</body></html>