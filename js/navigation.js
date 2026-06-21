document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.querySelector(".mobile-toggle");
  const menu = document.getElementById("primary-menu");

  if (!toggle || !menu) return;

  toggle.addEventListener("click", () => {
    const isOpen = menu.classList.toggle("active");
    toggle.setAttribute("aria-expanded", isOpen);
    // Update aria-label for screen readers
    toggle.setAttribute("aria-label", isOpen ? "Close menu" : "Open menu");
  });

  // Close menu when a link is clicked (mobile only)
  menu.addEventListener("click", (event) => {
    if (event.target.tagName === "A") {
      menu.classList.remove("active");
      toggle.setAttribute("aria-expanded", "false");
      toggle.setAttribute("aria-label", "Open menu");
    }
  });
});
