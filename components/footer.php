<!-- Modern Footer -->
<footer class="footer">
  <div class="footer-content">
    <a href="index.php" class="footer-brand">
      <div class="footer-logo"></div>
      <span><?php echo $text['logo'] ?></span>
    </a>

    <!-- Website uptime display - tracks actual website uptime -->
    <div class="footer-uptime">
      <span id="uptime-display">Website Uptime: 
        <span id="uptime-days">0</span>d 
        <span id="uptime-hours">0</span>h 
        <span id="uptime-minutes">0</span>m 
        <span id="uptime-seconds">0</span>s
      </span>
    </div>
  </div>

  <div class="footer-copy">
    <?php if ($copy <> ''): ?>
      <?php echo $copy ?>
    <?php else: ?>
      © <?php echo date('Y'); ?> <?php echo $text['boy']; ?> & <?php echo $text['girl']; ?>. All rights reserved.
    <?php endif; ?>
  </div>
</footer>