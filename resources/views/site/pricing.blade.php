<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خطط التسعير - نومو إديو إكس</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            color: #333;
            background-color: #f8f9fa;
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
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #003b7e;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            margin-left: 10px;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #e74c3c;
        }

        .btn-quote {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
        }

        .lang-switch {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        /* Hero Section Styles */
        .hero {
            background-color: #003b7e;
            color: white;
            padding: 60px 0;
            background-image: linear-gradient(rgba(0, 59, 126, 0.9), rgba(0, 59, 126, 0.9)), url('/api/placeholder/1200/600');
            background-size: cover;
            background-position: center;
        }

        .hero-content {
            text-align: right;
            max-width: 800px;
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #e74c3c;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        /* Pricing Section Styles */
        .pricing {
            padding: 60px 0;
        }

        .pricing-header {
            text-align: right;
            margin-bottom: 40px;
        }

        .pricing-header .breadcrumb {
            color: #e74c3c;
            margin-bottom: 10px;
        }

        .pricing-header h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .pricing-header p {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
        }

        .pricing-plans {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .pricing-plan {
            background: white;
            border-radius: 10px;
            padding: 30px;
            flex: 1;
            min-width: 250px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #eee;
            display: flex;
            flex-direction: column;
        }

        .plan-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .plan-header h3 {
            font-size: 22px;
            color: #333;
            margin-bottom: 15px;
        }

        /* Color variants for plans */
        .basic h3 {
            color: #6f42c1; /* Purple for Basic */
        }

        .standard h3 {
            color: #e74c3c; /* Red for Standard */
        }

        .professional h3 {
            color: #ff9900; /* Orange for Professional */
        }

        .enterprise h3 {
            color: #0a9e01; /* Green for Enterprise */
        }

        .plan-price {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .plan-period {
            color: #777;
            font-size: 14px;
        }

        .plan-features {
            list-style: none;
            margin-bottom: 30px;
            flex-grow: 1;
        }

        .plan-features li {
            margin-bottom: 15px;
            position: relative;
            padding-right: 25px;
            line-height: 1.4;
        }

        .plan-features li::before {
            content: "✓";
            position: absolute;
            right: 0;
            color: #0a9e01;
            font-weight: bold;
        }

        .plan-button {
            display: block;
            text-align: center;
            padding: 12px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .basic .plan-button {
            border: 2px solid #6f42c1;
            color: #6f42c1;
        }

        .basic .plan-button:hover {
            background: #6f42c1;
            color: white;
        }

        .standard .plan-button {
            border: 2px solid #e74c3c;
            color: #e74c3c;
        }

        .standard .plan-button:hover {
            background: #e74c3c;
            color: white;
        }

        .professional .plan-button {
            border: 2px solid #ff9900;
            color: #ff9900;
        }

        .professional .plan-button:hover {
            background: #ff9900;
            color: white;
        }

        .enterprise .plan-button {
            border: 2px solid #0a9e01;
            color: #0a9e01;
        }

        .enterprise .plan-button:hover {
            background: #0a9e01;
            color: white;
        }

        .contact-btn {
            text-align: center;
            margin-top: 40px;
        }

        /* Features Section */
        .features {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .features-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .features-header h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .feature-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
        }

        .feature-card i {
            font-size: 24px;
            margin-left: 15px;
            color: #003b7e;
        }

        /* FAQ Section */
        .faq {
            padding: 60px 0;
        }

        .faq-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .faq-item {
            margin-bottom: 15px;
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
        }

        .faq-question {
            background: #f8f9fa;
            padding: 15px 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-question span {
            font-weight: 500;
        }

        .faq-answer {
            padding: 15px 20px;
            background: white;
            line-height: 1.6;
        }

        /* CTA Section */
        .cta {
            background-color: #003b7e;
            padding: 60px 0;
            color: white;
            text-align: center;
        }

        .cta h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .cta p {
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        /* Footer Styles - Updated from first file */
        footer {
            background-color: #f5f5f5;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer-column {
            flex: 1;
            min-width: 200px;
            margin-bottom: 30px;
            padding: 0 15px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #003b7e;
            font-weight: bold;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50px;
            height: 2px;
            background-color: #e74c3c;
        }

        .footer-column .logo {
            font-size: 32px;
            font-weight: bold;
            color: #003b7e;
            margin-bottom: 15px;
        }

        .footer-column .logo span {
            color: #e74c3c;
        }

        .footer-column p {
            margin-bottom: 20px;
            font-size: 14px;
            line-height: 1.6;
            color: #666;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #666;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #e74c3c;
        }

        .contact-info {
            list-style: none;
        }

        .contact-info li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }

        .contact-info i {
            margin-left: 15px;
            color: #003b7e;
            font-size: 18px;
            min-width: 20px;
            text-align: center;
        }

        .contact-info span {
            font-size: 14px;
            line-height: 1.6;
            color: #666;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-link {
            background: #e1e1e1;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link.linkedin {
            background-color: #0077B5;
            color: white;
        }

        .social-link.twitter {
            background-color: #1DA1F2;
            color: white;
        }

        .social-link:hover {
            transform: translateY(-3px);
        }

        .footer-bottom {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e1e1e1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-bottom p {
            font-size: 14px;
            color: #666;
        }

        .footer-bottom-links {
            display: flex;
            gap: 20px;
        }

        .footer-bottom-links a {
            color: #666;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-bottom-links a:hover {
            color: #e74c3c;
        }

        .vision2030 {
            max-width: 120px;
            margin-bottom: 15px;
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .partners-content {
                flex-direction: column;
            }

            .partners-title {
                max-width: 100%;
                margin-bottom: 30px;
                text-align: center;
            }

            .partners-logos {
                justify-content: center;
            }

            .footer-column {
                min-width: 45%;
            }

            .pricing-plans {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .footer-column {
                min-width: 100%;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .footer-bottom-links {
                margin-top: 15px;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
<!-- Header -->
<header>
    <div class="container">
        <nav>
            <div class="logo">
                <span>Numo<span style="color: #e74c3c;">X</span></span>
            </div>
            <ul class="nav-links">
                <li><a href="#">الرئيسية</a></li>
                <li><a href="#">منتجات</a></li>
                <li><a href="#">الشركاء</a></li>
                <li><a href="#">التسعير</a></li>
                <li><a href="#">مصادر</a></li>
                <li><a href="#">من نحن</a></li>
                <li><a href="#">تواصل معنا الآن</a></li>
            </ul>
            <div class="lang-switch">
                <span>EN</span>
            </div>
            <button class="btn-quote">طلب عرض تسعير</button>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="breadcrumb">الرئيسية - التسعير</div>
            <h1>خطط التسعير - نومو إديو إكس</h1>
            <p>اختر الخطة التي تناسب احتياجات مؤسستك التعليمية والتسعير بتجربة متكاملة لإدارة التعليم والتحول الرقمي.
                جميع خططنا مصممة لتوفير أعلى مستويات الكفاءة، المرونة والأداء.</p>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing">
    <div class="container">
        <div class="pricing-plans">
            <!-- Basic Package -->
            <div class="pricing-plan basic">
                <div class="plan-header">
                    <h3>الباقة الأساسية</h3>
                    <div class="plan-price">2400 ر.س</div>
                    <div class="plan-period">(سنويًا)</div>
                </div>
                <ul class="plan-features">
                    <li>مثالية للمؤسسات الصغيرة التي تبحث عن حلول أساسية لإدارة التعليم</li>
                    <li>نظام إدارة التعلم (LMS)</li>
                    <li>إدارة الطلب والمناهج (SIS)</li>
                    <li>أدوات تقييم أساسية</li>
                    <li>دعم عبر البريد الإلكتروني</li>
                </ul>
                <a href="#" class="plan-button">شراء الباقة الأساسية</a>
            </div>

            <!-- Standard Package -->
            <div class="pricing-plan standard">
                <div class="plan-header">
                    <h3>الباقة المتميزة</h3>
                    <div class="plan-price">2400 ر.س</div>
                    <div class="plan-period">(سنويًا)</div>
                </div>
                <ul class="plan-features">
                    <li>مثالية للمؤسسات الكبيرة التي تتطلب حلولًا متطورة وشاملة لإدارة التعليم</li>
                    <li>جميع ميزات الباقة الإحترافية</li>
                    <li>تعامل مع أنظمة أخرى عبر API</li>
                    <li>تخصيص كامل للمنصة وفق احتياجات المؤسسية</li>
                    <li>دعم فني متخصص على مدار الساعة</li>
                </ul>
                <a href="#" class="plan-button">شراء الباقة المتميزة</a>
            </div>

            <!-- Professional Package -->
            <div class="pricing-plan professional">
                <div class="plan-header">
                    <h3>الباقة الإحترافية</h3>
                    <div class="plan-price">2400 ر.س</div>
                    <div class="plan-period">(سنويًا)</div>
                </div>
                <ul class="plan-features">
                    <li>مثالية للمؤسسات المتوسطة التي تحتاج إلى مزيد من التكامل والذكاء في الإدارة التعليمية</li>
                    <li>جميع ميزات الباقة الأساسية</li>
                    <li>نظام تقييم متقدم وتحليلات أداء</li>
                    <li>تقارير وأدوات تحكم ذكية</li>
                    <li>دعم عبر البريد الإلكتروني والدردشة المباشرة</li>
                </ul>
                <a href="#" class="plan-button">شراء الباقة الإحترافية</a>
            </div>

            <!-- Enterprise Package -->
            <div class="pricing-plan enterprise">
                <div class="plan-header">
                    <h3>باقة المؤسسات</h3>
                    <div class="plan-price">2400 ر.س</div>
                    <div class="plan-period">(سنويًا)</div>
                </div>
                <ul class="plan-features">
                    <li>حلول مخصصة بالكامل للمؤسسات التعليمية الكبرى التي تحتاج إلى إدارة متكاملة ومتطورة</li>
                    <li>جميع ميزات الباقة المتميزة</li>
                    <li>تخصيص متقدم للوظائف والتصميم</li>
                    <li>دعم لكل شخص ومدير حساب مخصص</li>
                    <li>تدريب واستشارات متقدمة</li>
                </ul>
                <a href="#" class="plan-button">شراء باقة المؤسسات</a>
            </div>
        </div>
        <div class="contact-btn">
            <a href="#" class="btn-quote">تواصل معنا</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features">
    <div class="container">
        <div class="features-header">
            <h2>وحدات نظام نومو إديو إكس</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <i class="fas fa-graduation-cap"></i>
                <div>
                    <h3>نظام إدارة الطلاب (SIS)</h3>
                </div>
            </div>
            <div class="feature-card">
                <i class="fas fa-book"></i>
                <div>
                    <h3>نظام إدارة التعلم (LMS)</h3>
                </div>
            </div>
            <div class="feature-card">
                <i class="fas fa-calendar"></i>
                <div>
                    <h3>إدارة الفصول والجداول الدراسية</h3>
                </div>
            </div>
            <div class="feature-card">
                <i class="fas fa-clipboard-check"></i>
                <div>
                    <h3>إدارة الامتحانات والتقييمات</h3>
                </div>
            </div>
            <div class="feature-card">
                <i class="fas fa-credit-card"></i>
                <div>
                    <h3>نظام الدفع الإلكتروني</h3>
                </div>
            </div>
            <div class="feature-card">
                <i class="fas fa-book-reader"></i>
                <div>
                    <h3>إدارة المكتبة الرقمية</h3>
                </div>
            </div>
            <div class="feature-card">
                <i class="fas fa-users"></i>
                <div>
                    <h3>نظام إدارة المستخدمين</h3>
                </div>
            </div>
            <div class="feature-card">
                <i class="fas fa-chart-line"></i>
                <div>
                    <h3>إدارة التقارير والتحليلات</h3>
                </div>
            </div>
            <div class="feature-card">
                <i class="fas fa-user-check"></i>
                <div>
                    <h3>إدارة الحضور والغياب</h3>
                </div>
            </div>
            <div class="feature-card">
                <i class="fas fa-bell"></i>
                <div>
                    <h3>إشعارات وتنبيهات آلية</h3>
                </div>
            </div>
            <div class="feature-card">
                <i class="fas fa-exchange-alt"></i>
                <div>
                    <h3>تكامل مع أنظمة الجهات الخارجية</h3>
                </div>
            </div>
            <div class="feature-card">
                <i class="fas fa-user-tie"></i>
                <div>
                    <h3>إدارة التوظيف والموارد البشرية</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq">
    <div class="container">
        <div class="faq-header">
            <h2>أكثر الأسئلة تكرارًا</h2>
            <p>أكثر الأسئلة تكرارًا من العملاء في مكان واحد لتفيدك خلال تجربتك معنا</p>
        </div>
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    <span>1. ما هو أفضل برنامج لإدارة الكليات؟</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>لوريم إيبسوم (Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويستخدم في
                        صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر
                        عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل
                        أو مرجع شكلي لهذه الأحرف.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>2. ما هي الميزات الرئيسية لبرنامج إدارة الكليات؟</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer" style="display: none;">
                    <p>محتوى الإجابة هنا</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>3. ما هو برنامج إدارة الكليات؟</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer" style="display: none;">
                    <p>محتوى الإجابة هنا</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <span>4. كم تبلغ تكلفة برنامج إدارة الكليات؟</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer" style="display: none;">
                    <p>محتوى الإجابة هنا</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta">
    <div class="container">
        <h2>جاهز للانطلاق معنا؟</h2>
        <p>تواصل معنا الآن: لنبدأ رحلتك نحو مستقبل رقمي مبتكر ومستدام!</p>
        <p>منصة إلكترونية مرموقة تحدث الكليات فريق دعم فني ومدرب بطريقة احترافية</p>
        <div class="cta-buttons">
            <a href="#" class="btn-quote">طلب عرض تسعير</a>
            <a href="#" style="color: white; text-decoration: none; display: flex; align-items: center;">
                <i class="fas fa-headset" style="margin-left: 8px;"></i>
                تواصل مع خدمة العملاء
            </a>
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

<!-- Help
