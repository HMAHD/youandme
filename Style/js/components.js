// Mobile Navigation Toggle
document.addEventListener("DOMContentLoaded", function () {
  // Check if we're on the page with navigation
  const navbarContainer = document.querySelector(".navbar-container");
  if (!navbarContainer) return;

  const mobileToggle = document.getElementById("mobileToggle");
  const mobileMenu = document.getElementById("mobileMenu");
  const mobileMenuOverlay = document.getElementById("mobileMenuOverlay");
  const mobileMenuClose = document.getElementById("mobileMenuClose");
  const themeToggle = document.getElementById("themeToggle");

  // If mobile toggle doesn't exist, we're not on a page with navigation
  if (!mobileToggle) return;

  // Function to open mobile menu
  function openMobileMenu() {
    mobileToggle.classList.add("active");
    mobileMenu.classList.add("active");
    mobileMenuOverlay.classList.add("active");
    document.body.style.overflow = "hidden"; // Prevent body scroll
  }

  // Function to close mobile menu
  function closeMobileMenu() {
    mobileToggle.classList.remove("active");
    mobileMenu.classList.remove("active");
    mobileMenuOverlay.classList.remove("active");
    document.body.style.overflow = ""; // Restore body scroll
  }

  // Toggle mobile menu when hamburger is clicked
  mobileToggle.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();

    if (mobileMenu.classList.contains("active")) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  });

  // Close mobile menu when close button is clicked
  mobileMenuClose.addEventListener("click", function (e) {
    e.preventDefault();
    closeMobileMenu();
  });

  // Close mobile menu when overlay is clicked
  mobileMenuOverlay.addEventListener("click", function () {
    closeMobileMenu();
  });

  // Close mobile menu on escape key
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && mobileMenu.classList.contains("active")) {
      closeMobileMenu();
    }
  });

  // Handle window resize
  window.addEventListener("resize", function () {
    if (window.innerWidth > 992 && mobileMenu.classList.contains("active")) {
      closeMobileMenu();
    }
  });

  // Theme toggle functionality
  if (themeToggle) {
    // Initialize theme on page load
    function initializeTheme() {
      const savedTheme = localStorage.getItem("theme-preference");
      const prefersDark = window.matchMedia(
        "(prefers-color-scheme: dark)"
      ).matches;
      const theme = savedTheme || (prefersDark ? "dark-mode" : "light-mode");

      document.body.classList.remove("light-mode", "dark-mode");
      document.body.classList.add(theme);
      updateThemeIcon(theme);
    }

    // Update theme icon based on current theme
    function updateThemeIcon(theme) {
      const themeIcon = document.getElementById("themeIcon");
      if (themeIcon) {
        if (theme === "dark-mode") {
          themeIcon.src = "Style/img/nav/light.png";
          themeIcon.alt = "Switch to Light Mode";
        } else {
          themeIcon.src = "Style/img/nav/light.png";
          themeIcon.alt = "Switch to Dark Mode";
        }
      }
    }

    // Toggle theme on button click
    themeToggle.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();

      // Add visual feedback
      this.style.transform = "scale(0.9)";
      setTimeout(() => {
        this.style.transform = "";
      }, 150);

      // Get current theme
      const currentTheme = document.body.classList.contains("dark-mode")
        ? "dark-mode"
        : "light-mode";
      const newTheme =
        currentTheme === "dark-mode" ? "light-mode" : "dark-mode";

      // Apply new theme
      document.body.classList.remove("light-mode", "dark-mode");
      document.body.classList.add(newTheme);

      // Save preference
      localStorage.setItem("theme-preference", newTheme);

      // Update icon
      updateThemeIcon(newTheme);

      console.log("Theme switched to:", newTheme);
    });

    // Initialize theme on page load
    initializeTheme();

    // Listen for system theme changes
    window
      .matchMedia("(prefers-color-scheme: dark)")
      .addEventListener("change", (e) => {
        if (!localStorage.getItem("theme-preference")) {
          const newTheme = e.matches ? "dark-mode" : "light-mode";
          document.body.classList.remove("light-mode", "dark-mode");
          document.body.classList.add(newTheme);
          updateThemeIcon(newTheme);
        }
      });
  }
});
