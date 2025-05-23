// Mobile menu functionality
const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");

if (menuBtn && navLinks) {
  const menuBtnIcon = menuBtn.querySelector("i");

  menuBtn.addEventListener("click", (e) => {
    navLinks.classList.toggle("open");

    const isOpen = navLinks.classList.contains("open");
    menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
  });

  navLinks.addEventListener("click", (e) => {
    navLinks.classList.remove("open");
    menuBtnIcon.setAttribute("class", "ri-menu-line");
  });
}

// ScrollReveal animations (only apply on index page)
if (typeof ScrollReveal !== 'undefined') {
  const scrollRevealOption = {
    distance: "50px",
    origin: "bottom",
    duration: 1000,
  };

  // header container
  ScrollReveal().reveal(".header__container h1", {
    ...scrollRevealOption,
  });

  ScrollReveal().reveal(".header__container p", {
    ...scrollRevealOption,
    delay: 500,
  });

  ScrollReveal().reveal(".header__container form", {
    ...scrollRevealOption,
    delay: 1000,
  });

  ScrollReveal().reveal(".header__container a", {
    ...scrollRevealOption,
    delay: 1500,
  });
}

// Initialize swiper if it exists on the page
if (typeof Swiper !== 'undefined') {
  const swiper = new Swiper(".swiper", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
  });
}
