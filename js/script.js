// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Optional: Use ScrollReveal.js for scroll-based animations
window.sr = ScrollReveal();
sr.reveal('.service-card', {
    duration: 2000,
    origin: 'bottom',
    distance: '50px',
    viewFactor: 0.2
});
