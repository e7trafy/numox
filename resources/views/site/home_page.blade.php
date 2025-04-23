<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام نما - منصة تعليمية</title>
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

        .logo-img {
            width: 50px;
            height: 50px;
            background-color: #1565c0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-left: 10px;
        }

        .logo-text {
            font-size: 24px;
            font-weight: bold;
            color: #1565c0;
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
        }

        .login-btn {
            background-color: #ff5a5f;
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            background-color: #fff;
            padding: 40px 0;
            margin-bottom: 30px;
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .hero-text {
            width: 50%;
        }

        .hero-text h1 {
            color: #174ea6;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .hero-text p {
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .hero-image {
            width: 45%;
            height: 300px;
            background-color: #e9f1fd;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero-device {
            width: 70%;
            height: 200px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            border: 1px solid #ddd;
        }

        .hero-device::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 20px;
            background-color: #1565c0;
        }

        .hero-device::after {
            content: "";
            position: absolute;
            top: 30px;
            left: 10px;
            width: 80%;
            height: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
        }

        .device-content {
            position: absolute;
            top: 50px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }

        .device-item {
            width: calc(50% - 5px);
            height: 30px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        /* Features Section */
        .features {
            background-color: #1565c0;
            color: white;
            padding: 30px 0;
            margin-bottom: 30px;
        }

        .features-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .features-icons {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 20px;
        }

        .icon-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 30%;
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .icon-circle i {
            font-size: 30px;
        }

        /* Services Grid */
        .services {
            background-color: #fff;
            padding: 30px 0;
            margin-bottom: 30px;
        }

        .services-header {
            text-align: center;
            margin-bottom: 30px;
            color: #174ea6;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .service-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
            background-color: #fff;
        }

        .service-card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background-color: #e9f1fd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
        }

        .service-icon i {
            font-size: 24px;
            color: #1565c0;
        }

        .service-card h3 {
            color: #174ea6;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .service-card p {
            color: #666;
            font-size: 14px;
        }

        /* Steps Section */
        .steps {
            background-color: #fff;
            padding: 30px 0;
            margin-bottom: 30px;
            text-align: center;
        }

        .steps-header {
            color: #174ea6;
            margin-bottom: 30px;
        }

        .steps-content {
            display: flex;
            justify-content: space-around;
        }

        .step-box {
            width: 30%;
            padding: 20px;
            text-align: center;
        }

        .step-icon {
            width: 80px;
            height: 80px;
            background-color: #e9f1fd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
        }

        .step-icon i {
            font-size: 30px;
            color: #1565c0;
        }

        .step-box h3 {
            color: #174ea6;
            margin-bottom: 10px;
        }

        /* Banner */
        .banner {
            background-color: #1565c0;
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-bottom: 30px;
        }

        .banner-content h2 {
            margin-bottom: 20px;
        }

        .form-box {
            background-color: white;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
        }

        .form-box input, .form-box button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-box button {
            background-color: #ff5a5f;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        /* Partners */
        .partners {
            background-color: #fff;
            padding: 30px 0;
            text-align: center;
            margin-bottom: 30px;
        }

        .partners-header {
            color: #174ea6;
            margin-bottom: 30px;
        }

        .partners-logos {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .partner-logo {
            width: 120px;
            height: 50px;
            background-color: #f5f5f5;
            border-radius: 5px;
            margin: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #777;
            font-weight: bold;
            font-size: 12px;
        }

        /* CTA Section */
        .cta {
            background: linear-gradient(to right, #083472, #1565c0);
            color: white;
            padding: 30px 0;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 8px;
        }

        .cta-btn {
            display: inline-block;
            background-color: #ff5a5f;
            color: white;
            padding: 10px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
        }

        /* Footer */
        footer {
            background-color: #083472;
            color: white;
            padding: 30px 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .footer-column {
            width: 23%;
            margin-bottom: 20px;
        }

        .footer-column h3 {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #ddd;
            text-decoration: none;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .social-icons a {
            display: inline-block;
            width: 30px;
            height: 30px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin: 0 5px;
            color: white;
            line-height: 30px;
            text-align: center;
        }

        /* Ad Placeholders */
        .ad-placeholder {
            width: 100%;
            height: 90px;
            background-color: #f0f0f0;
            margin: 20px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 14px;
            border: 1px dashed #ccc;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-content {
                flex-direction: column;
            }

            .hero-text, .hero-image {
                width: 100%;
                margin-bottom: 20px;
            }

            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .features-icons, .steps-content {
                flex-direction: column;
                align-items: center;
            }

            .icon-item, .step-box {
                width: 80%;
                margin-bottom: 20px;
            }

            .footer-column {
                width: 48%;
            }
        }

        @media (max-width: 576px) {
            .services-grid {
                grid-template-columns: 1fr;
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
            <div class="logo-img">N</div>
            <div class="logo-text">نما</div>
        </div>
        <nav>
            <ul>
                <li><a href="#">الرئيسية</a></li>
                <li><a href="#">المميزات</a></li>
                <li><a href="#">الخدمات</a></li>
                <li><a href="#">المنصات</a></li>
                <li><a href="#">الشركاء</a></li>
                <li><a href="#">اتصل بنا</a></li>
            </ul>
        </nav>
        <a href="#" class="login-btn">تسجيل الدخول</a>
    </div>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="container hero-content">
        <div class="hero-text">
            <h1>نظام متكامل مصمم لدعم المؤسسات التربوية في إدارة المؤسسات التعليمية والتفاعل مع كل مكونات العملية
                التعليمية</h1>
            <p>منصة تعليمية متكاملة تدعم المؤسسات التعليمية وتساعد على التواصل الفعال بين جميع الأطراف</p>
            <a href="#" class="login-btn">اكتشف المزيد</a>
        </div>
        <div class="hero-image">
            <div class="hero-device">
                <div class="device-content">
                    <div class="device-item"></div>
                    <div class="device-item"></div>
                    <div class="device-item"></div>
                    <div class="device-item"></div>
                    <div class="device-item"></div>
                    <div class="device-item"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features">
    <div class="container">
        <div class="features-header">
            <h2>نظام نما يتميز بواجهات بسيطة وتصميم مريح</h2>
            <p>سهل الاستخدام للطلاب والمعلمين على حد سواء</p>
        </div>
        <div class="features-icons">
            <div class="icon-item">
                <div class="icon-circle">
                    <i class="fas fa-desktop"></i>
                </div>
                <h3>واجهة سهلة الاستخدام</h3>
            </div>
            <div class="icon-item">
                <div class="icon-circle">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>أدوات تفاعلية متنوعة</h3>
            </div>
            <div class="icon-item">
                <div class="icon-circle">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>تصميم مرن يناسب الجميع</h3>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="services">
    <div class="container">
        <div class="services-header">
            <h2>تعرف على المزيد من المميزات المختلفة</h2>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3>إدارة الحسابات التعليمية</h3>
                <p>إدارة سهلة ومرنة لحسابات الطلاب والمعلمين</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <h3>منصة التعلم الإلكتروني</h3>
                <p>منصة متكاملة للتعلم عن بعد</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-clipboard-check"></i>
                </div>
                <h3>إدارة الاختبارات والتقييم</h3>
                <p>أدوات لإنشاء وإدارة الاختبارات بسهولة</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>التواصل بين المعلمين والطلاب</h3>
                <p>نظام متكامل للتواصل المباشر</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>إدارة المحتوى التعليمي</h3>
                <p>أدوات سهلة لإنشاء وتنظيم المحتوى</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h3>تقارير وإحصائيات</h3>
                <p>تقارير تفصيلية عن أداء الطلاب والمؤسسة</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>إدارة الجداول الدراسية</h3>
                <p>أدوات مرنة لإعداد وإدارة الجداول</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-user-check"></i>
                </div>
                <h3>نظام الحضور والغياب</h3>
                <p>متابعة حضور الطلاب بشكل دقيق</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>تطبيق جوال متوافق مع كل الأجهزة</h3>
                <p>تطبيق لنظامي iOS وAndroid</p>
            </div>
        </div>
    </div>
</section>

<!-- Steps Section -->
<section class="steps">
    <div class="container">
        <div class="steps-header">
            <h2>تعرف على خطوات الاشتراك في المنصات المختلفة</h2>
        </div>
        <div class="steps-content">
            <div class="step-box">
                <div class="step-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <h3>تسجيل الحساب</h3>
                <p>إنشاء حساب جديد في النظام</p>
            </div>
            <div class="step-box">
                <div class="step-icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <h3>اختيار الخطة المناسبة</h3>
                <p>حدد الخطة التي تناسب احتياجاتك</p>
            </div>
            <div class="step-box">
                <div class="step-icon">
                    <i class="fas fa-play-circle"></i>
                </div>
                <h3>بدء الاستخدام</h3>
                <p>ابدأ في استخدام النظام فوراً</p>
            </div>
        </div>
    </div>
</section>

<!-- Ad Placeholder -->
<div class="container">
    <div class="ad-placeholder">
        مساحة إعلانية 1200 × 290
    </div>
</div>

<!-- Banner -->
<section class="banner">
    <div class="container banner-content">
        <h2>نحن مستعدون للرد على استفساراتكم وطلباتكم</h2>
        <p>يمكنكم التواصل معنا لمعرفة المزيد عن نظام نما</p>
        <div class="form-box">
            <form>
                <input type="text" placeholder="الاسم">
                <input type="email" placeholder="البريد الإلكتروني">
                <input type="tel" placeholder="رقم الهاتف">
                <button type="submit">إرسال الطلب</button>
            </form>
        </div>
    </div>
</section>

<!-- Ad Placeholder -->
<div class="container">
    <div class="ad-placeholder">
        مساحة إعلانية 1440 × 688
    </div>
</div>

<!-- Partners -->
<section class="partners">
    <div class="container">
        <div class="partners-header">
            <h2>شركاؤنا في النجاح</h2>
        </div>
        <div class="partners-logos">
            <div class="partner-logo">شريك 1</div>
            <div class="partner-logo">شريك 2</div>
            <div class="partner-logo">شريك 3</div>
            <div class="partner-logo">شريك 4</div>
            <div class="partner-logo">شريك 5</div>
            <div class="partner-logo">شريك 6</div>
            <div class="partner-logo">شريك 7</div>
            <div class="partner-logo">شريك 8</div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta">
    <div class="container">
        <h2>تواصل معنا الآن لطلب استشارة مجانية</h2>
        <p>فريقنا جاهز لمساعدتك</p>
        <a href="#" class="cta-btn">اتصل بنا</a>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                <h3>نظام نما</h3>
                <p>منصة تعليمية متكاملة لإدارة المؤسسات التعليمية</p>
            </div>
            <div class="footer-column">
                <h3>روابط سريعة</h3>
                <ul>
                    <li><a href="#">الرئيسية</a></li>
                    <li><a href="#">المميزات</a></li>
                    <li><a href="#">الخدمات</a></li>
                    <li><a href="#">المنصات</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>الدعم الفني</h3>
                <ul>
                    <li><a href="#">المساعدة</a></li>
                    <li><a href="#">الأسئلة الشائعة</a></li>
                    <li><a href="#">اتصل بنا</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>تواصل معنا</h3>
                <p>info@numa.com</p>
                <p>+966 123 456 789</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>جميع الحقوق محفوظة © 2025 - نظام نما للتعليم</p>
        </div>
    </div>
</footer>

<script>
    // Simple JavaScript functionality
    document.addEventListener('DOMContentLoaded', function () {
        // Add smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Simple form validation
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const inputs = this.querySelectorAll('input');
                let isValid = true;

                inputs.forEach(input => {
                    if (input.value.trim() === '') {
                        isValid = false;
                        input.style.borderColor = 'red';
                    } else {
                        input.style.borderColor = '#ddd';
                    }
                });

                if (isValid) {
                    alert('تم إرسال طلبك بنجاح!');
                    this.reset();
                } else {
                    alert('يرجى ملء جميع الحقول المطلوبة');
                }
            });
        }

        // Service cards hover effect
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-5px)';
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>
</body>
</html>
