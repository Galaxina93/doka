import './bootstrap';

/*Bollmann Hausservice JS*/

// Smooth scrolling for navigation links
document.querySelectorAll('a[href*="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const url = new URL(this.href, window.location.href);
        if (url.pathname === window.location.pathname) {
            const hash = url.hash;
            if (hash) {
                const target = document.querySelector(hash);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Mobilmenü schließen, falls geöffnet
                    document.getElementById('mobile-menu')?.classList.add('hidden');
                }
            }
        }
    });
});

// Loading animation
window.addEventListener('load', () => {
    document.body.classList.add('loading');
});

window.scrollToContact = function () {
    const el = document.getElementById("contact");
    if (el) {
        el.scrollIntoView({ behavior: "smooth" });
    }
};

// Optional: Mobile Menü toggeln
document.getElementById('mobile-menu-button')?.addEventListener('click', function () {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
});

// Optional: Animation bei Sichtbarkeit aktivieren
const fadeIns = document.querySelectorAll('.fade-in');
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.1 });

fadeIns.forEach(el => observer.observe(el));
