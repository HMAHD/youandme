<!-- Advanced Navigation Bar -->
<nav class="navbar-container">
  <div class="navbar">
    <!-- Brand/Logo -->
    <a href="index.php" class="navbar-brand">
      <span class="brand-text"><?php echo $text['logo'] ?></span>
    </a>

    <!-- Navigation Links -->
    <ul class="navbar-nav" id="navbarNav">
      <li class="nav-item">
        <a href="index.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
          <img src="Style/img/nav/home.png" alt="Home" class="nav-icon">
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="leaving.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'leaving.php') ? 'active' : ''; ?>">
          <img src="Style/img/nav/messages.png" alt="Messages" class="nav-icon">
          <span>Messages</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="about.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>">
          <img src="Style/img/nav/about.png" alt="About" class="nav-icon">
          <span>About</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="loveImg.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'loveImg.php') ? 'active' : ''; ?>">
          <img src="Style/img/nav/galery.png" alt="Gallery" class="nav-icon">
          <span>Gallery</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="list.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'list.php') ? 'active' : ''; ?>">
          <img src="Style/img/nav/list.png" alt="Our List" class="nav-icon">
          <span>Our List</span>
        </a>
      </li>
    </ul>

    <!-- Mobile Toggle -->
    <button class="mobile-toggle" id="mobileToggle">
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
    
    <!-- Theme Toggle Button -->
    <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
      <img src="Style/img/nav/light.png" alt="Theme" class="theme-icon" id="themeIcon">
    </button>
  </div>
</nav>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
  <div class="mobile-menu-header">
    <a href="index.php" class="mobile-menu-brand">
      <span class="brand-text"><?php echo $text['logo'] ?></span>
    </a>
    <button class="mobile-menu-close" id="mobileMenuClose">
      <span>×</span>
    </button>
  </div>

  <ul class="mobile-menu-nav">
    <li class="mobile-menu-item">
      <a href="index.php" class="mobile-menu-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
        <img src="Style/img/nav/home.png" alt="Home" class="nav-icon">
        <span>Home</span>
      </a>
    </li>
    <li class="mobile-menu-item">
      <a href="leaving.php" class="mobile-menu-link <?php echo (basename($_SERVER['PHP_SELF']) == 'leaving.php') ? 'active' : ''; ?>">
        <img src="Style/img/nav/messages.png" alt="Messages" class="nav-icon">
        <span>Messages</span>
      </a>
    </li>
    <li class="mobile-menu-item">
      <a href="about.php" class="mobile-menu-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>">
        <img src="Style/img/nav/about.png" alt="About" class="nav-icon">
        <span>About</span>
      </a>
    </li>
    <li class="mobile-menu-item">
      <a href="loveImg.php" class="mobile-menu-link <?php echo (basename($_SERVER['PHP_SELF']) == 'loveImg.php') ? 'active' : ''; ?>">
        <img src="Style/img/nav/galery.png" alt="Gallery" class="nav-icon">
        <span>Gallery</span>
      </a>
    </li>
    <li class="mobile-menu-item">
      <a href="list.php" class="mobile-menu-link <?php echo (basename($_SERVER['PHP_SELF']) == 'list.php') ? 'active' : ''; ?>">
        <img src="Style/img/nav/list.png" alt="Our List" class="nav-icon">
        <span>Our List</span>
      </a>
    </li>
  </ul>
</div>