document.addEventListener("DOMContentLoaded", () => {
  const body = document.body;

  // ========================
  // NAV MENU (Mobile Overlay)
  // ========================
  const menuIcon = document.querySelector(".menu-icon");
  const navOverlay = document.querySelector(".mobile-overlay");
  const closeBtn = document.querySelector(".mobile-close");

  // Open popup
  menuIcon?.addEventListener("click", () => {
    navOverlay.classList.add("active");
    body.style.overflow = "hidden";
  });

  // Close popup
  function closePopup() {
    navOverlay.classList.remove("active");
    body.style.overflow = "auto";
    document.querySelectorAll(".popup-page").forEach(p => p.classList.remove("active"));
    document.querySelector(".main-page").classList.add("active");
  }

  navOverlay?.addEventListener("click", e => {
    if (e.target === navOverlay) closePopup();
  });
  closeBtn?.addEventListener("click", closePopup);

  // Open submenu
  document.querySelectorAll(".submenu-link").forEach(link => {
    link.addEventListener("click", e => {
      e.preventDefault();
      document.querySelectorAll(".popup-page").forEach(p => p.classList.remove("active"));
      const target = document.getElementById(link.dataset.target);
      if (target) target.classList.add("active");
    });
  });

  // Back button
  document.querySelectorAll(".back-link").forEach(btn => {
    btn.addEventListener("click", e => {
      e.preventDefault();
      document.querySelectorAll(".popup-page").forEach(p => p.classList.remove("active"));
      document.querySelector(".main-page").classList.add("active");
    });
  });

  // =======================================
  // SCROLL REVEAL FOR NEXT PROJECT IMAGE
  // =======================================
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target); // only trigger once
      }
    });
  }, { threshold: 0.2 });

  const heroImage = document.querySelector(".hero-image");
  if (heroImage) observer.observe(heroImage);

  // ========================
  // SERVICES MODALS
  // ========================
  const serviceOverlay = document.querySelector(".service-modal-overlay");
  const serviceCards = document.querySelectorAll(".service-card");
  const serviceModals = document.querySelectorAll(".service-modal");

  // Open modal
  serviceCards.forEach(card => {
    card.addEventListener("click", () => {
      const target = document.getElementById("modal-" + card.dataset.service);
      if (target) {
        serviceOverlay.style.display = "block";
        target.style.display = "block";
        body.style.overflow = "hidden";
      }
    });
  });

  // Close modal
  function closeModal() {
    serviceOverlay.style.display = "none";
    serviceModals.forEach(m => m.style.display = "none");
    body.style.overflow = "auto";
  }

  // Close on buttons
  document.querySelectorAll(".modal-close").forEach(btn => {
    btn.addEventListener("click", closeModal);
  });

  // Close clicking overlay
  serviceOverlay?.addEventListener("click", closeModal);
});
