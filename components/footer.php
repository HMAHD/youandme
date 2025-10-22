<!-- Modern Footer -->
<footer class="footer">
  <div class="footer-content">
    <a href="index.php" class="footer-brand">
      <div class="footer-logo"></div>
      <span><?php echo $text['logo'] ?></span>
    </a>

    <ul class="footer-links">
      <li><a href="index.php" class="footer-link">Home</a></li>
      <li><a href="leaving.php" class="footer-link">Messages</a></li>
      <li><a href="about.php" class="footer-link">About</a></li>
      <li><a href="loveImg.php" class="footer-link">Gallery</a></li>
      <li><a href="list.php" class="footer-link">Our List</a></li>
    </ul>

    <div class="footer-social">
      <a href="#" class="social-link">
        <i class="icon-heart"></i>
      </a>
      <a href="#" class="social-link">
        <i class="icon-instagram"></i>
      </a>
      <a href="#" class="social-link">
        <i class="icon-facebook"></i>
      </a>
      <a href="#" class="social-link">
        <i class="icon-twitter"></i>
      </a>
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