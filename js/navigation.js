/**
 * Mobile menu toggle functionality
 */
document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("mobile-menu-toggle");
  const navContainer = document.querySelector(".nav-links-container");

  if (toggleBtn && navContainer) {
    toggleBtn.addEventListener("click", function () {
      navContainer.classList.toggle("open");
    });
  }
});
