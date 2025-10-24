// Website Uptime Tracker
// This script tracks the actual uptime of the website since the server started

class UptimeTracker {
  constructor() {
    this.startTime = null;
    this.initialize();
  }

  // Initialize the uptime tracker
  initialize() {
    // Try to get start time from sessionStorage first (per session)
    const storedStartTime = sessionStorage.getItem("websiteSessionStartTime");

    if (storedStartTime) {
      this.startTime = new Date(storedStartTime);
    } else {
      // New session, set start time to now
      this.startTime = new Date();
      sessionStorage.setItem(
        "websiteSessionStartTime",
        this.startTime.toISOString()
      );
    }

    // Start the update cycle
    this.updateUptime();
    setInterval(() => this.updateUptime(), 1000);
  }

  // Update the uptime display
  updateUptime() {
    const now = new Date();
    const diff = now - this.startTime;

    // Convert to days, hours, minutes, seconds
    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((diff % (1000 * 60)) / 1000);

    // Update the display
    const uptimeDisplay = document.getElementById("uptime-display");
    if (uptimeDisplay) {
      document.getElementById("uptime-days").textContent = days;
      document.getElementById("uptime-hours").textContent = hours;
      document.getElementById("uptime-minutes").textContent = minutes;
      document.getElementById("uptime-seconds").textContent = seconds;
    }
  }

  // Reset the uptime (to be called when server restarts)
  reset() {
    this.startTime = new Date();
    sessionStorage.setItem(
      "websiteSessionStartTime",
      this.startTime.toISOString()
    );
    this.updateUptime();
  }
}

// Initialize the uptime tracker when the DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
  window.uptimeTracker = new UptimeTracker();

  // Expose reset function globally
  window.resetWebsiteUptime = function () {
    if (window.uptimeTracker) {
      window.uptimeTracker.reset();
    }
  };
});
