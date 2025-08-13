//  animation for service items
document.addEventListener("DOMContentLoaded", function () {
  const serviceItems = document.querySelectorAll(".service-item");

  serviceItems.forEach((item, index) => {
    item.style.opacity = "0";
    item.style.transform = "translateX(-20px)";

    setTimeout(() => {
      item.style.transition = "all 0.5s ease";
      item.style.opacity = "1";
      item.style.transform = "translateX(0)";
    }, index * 100);
  });

  // Interactive dots
  const dots = document.querySelectorAll(".dot");
  dots.forEach((dot) => {
    dot.addEventListener("click", function () {
      dots.forEach((d) => (d.style.background = "var(--secondary-color)"));
      this.style.background = "var(--primary-color)";
    });
  });

  // Book button click animation
  const bookBtn = document.querySelector(".book-btn");
  bookBtn.addEventListener("click", function (e) {
    e.preventDefault();

    // Create ripple effect
    const ripple = document.createElement("span");
    ripple.style.position = "absolute";
    ripple.style.borderRadius = "50%";
    ripple.style.background = "rgba(255,255,255,0.6)";
    ripple.style.transform = "scale(0)";
    ripple.style.animation = "ripple 0.6s linear";
    ripple.style.left = e.clientX - e.target.offsetLeft + "px";
    ripple.style.top = e.clientY - e.target.offsetTop + "px";

    this.appendChild(ripple);

    setTimeout(() => {
      ripple.remove();
    }, 600);

    //  add actual booking functionality
    alert("Redirecting to booking system...");
  });

  // Add ripple animation CSS
  const style = document.createElement("style");
  style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
  document.head.appendChild(style);

  // Scroll animations for categories
  const categories = document.querySelectorAll(".service-category");
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = "1";
          entry.target.style.transform = "translateY(0)";
        }
      });
    },
    {
      threshold: 0.1,
      rootMargin: "0px 0px -50px 0px",
    }
  );

  categories.forEach((category) => {
    observer.observe(category);
  });

  // Smooth scroll to sections
  function smoothScrollTo(element) {
    element.scrollIntoView({
      behavior: "smooth",
      block: "start",
    });
  }

  // Add hover effects for service items
  const serviceItemsHover = document.querySelectorAll(".service-item");
  serviceItemsHover.forEach((item) => {
    item.addEventListener("mouseenter", function () {
      this.style.transform = "translateX(10px)";
    });

    item.addEventListener("mouseleave", function () {
      this.style.transform = "translateX(0)";
    });
  });

  // Special offers card interactions
  const offerCards = document.querySelectorAll(".offer-card");
  offerCards.forEach((card) => {
    card.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-15px) scale(1.02)";
    });

    card.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0) scale(1)";
    });
  });

  // Add loading animation
  const priceContainer = document.querySelector(".price-container");
  priceContainer.style.opacity = "0";
  priceContainer.style.transform = "translateY(50px)";

  setTimeout(() => {
    priceContainer.style.transition = "all 1s ease";
    priceContainer.style.opacity = "1";
    priceContainer.style.transform = "translateY(0)";
  }, 100);
});
