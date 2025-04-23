<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام نما - إدارة الاختبارات بالذكاء الاصطناعي</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header Styles */
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }

        .lang-switch {
            background-color: transparent;
            border: 1px solid #ddd;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            margin-left: 15px;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
        }

        .login-btn {
            background-color: #e94c50;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        /* Hero Section */
        .hero {
            background-color: #003459;
            color: white;
            padding: 40px 0;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .hero-content .badge {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .hero-content h1 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .hero-content p {
            font-size: 14px;
            max-width: 80%;
            margin: 0 auto;
        }

        /* Features Section */
        .features {
            background-color: #fff;
            padding: 40px 0;
        }

        .features-content {
            display: flex;
            align-items: center;
        }

        .features-image {
            width: 40%;
            display: flex;
            justify-content: center;
        }

        .features-image img {
            max-width: 100%;
        }

        .features-text {
            width: 60%;
            padding-right: 30px;
        }

        .features-text h2 {
            color: #003459;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .feature-item {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }

        .feature-icon {
            color: #e94c50;
            margin-left: 10px;
            font-size: 20px;
        }

        .feature-text h3 {
            color: #003459;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .feature-text p {
            color: #666;
            font-size: 14px;
        }

        .cta-button {
            display: inline-block;
            background-color: #e94c50;
            color: white;
            padding: 10px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 50px;
            height: 50px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            z-index: 999;
            text-decoration: none;
        }

        /* Demo Section */
        .demo {
            background-color: #0062B8;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        .demo-header h2 {
            margin-bottom: 20px;
            font-size: 24px;
            line-height: 1.4;
        }

        .demo-image {
            max-width: 800px;
            margin: 30px auto;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .demo-image img {
            width: 100%;
        }

        /* Process Section */
        .process {
            padding: 40px 0;
            text-align: center;
        }

        .process-header {
            margin-bottom: 30px;
        }

        .process-header h2 {
            color: #003459;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .process-header p {
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }

        .process-grid {
            display: flex;
            justify-content: space-between;
            max-width: 900px;
            margin: 0 auto;
        }

        .process-item {
            width: 18%;
            text-align: center;
        }

        .process-icon {
            width: 80px;
            height: 80px;
            background-color: #F0F8FF;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
        }

        .process-icon img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        .process-item h3 {
            color: #003459;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .process-btn {
            display: inline-block;
            background-color: #e94c50;
            color: white;
            padding: 10px 30px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 30px;
        }

        /* Contact Section */
        .contact {
            background: linear-gradient(to right, #002041, #004080);
            color: white;
            padding: 40px 0;
            border-radius: 10px;
            text-align: center;
            margin: 40px auto;
            max-width: 1100px;
        }

        .contact-content h2 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .contact-content p {
            font-size: 14px;
            max-width: 600px;
            margin: 0 auto 20px;
        }

        .contact-btn {
            display: inline-block;
            background-color: #e94c50;
            color: white;
            padding: 10px 30px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-us-text {
            font-size: 12px;
            margin-top: 20px;
            color: rgba(255, 255, 255, 0.7);
        }

        /* Partners Section */
        .partners {
            background-color: #F0F8FF;
            padding: 20px 0;
            text-align: center;
        }

        .partners-title {
            color: #003459;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .partners-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            max-width: 800px;
            margin: 0 auto;
        }

        .partner-logo {
            margin: 10px 20px;
            height: 40px;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .partner-logo:hover {
            filter: grayscale(0);
            opacity: 1;
        }

        /* Footer */
        footer {
            background-color: #fff;
            padding: 40px 0 20px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
        }

        .footer-column {
            width: 23%;
        }

        .footer-logo img {
            height: 40px;
            margin-bottom: 15px;
        }

        .footer-logo p {
            font-size: 12px;
            color: #666;
            margin-bottom: 15px;
        }

        .footer-cert {
            height: 40px;
        }

        .footer-column h3 {
            color: #003459;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #666;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #003459;
        }

        .social-links {
            display: flex;
            margin-top: 10px;
        }

        .social-icon {
            width: 30px;
            height: 30px;
            background-color: #EEF7FF;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #003459;
            margin-left: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background-color: #003459;
            color: white;
        }

        .footer-bottom {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: #666;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .features-content {
                flex-direction: column;
            }

            .features-image, .features-text {
                width: 100%;
                padding: 0;
            }

            .features-image {
                margin-bottom: 30px;
            }

            .process-grid {
                flex-wrap: wrap;
            }

            .process-item {
                width: 48%;
                margin-bottom: 20px;
            }

            .footer-content {
                flex-wrap: wrap;
            }

            .footer-column {
                width: 48%;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 576px) {
            .process-item {
                width: 100%;
            }

            .footer-column {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<!-- Header -->
<header>
    <div class="container header-content">
        <div class="logo">
            <img src="/api/placeholder/100/40" alt="نما">
        </div>
        <nav>
            <ul>
                <li><a href="#">الرئيسية</a></li>
                <li><a href="#">المنصات</a></li>
                <li><a href="#">الخدمات</a></li>
                <li><a href="#">الشركاء</a></li>
                <li><a href="#">المدونة</a></li>
                <li><a href="#">اتصل بنا</a></li>
                <li><a href="#">من نحن</a></li>
            </ul>
        </nav>
        <div style="display: flex; align-items: center;">
            <a href="#" class="lang-switch">EN</a>
            <a href="#" class="login-btn">تسجيل دخول المستخدم</a>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="container hero-content">
        <div class="badge">الرئيسية / إدارة الاختبارات بالذكاء الاصطناعي</div>
        <h1>إدارة الاختبارات بالذكاء الاصطناعي</h1>
        <p>قم بتحويل عملية التقييم باستخدام توليد الأسئلة بالذكاء الاصطناعي، وقت التصحيح وإنشاء أسئلة متنوعة بدقة عالية
            على الفور</p>
    </div>
</section>

<!-- Features Section -->
<section class="features">
    <div class="container features-content">
        <div class="features-image">
            <img src="/api/placeholder/400/350" alt="توليد الأسئلة">
        </div>
        <div class="features-text">
            <h2>قم بتحويل عملية التقييم الخاصة بك باستخدام توليد الأسئلة الذكي</h2>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="feature-text">
                    <h3>إنشاء اختبارات ذكية</h3>
                    <p>قم بإنشاء اختبارات متنوعة بسهولة وبسرعة لمختلف المواد الدراسية، وحدد مستوى الصعوبة والمهارات
                        المطلوب قياسها</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="feature-text">
                    <h3>توفير الوقت</h3>
                    <p>استثمر وقتك في التدريس بدلاً من إعداد الاختبارات، حيث يقوم النظام بإنشاء أسئلة مناسبة بطريقة
                        تلقائية بدقة عالية</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="feature-text">
                    <h3>بنك الأسئلة</h3>
                    <p>احصل على بنك أسئلة متنوع ومتجدد يغطي المنهج الدراسي لإنشاء اختبارات متعددة</p>
                </div>
            </div>

            <a href="#" class="cta-button">ابدأ الآن</a>
        </div>
    </div>
</section>

<!-- WhatsApp Button -->
<a href="#" class="whatsapp-btn">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Demo Section -->
<section class="demo">
    <div class="container">
        <div class="demo-header">
            <h2>إدارة التقييم بكفاءة عالية ومرونة<br>قم بتحويل عملية التقييم باستخدام توليد الأسئلة الذكي<br>وتوفير
                الوقت وإنشاء أسئلة متنوعة عالية الجودة على الفور</h2>
        </div>
        <div class="demo-image">
            <img src="/api/placeholder/800/500" alt="منصة توليد الأسئلة">
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process">
    <div class="container">
        <div class="process-header">
            <h2>يقوم عضو هيئة التدريس بتحديد نوع الأسئلة ونماذج التقييم المطلوبة وإرفاق ملف المقرر...</h2>
        </div>
        <a href="#" class="process-btn">ابدأ الآن</a>

        <div class="process-grid">
            <div class="process-item">
                <div class="process-icon">
                    <img src="/api/placeholder/40/40" alt="تحميل الأسئلة">
                </div>
                <h3>تحميل الأسئلة</h3>
            </div>
            <div class="process-item">
                <div class="process-icon">
                    <img src="/api/placeholder/40/40" alt="مراجعة وتنقيح الأسئلة">
                </div>
                <h3>مراجعة وتنقيح الأسئلة</h3>
            </div>
            <div class="process-item">
                <div class="process-icon">
                    <img src="/api/placeholder/40/40" alt="تشكيل وتنسيق الأسئلة">
                </div>
                <h3>تشكيل وتنسيق الأسئلة</h3>
            </div>
            <div class="process-item">
                <div class="process-icon">
                    <img src="/api/placeholder/40/40" alt="تحليل البيانات بالذكاء الاصطناعي">
                </div>
                <h3>تحليل البيانات بالذكاء الاصطناعي</h3>
            </div>
            <div class="process-item">
                <div class="process-icon">
                    <img src="/api/placeholder/40/40" alt="إصدار التقارير">
                </div>
                <h3>إصدار التقارير</h3>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact">
    <div class="container contact-content">
        <h2>تواصل معنا الآن لتبدأ رحلتك نحو مستقبل رقمي مبتكر ومستدام</h2>
        <p>خدمة العملاء متوفرة على مدار الأسبوع لدعم عملك ومساعدتك في تحقيق أهدافك التعليمية</p>
        <a href="#" class="contact-btn">تواصل معنا مباشرة</a>
        <p class="contact-us-text">أو راسلنا عبر البريد الإلكتروني</p>
    </div>
</section>

<!-- Partners Section -->
<section class="partners">
    <div class="container">
        <h3 class="partners-title">شركاؤنا</h3>
        <div class="partners-logos">
            <img src="/api/placeholder/100/40" alt="الأمن العام" class="partner-logo">
            <img src="/api/placeholder/100/40" alt="وزارة التعليم" class="partner-logo">
            <img src="/api/placeholder/100/40" alt="Oracle" class="partner-logo">
            <img src="/api/placeholder/100/40" alt="Microsoft" class="partner-logo">
            <img src="/api/placeholder/100/40" alt="شريك" class="partner-logo">
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-column footer-logo">
                <img src="/api/placeholder/100/40" alt="نما">
                <p>نظام متكامل مصمم لدعم المؤسسات التربوية في إدارة المؤسسات التعليمية والتفاعل مع كافة مكونات العملية
                    التعليمية</p>
                <img src="/api/placeholder/100/40" alt="شهادة" class="footer-cert">
            </div>
            <div class="footer-column">
                <h3>روابط مهمة</h3>
                <ul class="footer-links">
                    <li><a href="#">الرئيسية</a></li>
                    <li><a href="#">المنصات</a></li>
                    <li><a href="#">الخدمات</a></li>
                    <li><a href="#">الشركاء</a></li>
                    <li><a href="#">المدونة</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>تواصل معنا</h3>
                <ul class="footer-links">
                    <li><a href="#">خدمة العملاء</a></li>
                    <li><a href="#">الأسئلة الشائعة</a></li>
                    <li><a href="#">اتصل بنا</a></li>
                    <li><a href="#">المساعدة</a></li>
                    <li><a href="#">الشروط</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>تابعنا</h3>
                <p>تابعنا على وسائل التواصل الاجتماعي</p>
                <div class="social-links">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>جميع الحقوق محفوظة © 2025 - نظام نما للتعليم</p>
            <p>سياسة الخصوصية - الشروط والأحكام</p>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                if (this.getAttribute('href') !== '#') {
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add hover effects
        const ctaButtons = document.querySelectorAll('.cta-button, .contact-btn, .process-btn');
        ctaButtons.forEach(button => {
            button.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-3px)';
                this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
            });

            button.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'none';
            });
        });

        // WhatsApp button effect
        const whatsappBtn = document.querySelector('.whatsapp-btn');
        if (whatsappBtn) {
            whatsappBtn.addEventListener('mouseenter', function () {
                this.style.transform = 'scale(1.1)';
            });

            whatsappBtn.addEventListener('mouseleave', function () {
                this.style.transform = 'scale(1)';
            });
        }
    });
</script>
</body>
</html>
