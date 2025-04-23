document.addEventListener('DOMContentLoaded', function () {
    // Form validation
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Simple validation
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;

            if (!name || !email || !phone || !message) {
                alert('يرجى ملء جميع الحقول المطلوبة');
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('يرجى إدخال بريد إلكتروني صحيح');
                return;
            }

            // Form would be submitted here
            alert('تم إرسال رسالتك بنجاح! سنتواصل معك قريبًا.');
            contactForm.reset();
        });
    }

    // Add blue wave background effect
    const heroSection = document.querySelector('.hero');
    if (heroSection) {
        // Dynamic wave effect using SVG
        const wave = document.createElement('div');
        wave.classList.add('hero-wave');
        heroSection.appendChild(wave);
    }
}); 