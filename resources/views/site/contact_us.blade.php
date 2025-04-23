<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numo X - نمو إدراك إكس</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-blue: #0a2d54;
            --light-blue: #1b73b8;
            --bright-blue: #00b0ff;
            --red: #e94a47;
            --gray: #f2f2f2;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            direction: rtl;
            text-align: right;
            color: #333;
            line-height: 1.6;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 5%;
            background-color: var(--white);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            height: 45px;
        }

        .main-menu {
            display: flex;
            gap: 1.5rem;
        }

        .main-menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.3s;
        }

        .main-menu a:hover {
            color: var(--light-blue);
        }

        .menu-item {
            position: relative;
            padding: 0.5rem 0;
        }

        .menu-item.has-dropdown::after {
            content: "▾";
            margin-right: 4px;
            font-size: 0.8rem;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .header-cta {
            background-color: var(--red);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.9rem;
            transition: background-color 0.3s;
        }

        .header-cta:hover {
            background-color: #d03c3a;
        }

        .language-toggle {
            background: none;
            border: none;
            font-weight: bold;
            color: #333;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .language-toggle img {
            width: 24px;
            height: 24px;
            border-radius: 50%;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(90deg, var(--primary-blue), var(--light-blue));
            color: white;
            padding: 4rem 5%;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 50%;
            background: url('/api/placeholder/800/600') no-repeat right center;
            background-size: cover;
            opacity: 0.2;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }

        .hero h3 {
            color: var(--red);
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .hero h1 {
            font-size: 2.2rem;
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.9);
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn-primary {
            background-color: var(--red);
            color: white;
            padding: 0.7rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.95rem;
        }

        .btn-secondary {
            background-color: transparent;
            color: white;
            padding: 0.7rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            border: 1px solid white;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
        }

        .btn-secondary i {
            font-size: 0.9rem;
        }

        /* Partners Section */
        .partners {
            background-color: var(--light-blue);
            padding: 2rem 5%;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .partners-text {
            max-width: 400px;
        }

        .partners-text h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            text-align: right;
        }

        .partners-text p {
            font-size: 0.95rem;
            line-height: 1.5;
            color: rgba(255, 255, 255, 0.9);
        }

        .partners-logos {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .partner-logo {
            background-color: white;
            padding: 0.5rem 0.8rem;
            border-radius: 8px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .partner-logo img {
            max-height: 32px;
        }

        .discover-more {
            background-color: var(--red);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.9rem;
        }

        /* Footer */
        footer {
            background-color: #f5f5f5;
            padding: 3rem 5% 2rem;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
        }

        .footer-logo {
            max-width: 300px;
        }

        .footer-logo img {
            height: 40px;
            margin-bottom: 1rem;
        }

        .footer-logo p {
            font-size: 0.9rem;
            margin-bottom: 1rem;
            color: #555;
            line-height: 1.5;
        }

        .footer-column {
            min-width: 150px;
        }

        .footer-column h4 {
            color: var(--primary-blue);
            margin-bottom: 1.2rem;
            font-size: 1.1rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-column h4::after {
            content: "";
            position: absolute;
            right: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--light-blue);
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 0.6rem;
        }

        .footer-column ul li a {
            text-decoration: none;
            color: #555;
            font-size: 0.9rem;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: var(--light-blue);
        }

        .contact-icon {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .contact-icon i {
            color: var(--primary-blue);
            font-size: 1rem;
            margin-top: 0.3rem;
        }

        .contact-icon span,
        .contact-icon a {
            color: #555;
            font-size: 0.9rem;
            text-decoration: none;
        }

        .footer-bottom {
            padding-top: 1.5rem;
            border-top: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
        }

        .social-icons {
            display: flex;
            gap: 0.5rem;
        }

        .social-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
            transition: background-color 0.3s;
        }

        .social-icon:hover {
            background-color: var(--light-blue);
            color: white;
        }

        .footer-legal {
            display: flex;
            gap: 1.5rem;
        }

        .footer-legal a {
            text-decoration: none;
            color: #555;
            font-size: 0.85rem;
        }

        /* WhatsApp Float Button */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            left: 30px;
            background-color: #25d366;
            color: white;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            transition: transform 0.3s;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        /* Contact Page */
        .contact-page-hero {
            background-color: var(--primary-blue);
            color: white;
            padding: 2rem 5% 3rem;
            position: relative;
        }

        .breadcrumbs {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        .breadcrumbs a {
            color: #f0f0f0;
            text-decoration: none;
        }

        .breadcrumbs span {
            color: var(--red);
        }

        .contact-page-hero h1 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .contact-page-hero p {
            font-size: 1rem;
            line-height: 1.6;
            max-width: 600px;
            color: rgba(255, 255, 255, 0.9);
        }

        .contact-content {
            display: flex;
            margin: 3rem 5%;
            gap: 3rem;
        }

        .map-section {
            flex: 1;
        }

        .map-container {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .map-container iframe {
            width: 100%;
            height: 350px;
            border: none;
        }

        .contact-details {
            margin-top: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .contact-details a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary-blue);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .contact-details a i {
            width: 18px;
            color: #666;
        }

        .contact-details .social-icons {
            margin-top: 1rem;
        }

        .contact-form-container {
            flex: 1;
        }

        .contact-form-container h2 {
            color: var(--red);
            margin-bottom: 0.8rem;
            font-size: 1.5rem;
        }

        .contact-form-container > p {
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
            color: #555;
        }

        .contact-form .form-group {
            margin-bottom: 1rem;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 0.9rem;
            font-family: inherit;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: var(--light-blue);
        }

        .contact-form label {
            display: block;
            margin-bottom: 0.4rem;
            color: #666;
            font-size: 0.9rem;
        }

        .contact-form .submit-btn {
            background-color: var(--red);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.95rem;
            font-weight: bold;
            transition: background-color 0.3s;
            margin-top: 0.5rem;
        }

        .contact-form .submit-btn:hover {
            background-color: #d03c3a;
        }

        .country-code {
            display: flex;
            align-items: center;
        }

        .country-code img {
            width: 24px;
            height: 24px;
            margin-right: 4px;
        }

        /* Phone number input styling */
        .phone-input-wrapper {
            display: flex;
            gap: 10px;
        }

        .country-code-input {
            width: 80px;
            display: flex;
            align-items: center;
            padding: 0 8px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .country-code-input img {
            width: 20px;
            height: 20px;
            margin-right: 4px;
        }

        .phone-number-input {
            flex: 1;
        }

        /* Blue waves background effect */
        .hero-wave {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            width: 50%;
            background: url('/api/placeholder/500/300') no-repeat center right;
            background-size: cover;
            opacity: 0.3;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .partners {
                flex-direction: column;
                text-align: center;
                gap: 1.5rem;
            }

            .partners-text {
                margin-bottom: 1rem;
                max-width: none;
                text-align: center;
            }

            .partners-logos {
                flex-wrap: wrap;
                justify-content: center;
            }

            .footer-container {
                flex-wrap: wrap;
                gap: 2rem;
            }

            .footer-column {
                flex: 0 0 45%;
            }

            .contact-content {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .main-menu {
                display: none;
            }

            .partner-logo {
                flex: 0 0 45%;
                margin-bottom: 1rem;
            }

            .footer-column {
                flex: 0 0 100%;
                margin-bottom: 1.5rem;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .footer-legal {
                justify-content: center;
                margin-bottom: 1rem;
            }

            .social-icons {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
<!-- Header -->
<header>
    <div class="logo">
        <img src="/api/placeholder/150/45" alt="Numo X Logo">
    </div>
    <nav class="main-menu">
        <a href="#" class="menu-item">الرئيسية</a>
        <a href="#" class="menu-item has-dropdown">منتجات</a>
        <a href="#" class="menu-item has-dropdown">الشركاء</a>
        <a href="#" class="menu-item">التسعير</a>
        <a href="#" class="menu-item has-dropdown">مصادر</a>
        <a href="#" class="menu-item">من نحن</a>
        <a href="#" class="menu-item">تواصل معنا الان</a>
    </nav>
    <div class="header-actions">
        <a href="#" class="header-cta">طلب عرض تسعير</a>
        <button class="language-toggle">
            <img src="/api/placeholder/24/24" alt="English">
            <span>EN</span>
        </button>
    </div>
</header>

<!-- First Image (Hero Section) -->
<section class="hero">
    <div class="hero-wave"></div>
    <div class="hero-content">
        <h3>جاهز للإنطلاق معنا؟</h3>
        <h1>تواصل معنا الآن: لتبدأ رحلتك نحو مستقبل رقمي مبتكر ومستدام!</h1>
        <p>منصة إلكترونية مبرمجة بأحدث التقنيات فريق خدمة عملاء قوي ومدرب بطريقة احترافية.</p>
        <div class="hero-buttons">
            <a href="#" class="btn-primary">طلب عرض تسعير</a>
            <a href="#" class="btn-secondary">
                <i class="fas fa-headset"></i>
                تواصل مع خدمة العملاء
            </a>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="partners">
    <div class="partners-text">
        <h3>شركائنا</h3>
        <p>تعرفّ على اعتماداتنا الدولية وشراكاتنا التي تضمن لك تدريباً عالي الجودة ومعتمداً عالمياً</p>
    </div>
    <div class="partners-logos">
        <div class="partner-logo">
            <img src="/api/placeholder/100/32" alt="Oracle">
        </div>
        <div class="partner-logo">
            <img src="/api/placeholder/100/32" alt="Saudi Partner">
        </div>
        <div class="partner-logo">
            <img src="/api/placeholder/100/32" alt="Education Center">
        </div>
        <div class="partner-logo">
            <img src="/api/placeholder/100/32" alt="National Center">
        </div>
    </div>
    <a href="#" class="discover-more">اكتشف المزيد</a>
</section>

<!-- Second Image (Contact Page) -->
<section class="contact-page">
    <div class="contact-page-hero">
        <div class="breadcrumbs">
            <a href="#">الرئيسية</a>
            <span>></span>
            <span>تواصل معنا</span>
        </div>
        <h1>للمزيد من المعلومات تواصل معنا</h1>
        <p>نحن هنا لمساعدتك في رحلتك نحو النجاح لا تتردد في التواصل معنا للاستفسارات أو لحجز برامجك التدريبية. فريقنا
            جاهز للرد على جميع أسئلتك ومساعدتك في اختيار التدريب المناسب لك.</p>
    </div>

    <div class="contact-content">
        <div class="map-section">
            <div class="map-container">
                <img src="/api/placeholder/500/350" alt="Map Location">
            </div>
            <div class="contact-details">
                <a href="#" target="_blank">
                    <i class="fas fa-map-marker-alt"></i>
                    Braunschweiger Str. 14, 12055 Riyadh, Saudi arabia
                </a>
                <a href="mailto:sami@numo.sa">
                    <i class="fas fa-envelope"></i>
                    sami@numo.sa
                </a>
                <a href="tel:+966055050180">
                    <i class="fas fa-phone"></i>
                    +966 0550500180
                </a>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <div class="contact-form-container">
            <h2>أرسل لنا رسالة</h2>
            <p>إذا كنت تبحث عن استفسار، يرجى ملء هذا النموذج إدراك إكس، وسنقوم بالرد عليك في أقرب وقت ممكن.</p>

            <form class="contact-form">
                <div class="form-group">
                    <label for="name">الاسم</label>
                    <input type="text" id="name" name="name" placeholder="أحمد أسامة">
                </div>

                <div class="form-group">
                    <label for="phone">رقم الهاتف</label>
                    <div class="phone-input-wrapper">
                        <div class="country-code-input">
                            <img src="/api/placeholder/20/20" alt="Saudi Flag">
                            <span>+966</span>
                        </div>
                        <input type="tel" id="phone" name="phone" placeholder="+516 2123 4856 810"
                               class="phone-number-input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email" placeholder="samantha.smith@mail.net">
                </div>

                <div class="form-group">
                    <label for="message">رسالتك</label>
                    <textarea id="message" name="message" rows="5" placeholder="اكتب رسالتك هنا"></textarea>
                </div>

                <button type="submit" class="submit-btn">إرسال الرسالة</button>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-column footer-logo">
            <img src="/api/placeholder/150/45" alt="Numo X Logo">
            <p>نمو إدراك إكس، حيث نوفر التعليم ونموذج إدراك إكس المستقبل. نبتكر في عالم التدريب لنرتقي بمهاراتكم نحو
                آفاق جديدة</p>
            <img src="/api/placeholder/120/60" alt="Vision 2030">
        </div>

        <div class="footer-column">
            <h4>روابط مهمة</h4>
            <ul>
                <li><a href="#">الرئيسية</a></li>
                <li><a href="#">منتجات</a></li>
                <li><a href="#">الشركاء</a></li>
                <li><a href="#">التسعير</a></li>
                <li><a href="#">مصادر</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h4>مساعدة</h4>
            <ul>
                <li><a href="#">من نحن</a></li>
                <li><a href="#">تواصل معنا الان</a></li>
                <li><a href="#">الأسئلة الشائعة</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h4>تواصل معنا</h4>
            <div class="contact-icon">
                <i class="fas fa-phone"></i>
                <span>920022136 - 0500808104</span>
            </div>
            <div class="contact-icon">
                <i class="fas fa-envelope"></i>
                <a href="mailto:info@numo.sa">info@numo.sa</a>
            </div>
            <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
                <span>الرياض، الدائري الشرقي مخرج 10، المملكة العربية السعودية</span>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>كل الحقوق محفوظة لشركة نمو إدراك إكس لسنة 2025</p>
        <div class="footer-legal">
            <a href="#">الشروط والأحكام</a>
            <a href="#">السياسة والخصوصية</a>
        </div>
        <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</footer>

<!-- WhatsApp Float Button -->
<a href="https://wa.me/966500000000" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>

<script>
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
</script>
</body>
</html>
