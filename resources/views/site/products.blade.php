<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نومو إديو إكس - الحل الذكي لإدارة التعليم والتدريس</title>
    <style>
        /* Reset and general styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            direction: rtl;
            text-align: right;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header styles */
        header {
            background-color: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            width: 150px;
        }

        .main-nav {
            display: flex;
            gap: 20px;
        }

        .main-nav a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .main-nav a:hover {
            color: #e74c3c;
        }

        .lang-switch {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .lang-switch a:last-child {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #003366;
            font-weight: bold;
        }

        .lang-switch img {
            width: 24px;
            height: 24px;
            margin-left: 5px;
        }

        .cta-button {
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
            display: inline-block;
        }

        .cta-button:hover {
            background-color: #c0392b;
        }

        /* Hero section */
        .hero {
            background-color: #003366;
            background-image: url('/api/placeholder/1200/400');
            background-size: cover;
            color: white;
            padding: 60px 0;
            position: relative;
        }

        .hero-content {
            max-width: 600px;
            margin-right: auto;
        }

        .hero h1 {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .hero h1 span {
            color: #e74c3c;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* Features section */
        .features {
            padding: 60px 0;
            background-color: #f9f9f9;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: #003366;
        }

        .features-title {
            color: #e74c3c;
            text-align: center;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .feature-card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 15px;
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #e74c3c;
            font-size: 24px;
        }

        .feature-text {
            flex: 1;
        }

        .feature-text h3 {
            color: #003366;
            margin-bottom: 5px;
        }

        /* Benefits section */
        .benefits {
            padding: 60px 0;
        }

        .benefits-container {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .benefits-image {
            flex: 1;
            text-align: center;
        }

        .benefits-image img {
            max-width: 100%;
            border-radius: 10px;
        }

        .benefits-content {
            flex: 1;
        }

        .benefits-content h2 {
            color: #003366;
            margin-bottom: 20px;
            font-size: 32px;
        }

        .benefits-content h2 span {
            color: #e74c3c;
        }

        .benefits-content p {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .benefit-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 15px;
        }

        .benefit-item i {
            color: #27ae60;
            font-size: 20px;
            min-width: 24px;
            display: flex;
            justify-content: center;
        }

        /* Purchase section */
        .purchase {
            padding: 60px 0;
            background-color: #f9f9f9;
        }

        .purchase-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .purchase-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .purchase-card h3 {
            color: #003366;
            margin-bottom: 15px;
        }

        .purchase-card p {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        /* Enhanced CTA section - Matching the image exactly */
        .cta-banner {
            background-color: #003366;
            color: white;
            padding: 50px 30px;
            text-align: center;
            border-radius: 20px;
            margin: 40px auto;
            position: relative;
            overflow: hidden;
            max-width: 1100px;
        }

        .cta-banner::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: url('/api/placeholder/1100/300') no-repeat;
            background-size: cover;
            background-position: center;
            opacity: 0.2;
        }

        .cta-banner-content {
            position: relative;
            z-index: 2;
        }

        .cta-ready {
            color: #e74c3c;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .cta-banner h2 {
            font-size: 32px;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .cta-banner p {
            font-size: 16px;
            max-width: 700px;
            margin: 0 auto 25px;
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .cta-secondary {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .arrow-icon {
            font-size: 18px;
            transform: scaleX(-1); /* Flip for RTL */
        }

        /* Partners section - Enhanced to match the image */
        .partners-section {
            padding: 30px 0;
            background-color: #0055a4;
        }

        .partners-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }

        .partners-title {
            color: white;
            text-align: right;
            margin-bottom: 20px;
            font-size: 22px;
            font-weight: bold;
        }

        .partners-text {
            color: white;
            text-align: right;
            max-width: 550px;
            line-height: 1.6;
        }

        .partners-logos {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
            justify-content: space-between;
        }

        .partner-logo {
            background-color: white;
            padding: 10px 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 130px;
            height: 60px;
        }

        .partner-logo img {
            max-width: 100%;
            max-height: 40px;
        }

        .discover-more {
            background-color: #e74c3c;
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: 20px;
        }

        /* Footer - Enhanced to match the image */
        footer {
            background-color: #f4f4f4;
            color: #333;
            padding: 40px 0 20px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 2fr;
            gap: 30px;
        }

        .footer-logo {
            margin-bottom: 15px;
            max-width: 180px;
        }

        .footer-about p {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .footer-vision {
            width: 120px;
            margin-top: 20px;
        }

        .footer-links {
            margin-top: 20px;
        }

        .footer-links h4 {
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
            color: #0055a4;
            font-size: 18px;
        }

        .footer-links h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 40px;
            height: 2px;
            background-color: #0055a4;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #e74c3c;
        }

        .footer-contact {
            margin-top: 20px;
        }

        .footer-contact h4 {
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
            color: #0055a4;
            font-size: 18px;
        }

        .footer-contact h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 40px;
            height: 2px;
            background-color: #0055a4;
        }

        .contact-item {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
            align-items: flex-start;
        }

        .contact-icon {
            background-color: #e1e1e1;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .contact-info {
            line-height: 1.4;
        }

        .contact-info a {
            color: #0055a4;
            text-decoration: none;
            display: block;
            margin-top: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-link {
            background-color: #e74c3c;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .footer-bottom {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-bottom p {
            font-size: 14px;
        }

        .footer-policy {
            display: flex;
            gap: 20px;
        }

        .footer-policy a {
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }

        /* Enhanced styles for the header based on screenshot */
        .logo img {
            height: auto;
            max-height: 60px;
        }

        /* Fix for EN language icon placement */
        .lang-switch {
            display: flex;
            align-items: center;
        }

        .lang-switch .en-flag {
            border-radius: 50%;
            margin-left: 8px;
            width: 24px;
            height: 24px;
            display: inline-block;
            vertical-align: middle;
            border: 1px solid #ddd;
        }

        /* Fix for checkmark icons */
        .check-icon {
            color: #27ae60;
            font-weight: bold;
            font-size: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            background-color: rgba(39, 174, 96, 0.1);
            border-radius: 50%;
            margin-left: 10px;
        }

        /* Hero section enhancements */
        .hero {
            background-color: #003366;
            min-height: 320px;
            display: flex;
            align-items: center;
        }

        .breadcrumb {
            color: white;
            margin-bottom: 20px;
        }

        .breadcrumb a {
            color: #e74c3c;
            text-decoration: none;
        }

        .hero-title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .hero-title span {
            color: #e74c3c;
        }

        .hero-description {
            font-size: 16px;
            line-height: 1.6;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-container {
                grid-template-columns: 1fr 1fr;
            }

            .benefits-container {
                flex-direction: column;
            }

            .partners-container {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 768px) {
            .features-grid {
                grid-template-columns: 1fr;
            }

            .purchase-grid {
                grid-template-columns: 1fr;
            }

            .footer-container {
                grid-template-columns: 1fr;
            }

            .main-nav {
                display: none;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
<!-- Header -->
<header>
    <div class="container header-container">
        <a href="#" class="logo">
            <img src="/api/placeholder/150/60" alt="نومو إديو إكس">
        </a>
        <nav class="main-nav">
            <a href="#">الرئيسية</a>
            <a href="#">منتجات</a>
            <a href="#">الشركاء</a>
            <a href="#">التسعير</a>
            <a href="#">مصادر</a>
            <a href="#">من نحن</a>
            <a href="#">تواصل معنا الآن</a>
        </nav>
        <div class="lang-switch">
            <a href="#" class="cta-button">طلب عرض تسعير</a>
            <a href="#">
                <span>EN</span>
                <img class="en-flag" src="/api/placeholder/24/24" alt="English">
            </a>
        </div>
    </div>
</header>

<!-- Hero Section - Updated to match screenshot -->
<section class="hero">
    <div class="container">
        <div class="breadcrumb">
            <a href="#">الرئيسية</a> > <a href="#">منتجات</a> > نومو إديو إكس
        </div>
        <div class="hero-content">
            <h1 class="hero-title">نومو إديو إكس - <span>الحل الذكي</span> لإدارة التعليم والتدريس</h1>
            <p class="hero-description">يتميز نظام نومو إديو إكس بكونه أكثر من مجرد نظام إدارة تعليمية. فهو منصة متكاملة
                تجمع بين التقنية الحديثة
                وأفضل الممارسات الأكاديمية لضمان تجربة تعليمية فريدة.</p>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits">
    <div class="container benefits-container">
        <div class="benefits-image">
            <img src="/api/placeholder/500/400" alt="نومو إديو إكس">
        </div>
        <div class="benefits-content">
            <h2>نومو إديو إكس: <span>التقنية الذكية التي تعيد تعريف تجربة التعليم والتدريس</span></h2>
            <p>نظام نومو إديو إكس هو منصة متكاملة تهدف إلى تحويل بنية التعليم إلى تجربة ذكية وسلسلة من خلال أحدث
                التقنيات. يوفر النظام حلولاً رقمية متقدمة تتيح للمؤسسات التعليمية تحسين الأداء الأكاديمي، تسهيل العمليات
                الإدارية، وتعزيز تجربة التعلم للطلاب والمعلمين على حد سواء.</p>

            <div class="benefit-item">
                <span class="check-icon">✓</span>
                <p>تسهيل إدارة المناهج والبرامج الدراسية من خلال منصة متكاملة تساعد المسؤولين في التخطيط الأكاديمي.</p>
            </div>

            <div class="benefit-item">
                <span class="check-icon">✓</span>
                <p>تحسين تجربة التعلم للطلاب عبر أدوات تفاعلية متقدمة تعزز من استيعابهم للمحتوى التعليمي.</p>
            </div>

            <div class="benefit-item">
                <span class="check-icon">✓</span>
                <p>دعم اتخاذ القرار القائم على البيانات من خلال تحليلات دقيقة تقدم رؤية واضحة حول أداء الطلاب
                    والمعلمين.</p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features">
    <div class="container">
        <p class="features-title">المميزات</p>
        <h2 class="section-title">مميزات نظام نومو إديو إكس</h2>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <div class="feature-text">
                    <h3>جدولة آلية للمقررات والجداول</h3>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🤖</div>
                <div class="feature-text">
                    <h3>إدارة الإختبارات بالذكاء الإصطناعي</h3>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">👥</div>
                <div class="feature-text">
                    <h3>إدارة أعضاء هيئة التدريس</h3>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">📝</div>
                <div class="feature-text">
                    <h3>إصدار الشهادات والتحقق عبر QR CODE</h3>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🏆</div>
                <div class="feature-text">
                    <h3>دعم الاعتماد الأكاديمي والجودة</h3>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">📚</div>
                <div class="feature-text">
                    <h3>إدارة البرامج التعليمية</h3>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🎓</div>
                <div class="feature-text">
                    <h3>إدارة التعليم والتدريس</h3>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">💬</div>
                <div class="feature-text">
                    <h3>نظام دعم ذكي للطلاب وأعضاء هيئة التدريس</h3>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">📋</div>
                <div class="feature-text">
                    <h3>نظام قبول الطلاب</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Purchase Section -->
<section class="purchase">
    <div class="container">
        <div class="purchase-grid">
            <div class="purchase-card">
                <h3>قم بشراء نومو إديو إكس</h3>
                <p>تشمل جميع خططنا عدد غير محدود من الطلاب والدورات غير المحدودة والمحتوى الذي تريده بدون رسوم خفية.</p>
                <a href="#" class="cta-button">الخطة والتسعير</a>
            </div>

            <div class="purchase-card">
                <h3>إعادة بيع نومو إديو إكس</h3>
                <p>قم بتضمين نومو إديو إكس في طلبك وقم ببيعه في السوق الخاص بك، وفقاً لشروطك واسعارك.</p>
                <a href="#" class="cta-button">الشراكة</a>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced CTA Banner (Matching the image) -->
<div class="container">
    <div class="cta-banner">
        <div class="cta-banner-content">
            <p class="cta-ready">جاهز للإنطلاق معنا؟</p>
            <h2>تواصل معنا الآن؛ لتبدأ رحلتك نحو مستقبل رقمي مبتكر ومستدام!</h2>
            <p>منصة إلكترونية مزودة بأحدث التقنيات، فريق خدمة عملاء قوي ومدرب بطريقة احترافية.</p>
            <div class="cta-buttons">
                <a href="#" class="cta-button">طلب عرض تسعير</a>
                <a href="#" class="cta-secondary">
                    تواصل مع خدمة العملاء
                    <span class="arrow-icon">←</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Enhanced Partners Section (Matching the image) -->
<section class="partners-section">
    <div class="container">
        <div class="partners-container">
            <div>
                <h3 class="partners-title">شركاؤنا</h3>
                <p class="partners-text">تعرف على اعتماداتنا الدولية وشراكاتنا التي تضمن لك تدريباً عالي الجودة ومعتمداً
                    عالمياً.</p>
                <a href="#" class="discover-more">اكتشف المزيد</a>
            </div>
            <div class="partners-logos">
                <div class="partner-logo">
                    <img src="/api/placeholder/100/40" alt="Oracle">
                </div>
                <div class="partner-logo">
                    <img src="/api/placeholder/100/40" alt="مؤسسة التدريب التقني">
                </div>
                <div class="partner-logo">
                    <img src="/api/placeholder/100/40" alt="وزارة التعليم">
                </div>
                <div class="partner-logo">
                    <img src="/api/placeholder/100/40" alt="المركز الوطني للتعليم الإلكتروني">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Footer (Matching the image) -->
<footer>
    <div class="container">
        <div class="footer-container">
            <div class="footer-about">
                <img src="/api/placeholder/150/50" alt="نومو إديو إكس" class="footer-logo">
                <p>نومو إديو إكس، حيث يتغير المستقبل. بتفكير في عالم التدريب لنرتقي بمهاراتكم نحو آفاق جديدة</p>
                <img src="/api/placeholder/120/50" alt="رؤية 2030" class="footer-vision">
            </div>

            <div class="footer-links">
                <h4>روابط مهمة</h4>
                <ul>
                    <li><a href="#">الرئيسية</a></li>
                    <li><a href="#">منتجات</a></li>
                    <li><a href="#">الشركاء</a></li>
                    <li><a href="#">التسعير</a></li>
                    <li><a href="#">مصادر</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>مساعدة</h4>
                <ul>
                    <li><a href="#">من نحن</a></li>
                    <li><a href="#">تواصل معنا الآن</a></li>
                    <li><a href="#">الأسئلة الشائعة</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h4>تواصل معنا</h4>

                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div class="contact-info">
                        اتصل بنا الآن
                        <a href="tel:920022136">920022136</a>
                        <a href="tel:0500808104">0500808104</a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div class="contact-info">
                        أرسل عبر البريد الإلكتروني
                        <a href="mailto:info@numo.sa">info@numo.sa</a>
                    </div>
