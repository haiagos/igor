document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-active');
                observer.unobserve(entry.target); // Para a animação acontecer apenas uma vez
            }
        });
    }, {
        threshold: 0.1 // Começa a animação quando 10% do elemento está visível
    });

    // Observa todos os elementos com a classe fade-in
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });
});
