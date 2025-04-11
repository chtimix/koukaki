// Parallax logo
document.addEventListener('scroll', () => {
  const scrollY = window.scrollY;
  const logo = document.querySelector('.banner-logo');
  if (logo) {
      logo.style.transform = `translateY(${scrollY * 0.2}px)`;
  }
});

// Menu - au clic, décoche la checkbox responsable de l’ouverture du menu
document.querySelectorAll('.submenu a').forEach(link => {
  link.addEventListener('click', () => {
    const checkbox = document.getElementById('menu-toggle-anim');
    if (checkbox) checkbox.checked = false;
  });
});

// Animation des titres de section 
document.addEventListener('DOMContentLoaded', () => {
    // Injecter un span autour de chaque mot dans les h2
    document.querySelectorAll('h2').forEach(h2 => {
      const words = h2.textContent.trim().split(/\s+/);
      h2.textContent = '';
      words.forEach(word => {
        const span = document.createElement('span');
        span.textContent = word + ' ';
        h2.appendChild(span);
      });
    });
  
    // Créer l'observateur
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate');
          } else {
            entry.target.classList.remove('animate');
          }
        });
      }, {
        threshold: 0.5
      });
  
    // Observer les h2
    document.querySelectorAll('h2').forEach(h2 => {
      observer.observe(h2);
    });

// Swiper
const swiper = new Swiper('.mySwiper', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

});

// Animation nuage ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

  gsap.to(".big-cloud", {
    x: -300, // déplacement vers la gauche
    ease: "none",
    scrollTrigger: {
      trigger: ".place-container",
      start: "top bottom", // quand le haut du conteneur atteint le bas du viewport
      end: "bottom top",   // jusqu'à ce que le bas du conteneur quitte le haut du viewport
      scrub: true,         // lie le déplacement au scroll
      markers: false       // passe à true pour voir les marqueurs de debug
    }
  });
  gsap.to(".little-cloud", {
    x: 300, // déplacement vers la droite
    ease: "none",
    scrollTrigger: {
      trigger: ".place-container",
      start: "top bottom", // quand le haut du conteneur atteint le bas du viewport
      end: "bottom top",   // jusqu'à ce que le bas du conteneur quitte le haut du viewport
      scrub: true,         // lie le déplacement au scroll
      markers: false       // passe à true pour voir les marqueurs de debug
    }
  });