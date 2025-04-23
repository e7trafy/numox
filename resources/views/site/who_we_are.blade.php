<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نومو إديو إكس - الحل المتكامل لإدارة المؤسسات التعليمية</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', sans-serif;
        }

        body {
            direction: rtl;
            text-align: right;
            line-height: 1.6;
            color: #333;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .section {
            padding: 40px 0;
        }

        /* Header Styles */
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo img {
            height: 50px;
        }

        .main-nav {
            display: flex;
            align-items: center;
        }

        .main-nav ul {
            display: flex;
            list-style: none;
        }

        .main-nav li {
            margin: 0 15px;
        }

        .main-nav a {
            color: #003366;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        .main-nav a:hover {
            color: #e74c3c;
        }

        .cta-button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #c0392b;
        }

        .language-switch {
            margin-left: 20px;
            display: flex;
            align-items: center;
        }

        .language-switch a {
            color: #003366;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
        }

        .language-switch img {
            margin-right: 5px;
            width: 20px;
        }

        /* Hero Section */
        .hero {
            background-color: #f0f8ff;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            padding: 60px 0;
        }

        .hero h1 {
            color: #003366;
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero p {
            color: #555;
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 600px;
        }

        /* Partners Section */
        .partners {
            background-color: #0066cc;
            color: white;
            padding: 30px 0;
        }

        .partners-heading {
            text-align: right;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .partners-description {
            text-align: right;
            margin-bottom: 20px;
            max-width: 600px;
        }

        .partners-logos {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .partner-logo {
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            margin: 10px;
            width: 180px;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .partner-logo img {
            max-width: 100%;
            max-height: 100%;
        }

        .discover-more {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .discover-more:hover {
            background-color: #c0392b;
        }

        /* Vision and Mission */
        .vision-mission {
            padding: 60px 0;
        }

        .vision-mission-container {
            display: flex;
            justify-content: space-between;
        }

        .vision, .mission {
            width: 48%;
            padding: 20px;
        }

        .vision h2, .mission h2 {
            color: #003366;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .vision h2 img, .mission h2 img {
            margin-left: 15px;
            width: 40px;
            height: 40px;
        }

        .vision p, .mission p {
            color: #555;
            font-size: 1rem;
            line-height: 1.8;
        }

        /* Stats Section */
        .stats {
            background-color: #0066cc;
            color: white;
            padding: 30px 0;
        }

        .stats-heading {
            text-align: right;
            margin-bottom: 30px;
            font-size: 1.5rem;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
            margin: 15px;
            width: 200px;
        }

        .stat-icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .stat-text {
            font-size: 1rem;
        }

        /* Features Section */
        .features {
            padding: 60px 0;
        }

        .features-heading {
            text-align: right;
            color: #003366;
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .features-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .features-text {
            width: 50%;
            padding-left: 30px;
        }

        .features-image {
            width: 50%;
        }

        .features-image img {
            width: 100%;
            border-radius: 10px;
        }

        /* Footer */
        footer {
            background-color: #f8f9fa;
            padding: 40px 0;
            border-top: 1px solid #e9ecef;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-column {
            width: 25%;
            padding: 0 15px;
        }

        .footer-column h3 {
            color: #003366;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        .footer-menu {
            list-style: none;
        }

        .footer-menu li {
            margin-bottom: 10px;
        }

        .footer-menu a {
            color: #555;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-menu a:hover {
            color: #e74c3c;
        }

        .contact-info {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .contact-icon {
            color: #0066cc;
            font-size: 18px;
            margin-left: 10px;
        }

        .social-links {
            display: flex;
            margin-top: 20px;
        }

        .social-link {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: #e74c3c;
            border-radius: 50%;
            color: white;
            text-decoration: none;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        .social-link:hover {
            background-color: #c0392b;
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid #e9ecef;
            color: #777;
        }

        /* CTA Section */
        .cta-section {
            background-color: #0066cc;
            color: white;
            padding: 60px 0;
            text-align: center;
            border-radius: 20px;
            margin: 40px 0;
            background-image: linear-gradient(135deg, #0066cc 0%, #003366 100%);
            position: relative;
            overflow: hidden;
        }

        .cta-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .secondary-button {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .secondary-button:hover {
            background-color: white;
            color: #0066cc;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #25d366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            text-decoration: none;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        /* About Us Page Styles */
        .about-hero {
            background-color: #003366;
            color: white;
            padding: 60px 0;
            text-align: right;
        }

        .about-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .about-hero p {
            font-size: 1.1rem;
            max-width: 700px;
        }

        .about-info {
            padding: 60px 0;
        }

        .about-info h2 {
            color: #003366;
            font-size: 2rem;
            margin-bottom: 30px;
            text-align: center;
        }

        .about-content {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }

        .about-text {
            width: 60%;
        }

        .about-text p {
            margin-bottom: 20px;
            color: #555;
            line-height: 1.8;
        }

        .about-image {
            width: 35%;
        }

        .about-image img {
            width: 100%;
            border-radius: 10px;
        }

        /* Video Section */
        .video-section {
            text-align: center;
            margin: 60px 0;
        }

        .video-container {
            position: relative;
            width: 80%;
            margin: 0 auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .video-container img {
            width: 100%;
            display: block;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .play-button:hover {
            background-color: white;
            transform: translate(-50%, -50%) scale(1.1);
        }

        .play-button i {
            font-size: 30px;
            color: #e74c3c;
        }
    </style>
</head>
<body>
<!-- Header -->
<header>
    <div class="container header-container">
        <div class="logo">
            <img src="/api/placeholder/150/50" alt="Numo Logo">
        </div>
        <div class="main-nav">
            <ul>
                <li><a href="#">الرئيسية</a></li>
                <li><a href="#">منتجات</a></li>
                <li><a href="#">الشركاء</a></li>
                <li><a href="#">التسعير</a></li>
                <li><a href="#">مصادر</a></li>
                <li><a href="#">من نحن</a></li>
                <li><a href="#">تواصل معنا الآن</a></li>
            </ul>
            <button class="cta-button">طلب عرض تسعير</button>
            <div class="language-switch">
                <a href="#">
                    <img src="/api/placeholder/20/20" alt="English">
                    EN
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main>
    <!-- About Us Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="about-hero-content">
                <p>الرئيسية > من نحن</p>
                <h1>من نحن - نومو إديو إكس</h1>
                <p>نومو إديو إكس هو نظام تعليمي متكامل مصمم لدعم نمو المؤسسات التعليمية وتحقيق التحول الرقمي في التعليم
                    من خلال أدوات ذكية وتقنيات متطورة لتقديم تجربة متكاملة للطلاب، المعلمين والإداريين.</p>
            </div>
        </div>
    </section>

    <!-- About Info Section -->
    <section class="about-info">
        <div class="container">
            <h2>معلومات عن نومو إديو إكس</h2>
            <h3>نومو إديو إكس - الحل المتكامل لإدارة المؤسسات التعليمية</h3>
            <p>نومو إديو إكس هو نظام شامل لإدارة التعليم مصمم خصيصًا لدعم نمو المؤسسات الأكاديمية وتعزيز كفاءة العمليات
                التعليمية والإدارية. يجمع بين أحدث التقنيات الذكية، أنظمة التعليم الإلكتروني، والتحليلات المتقدمة لتقديم
                تجربة تعليمية متطورة ومناسبة للطلاب، المعلمين، والإداريين.</p>

            <!-- Video Section -->
            <div class="video-section">
                <div class="video-container">
                    <img src="/api/placeholder/800/450" alt="Space Video Thumbnail">
                    <div class="play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision and Mission Section -->
    <section class="vision-mission">
        <div class="container">
            <div class="vision-mission-container">
                <div class="vision">
                    <h2>
                        <img src="/api/placeholder/40/40" alt="Vision Icon">
                        رؤيتنا
                    </h2>
                    <p>أن يكون نومو إديو إكس الحل الرائد عالميًا في إدارة التعليم، من خلال تقديم أنظمة متكاملة وذكية
                        تسهم في تحقيق التحول الرقمي في المؤسسات الأكاديمية وتعزيز الابتكار، الكفاءة والاستدامة في
                        العملية التعليمية.</p>
                    <p>نطمح إلى مستقبل تعليمي أكثر تطورًا، حيث يدعم التعليم بالتكنولوجيا لخلق بيئة أكاديمية مبتكرة.</p>
                </div>
                <div class="mission">
                    <h2>
                        <img src="/api/placeholder/40/40" alt="Mission Icon">
                        رسالتنا
                    </h2>
                    <p>في نومو إديو إكس، نؤمن بأن التكنولوجيا هي المفتاح لتطوير التعليم وتحقيق التميز الأكاديمي. رسالتنا
                        هي تمكين المؤسسات التعليمية من خلال حلول ذكية ومتكاملة تساهم في تحسين الكفاءة، تعزيز التفاعل،
                        وتقديم تجربة تعليمية متطورة تلبي احتياجات العصر الرقمي.</p>
                    <p>نعمل على توفير منصة متكاملة لإدارة التعليم لتحقيق التحول الرقمي وتعزيز الاستدامة والتطوير
                        المستمر.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <h2 class="stats-heading">أرقام نومو إديو إكس</h2>
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-icon">
                        <img src="/api/placeholder/60/60" alt="Branches Icon">
                    </div>
                    <div class="stat-number">+8</div>
                    <div class="stat-text">فرع حول المملكة</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <img src="/api/placeholder/60/60" alt="Global Partners Icon">
                    </div>
                    <div class="stat-number">+4</div>
                    <div class="stat-text">شراكات عالمية</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <img src="/api/placeholder/60/60" alt="Accreditations Icon">
                    </div>
                    <div class="stat-number">+24</div>
                    <div class="stat-text">اعتماد دولي ومحلي</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="features-heading">ما الذي يميزنا؟</h2>
            <div class="features-container">
                <div class="features-text">
                    <h3>نومو إديو إكس - كل ما تحتاجه لإدارة تعليمك بذكاء وسهولة!</h3>
                    <p>نومو إديو إكس هو نظام تعليمي متكامل يجمع بين إدارة التعلم (LMS)، إدارة المعلومات الأكاديمية
                        (SIS)، التطبيقات الذكية والفيديوهات الإلكترونية في منصة واحدة. يتميز بالمرونة والتخصيص ليتناسب
                        مع مختلف المؤسسات التعليمية. مع أدوات تحليل البيانات وأدوات اتخاذ القرار لتحسين الأداء
                        الأكاديمي. يوفر أنظمة ذكية للعمليات الإدارية لتوفير الوقت والجهد.</p>
                    <p>إلى جانب واجهة مستخدم بسيطة مصممة وفق أفضل معايير UX، نحن نعتمد على أعلى معايير الأمان لحماية
                        البيانات، وفريق دعم فني واستشارات مستمرة لضمان أفضل تجربة مستخدم. نحن نقدم حلولًا ذكية تدعم نمو
                        التعليم وتطويره الرقمي بكل كفاءة وسهولة.</p>
                </div>
                <div class="features-image">
                    <img src="/api/placeholder/500/400" alt="Educational Technology Illustration">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>تواصل معنا الآن: لتبدأ رحلتك نحو مستقبل رقمي مبتكر ومستدام!</h2>
            <p>منصة إلكترونية مزودة بأحدث التقنيات. فريق خدمة عملاء قوي ومدرب بطريقة احترافية.</p>
            <div class="cta-buttons">
                <button class="cta-button">طلب عرض تسعير</button>
                <button class="secondary-button">تواصل مع خدمة العملاء</button>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer>
    <div class="container footer-container">
        <div class="footer-column">
            <h3>تواصل معنا</h3>
            <div class="contact-info">
                <span class="contact-icon"><i class="fas fa-phone"></i></span>
                <span>اتصل بنا الآن: 920022136 - 0500808104</span>
            </div>
            <div class="contact-info">
                <span class="contact-icon"><i class="fas fa-envelope"></i></span>
                <span>أرسل عبر البريد الإلكتروني: info@numo.sa</span>
            </div>
            <div class="contact-info">
                <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
                <span>زرنا في المقر: الرياض، الدائري الشرقي، مخرج 10، المملكة العربية السعودية</span>
            </div>
        </div>
        <div class="footer-column">
            <h3>مساعدة</h3>
            <ul class="footer-menu">
                <li><a href="#">من نحن</a></li>
                <li><a href="#">تواصل معنا الآن</a></li>
                <li><a href="#">الأسئلة الشائعة</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>روابط مهمة</h3>
            <ul class="footer-menu">
                <li><a href="#">الرئيسية</a></li>
                <li><a href="#">منتجات</a></li>
                <li><a href="#">الشركاء</a></li>
                <li><a href="#">التسعير</a></li>
                <li><a href="#">مصادر</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <img src="/api/placeholder/180/60" alt="Numo Logo">
            <p>نومو حيث يزدهر التعلم ويتنبأ المستقبل. نبتكر في عالم التدريب لنرتقي بمهاراتكم نحو آفاق جديدة.</p>
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <div class="copyright container">
        <p>كل الحقوق محفوظة لشركة نومو لسنة 2025 | السياسة والخصوصية | الشروط والأحكام</p>
    </div>
</footer>

<!-- WhatsApp Float Button -->
<a href="#" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>

<script>
    // Fixed Header on Scroll
    window.addEventListener('scroll', function () {
        const header = document.querySelector('header');
        if (window.scrollY > 100) {
            header.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        }
    });

    // Video Play Button
    const playButton = document.querySelector('.play-button');
    const videoContainer = document.querySelector('.video-container');

    if (playButton && videoContainer) {
        playButton.addEventListener('click', function () {
            const videoFrame = document.createElement('iframe');
            videoFrame.width = '100%';
            videoFrame.height = '450px';
            videoFrame.src = 'about:blank'; // This would be a YouTube or video embed link in a real implementation
            videoFrame.frameBorder = '0';
            videoFrame.allowFullscreen = true;

            videoContainer.innerHTML = '';
            videoContainer.appendChild(videoFrame);
        });
    }

    // Smooth Scroll for Navigation Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');

            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Mobile Menu Toggle (would be implemented with actual hamburger menu in a real implementation)
    function toggleMobileMenu() {
        const nav = document.querySelector('.main-nav ul');
        nav.classList.toggle('mobile-active');
    }
</script>
</body>
</html>
