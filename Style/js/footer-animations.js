// Footer Animations Initialization
(function() {
  'use strict';
  
  // Check if GSAP is loaded
  if (typeof gsap === 'undefined') {
    console.warn('GSAP is not loaded. Footer animations will be disabled.');
    return;
  }
  
  // Check if ScrollTrigger is loaded
  if (typeof ScrollTrigger === 'undefined') {
    console.warn('ScrollTrigger is not loaded. Some footer animations will be disabled.');
  }
  
  // Initialize when DOM is ready
  function init() {
    // Register plugins if available
    if (typeof ScrollTrigger !== 'undefined') {
      gsap.registerPlugin(ScrollTrigger);
    }
    
    // Initialize footer animations
    initFooterAnimations();
    
    // Initialize theme toggle
    initThemeToggle();
  }
  
  // Initialize footer animations
  function initFooterAnimations() {
    // Animate footer elements when they come into view with advanced effects
    if (typeof ScrollTrigger !== 'undefined') {
      gsap.utils.toArray('.footer-column').forEach((column, i) => {
        gsap.from(column, {
          scrollTrigger: {
            trigger: column,
            start: "top bottom-=100",
            toggleActions: "play none none reverse",
            scrub: false
          },
          y: 60,
          opacity: 0,
          duration: 1,
          delay: i * 0.2,
          ease: "power3.out",
          stagger: 0.1
        });
      });
      
      // Animate stats with bounce effect
      gsap.utils.toArray('.stat-item').forEach((stat, i) => {
        gsap.from(stat, {
          scrollTrigger: {
            trigger: stat,
            start: "top bottom-=100",
            toggleActions: "play none none reverse"
          },
          y: 40,
          opacity: 0,
          scale: 0.8,
          duration: 0.8,
          delay: i * 0.15,
          ease: "back.out(1.7)",
          stagger: 0.1
        });
      });
      
      // Animate social links with elastic effect
      gsap.from('.social-link', {
        scrollTrigger: {
          trigger: '.footer-social',
          start: "top bottom-=100",
          toggleActions: "play none none reverse"
        },
        y: 30,
        opacity: 0,
        scale: 0.5,
        duration: 0.7,
        stagger: 0.15,
        ease: "elastic.out(1, 0.3)"
      });
      
      // Animate copyright with fade in
      gsap.from('.footer-copyright', {
        scrollTrigger: {
          trigger: '.footer-bottom',
          start: "top bottom-=100",
          toggleActions: "play none none reverse"
        },
        opacity: 0,
        y: 20,
        duration: 1,
        ease: "power2.out"
      });
      
      // Animate footer logo
      gsap.from('.footer-logo', {
        scrollTrigger: {
          trigger: '.footer-brand',
          start: "top bottom-=50",
          toggleActions: "play none none reverse"
        },
        x: -50,
        opacity: 0,
        duration: 1,
        ease: "back.out(1.4)"
      });
    }
    
    // Continuous animation for stat values (works without ScrollTrigger)
    gsap.to('.stat-value', {
      scale: 1.05,
      duration: 2,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut",
      stagger: 0.3
    });
  }
  
  // Initialize theme toggle functionality
  function initThemeToggle() {
    const themeToggle = document.getElementById('theme-toggle');
    const footer = document.querySelector('.professional-footer');
    
    if (!themeToggle || !footer) return;
    
    // Check for saved theme preference or respect OS preference
    const savedTheme = localStorage.getItem('footer-theme');
    const osPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const initialTheme = savedTheme || (osPrefersDark ? 'dark' : 'light');
    
    // Apply initial theme
    footer.setAttribute('data-theme', initialTheme);
    
    // Toggle theme on button click
    themeToggle.addEventListener('click', function() {
      const currentTheme = footer.getAttribute('data-theme');
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
      
      // Apply new theme
      footer.setAttribute('data-theme', newTheme);
      
      // Save preference
      localStorage.setItem('footer-theme', newTheme);
      
      // Add visual feedback
      this.style.transform = 'scale(0.9)';
      setTimeout(() => {
        this.style.transform = '';
      }, 150);
    });
  }
  
  // Wait for DOM to be ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();