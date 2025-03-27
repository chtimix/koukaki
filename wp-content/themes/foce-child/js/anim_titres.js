document.addEventListener('DOMContentLoaded', () => {
    // ➤ 1. Injecter un span autour de chaque mot dans les h2
    document.querySelectorAll('h2').forEach(h2 => {
      const words = h2.textContent.trim().split(/\s+/);
      h2.textContent = '';
      words.forEach(word => {
        const span = document.createElement('span');
        span.textContent = word + ' ';
        h2.appendChild(span);
      });
    });
  
    // ➤ 2. Créer l'observateur
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
  
    // ➤ 3. Observer les h2
    document.querySelectorAll('h2').forEach(h2 => {
      observer.observe(h2);
    });
  });
