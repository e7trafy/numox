<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numo - المصادر</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
            color: inherit;
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
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px;
        }

        .nav-menu {
            display: flex;
            list-style-type: none;
        }

        .nav-menu li {
            margin-left: 20px;
        }

        .nav-menu a {
            font-weight: bold;
            color: #333;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #e74c3c;
        }

        .lang-btn, .pricing-btn {
            padding: 8px 20px;
            border-radius: 30px;
            cursor: pointer;
        }

        .lang-btn {
            background-color: #f8f9fa;
            color: #333;
            border: 1px solid #ddd;
        }

        .pricing-btn {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            background-color: #003366;
            color: white;
            padding: 50px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #e74c3c;
        }

        .breadcrumb {
            display: flex;
            margin-bottom: 20px;
        }

        .breadcrumb a {
            color: #e74c3c;
            margin-left: 5px;
        }

        .breadcrumb span {
            margin-left: 5px;
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        /* Resources Section */
        .resources {
            padding: 50px 0;
            background-color: #fff;
        }

        .resources-title {
            text-align: right;
            margin-bottom: 40px;
        }

        .resources-title span {
            color: #e74c3c;
        }

        .resources-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .resource-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .resource-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .resource-icon {
            text-align: center;
            margin-bottom: 20px;
        }

        .resource-icon img {
            width: 80px;
            height: 80px;
        }

        .resource-title {
            font-size: 1.5rem;
            color: #003366;
            margin-bottom: 15px;
            text-align: center;
        }

        .resource-text {
            font-size: 0.95rem;
            color: #555;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .resource-features {
            margin-bottom: 20px;
        }

        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            color: #555;
        }

        .feature i {
            color: #4CAF50;
            margin-left: 10px;
        }

        .resource-link {
            display: flex;
            justify-content: flex-end;
            margin-top: 15px;
        }

        .resource-link a {
            color: #e74c3c;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .resource-link a i {
            margin-right: 5px;
        }

        /* Free eBook Section */
        .ebook-section {
            background-color: #2980b9;
            color: white;
            padding: 50px 0;
        }

        .ebook-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .ebook-form {
            width: 50%;
        }

        .ebook-image {
            width: 40%;
            text-align: center;
        }

        .ebook-image img {
            max-width: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .ebook-title {
            font-size: 1.8rem;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            border: none;
        }

        .whatsapp-input {
            position: relative;
        }

        .whatsapp-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #4CAF50;
            font-size: 20px;
        }

        .phone-prefix {
            position: absolute;
            left: 40px;
            top: 50%;
            transform: translateY(-50%);
            color: #555;
        }

        .download-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            display: inline-block;
            text-align: center;
        }

        .download-btn:hover {
            background-color: #c0392b;
        }

        /* Contact Section */
        .contact-banner {
            background-color: #003366;
            color: white;
            padding: 50px 0;
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            margin: 50px 0;
        }

        .contact-wave {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: url('path/to/wave.svg') no-repeat;
            background-size: cover;
            opacity: 0.1;
        }

        .contact-content {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .contact-title {
            color: #e74c3c;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .contact-heading {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .contact-text {
            margin-bottom: 30px;
            font-size: 1rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .contact-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .contact-btn {
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .contact-btn i {
            margin-left: 8px;
        }

        .primary-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
        }

        .secondary-btn {
            background-color: transparent;
            color: white;
            border: 1px solid white;
        }

        /* Partners Section */
        .partners {
            padding: 30px 0;
            background-color: #2980b9;
            color: white;
        }

        .partners-title {
            text-align: center;
            margin-bottom: 15px;
            font-size: 1.8rem;
        }

        .partners-text {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        .partners-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .partner-logo {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 180px;
            height: 80px;
        }

        .partner-logo img {
            max-width: 100%;
            max-height: 50px;
            filter: grayscale(100%);
            transition: filter 0.3s;
        }

        .partner-logo:hover img {
            filter: grayscale(0%);
        }

        .more-partners {
            text-align: center;
            margin-top: 20px;
        }

        .more-partners-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            display: inline-block;
        }

        /* Footer */
        footer {
            background-color: #003366;
            color: white;
            padding: 50px 0 20px;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .footer-column {
            width: 23%;
        }

        .footer-title {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50px;
            height: 2px;
            background-color: #e74c3c;
        }

        .footer-links {
            list-style-type: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #ccc;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #e74c3c;
        }

        .footer-contact p {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .footer-contact i {
            margin-left: 10px;
            color: #e74c3c;
            min-width: 20px;
        }

        .footer-logo {
            margin-bottom: 20px;
        }

        .footer-logo img {
            height: 40px;
        }

        .footer-about {
            margin-bottom: 20px;
            line-height: 1.6;
            color: #ccc;
        }

        .social-icons {
            display: flex;
            gap: 10px;
        }

        .social-icons a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .social-icons a:hover {
            background-color: #e74c3c;
        }

        .footer-bottom {
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #ccc;
            font-size: 0.9rem;
        }

        .footer-links-bottom a {
            margin-left: 20px;
        }

        .vision2030 {
            height: 30px;
            margin-left: 15px;
        }

        /* WhatsApp Button */
        .whatsapp-btn {
            position: fixed;
            bottom: 30px;
            left: 30px;
            width: 60px;
            height: 60px;
            background-color: #4CAF50;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 99;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .whatsapp-btn:hover {
            transform: scale(1.1);
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .resources-grid {
                grid-template-columns: 1fr;
            }

            .ebook-container {
                flex-direction: column;
            }

            .ebook-form, .ebook-image {
                width: 100%;
            }

            .ebook-image {
                margin-top: 30px;
            }

            .footer-container {
                flex-wrap: wrap;
            }

            .footer-column {
                width: 48%;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
            }

            .nav-menu {
                margin: 20px 0;
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav-menu li {
                margin: 5px 10px;
            }

            .contact-buttons {
                flex-direction: column;
                align-items: center;
            }

            .contact-btn {
                margin-bottom: 15px;
            }

            .footer-column {
                width: 100%;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .footer-links-bottom {
                margin-top: 15px;
            }
        }
    </style>
</head>
<body>
<!-- WhatsApp Button -->
<div class="whatsapp-btn">
    <i class="fab fa-whatsapp"></i>
</div>

<!-- Header -->
<header>
    <div class="container header-container">
        <div class="logo">
            <a href="index.html">
                <img src="https://placehold.co/200x50/0066b2/white?text=NumoX" alt="Numo X">
            </a>
        </div>
        <ul class="nav-menu">
            <li><a href="index.html">الرئيسية</a></li>
            <li><a href="products.html">منتجات</a></li>
            <li><a href="partners.html">الشركاء</a></li>
            <li><a href="pricing.html">التسعير</a></li>
            <li><a href="resources.html">مصادر</a></li>
            <li><a href="about.html">من نحن</a></li>
            <li><a href="contact.html">تواصل معنا الآن</a></li>
        </ul>
        <div class="header-buttons">
            <button class="lang-btn">EN</button>
            <button class="pricing-btn">طلب عرض تسعير</button>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="breadcrumb">
                <a href="index.html">الرئيسية</a>
                <span>-</span>
                <span>المصادر</span>
            </div>
            <h1>المصادر - نومو إديو إكس</h1>
            <p>نومو إديو إكس، حيث يمكنك العمل على كل ما تحتاجه لاستخدامه بمنتهى بكفاءة وتحقيق أقصى استفادة منها. نوفر لك
                مجموعة من المقالات، الندوات، ودراسات الحالة لمساعدتك على إدارة مؤسستك التعليمية بفعالية.</p>
        </div>
    </div>
</section>

<!-- Resources Section -->
<section class="resources">
    <div class="container">
        <div class="resources-grid">
            <!-- Resource Card 1 -->
            <div class="resource-card">
                <div class="resource-icon">
                    <img src="https://placehold.co/80x80/e74c3c/white?text=Training" alt="Training Icon">
                </div>
                <h3 class="resource-title">الندوات والدورات التدريبية</h3>
                <p class="resource-text">تعلم من خبراتنا في ندوات تعليمية مفصلة ومباشرة حول أحدث تقنيات نومو إديو إكس
                    وأفضل الممارسات في إدارة التعليم الإلكتروني.</p>
                <div class="resource-features">
                    <div class="feature">
                        <i class="fas fa-check-circle"></i>
                        <span>إعداد وإدارة نظام التعليم الإلكتروني (LMS)</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check-circle"></i>
                        <span>تحليل بيانات الطلاب وتحسين الأداء الأكاديمي</span>
                    </div>
                </div>
                <div class="resource-link">
                    <a href="#">دليل المعلمين والطلاب <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>

            <!-- Resource Card 2 -->
            <div class="resource-card">
                <div class="resource-icon">
                    <img src="https://placehold.co/80x80/e74c3c/white?text=Guide" alt="Guide Icon">
                </div>
                <h3 class="resource-title">أدلة الاستخدام</h3>
                <p class="resource-text">احصل على إرشادات تفصيلية حول كيفية استخدام نومو إديو إكس بكفاءة، بدءاً من إعداد
                    النظام وحتى إدارة العمليات التكنولوجية والمالية.</p>
                <div class="resource-link">
                    <a href="#">تحميل دليل الاستخدام <i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="resource-link">
                    <a href="#">دليل المسؤولين والمديرين <i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="resource-link">
                    <a href="#">دليل المعلمين والطلاب <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>

            <!-- Resource Card 3 -->
            <div class="resource-card">
                <div class="resource-icon">
                    <img src="https://placehold.co/80x80/e74c3c/white?text=Articles" alt="Article Icon">
                </div>
                <h3 class="resource-title">المقالات والتحديثات</h3>
                <p class="resource-text">تابع مقالاتنا حول أحدث الاتجاهات في التعليم الرقمي، الإدارة الأكاديمية،
                    والتقنيات الحديثة في التعليم الإلكتروني.</p>
                <div class="resource-link">
                    <a href="#">زيارة المدونة <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>

            <!-- Resource Card 4 -->
            <div class="resource-card">
                <div class="resource-icon">
                    <img src="https://placehold.co/80x80/e74c3c/white?text=Case+Study" alt="Case Study Icon">
                </div>
                <h3 class="resource-title">دراسات الحالة وقصص النجاح</h3>
                <p class="resource-text">اكتشف كيف ساعد نومو إديو إكس المؤسسات التعليمية في تحقيق تحول رقمي ناجح وزيادة
                    الكفاءة التعليمية.</p>
                <div class="resource-link">
                    <a href="#">قراءة دراسات الحالة <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Free eBook Section -->
<section class="ebook-section">
    <div class="container ebook-container">
        <div class="ebook-form">
            <h2 class="ebook-title">احصل على كتابك الإلكتروني مجاناً</h2>
            <form>
                <div class="form-group">
                    <label for="name">الاسم*</label>
                    <input type="text" id="name" placeholder="أحمد أسامة" required>
                </div>
                <div class="form-group">
                    <label for="email">البريد الإلكتروني*</label>
                    <input type="email" id="email" placeholder="samantha.smith@mail.net" required>
                </div>
                <div class="form-group">
                    <label for="city">المدينة*</label>
                    <input type="text" id="city" required>
                </div>
                <div class="form-group whatsapp-input">
                    <label for="phone">رقم الهاتف*</label>
                    <input type="tel" id="phone" placeholder="" required>
                    <i class="fab fa-whatsapp whatsapp-icon"></i>
                    <span class="phone-prefix">+966</span>
                </div>
                <div class="form-group">
                    <label for="organization">منظمة*</label>
                    <input type="text" id="organization" required>
                </div>
                <button type="submit" class="download-btn">تحميل الآن</button>
            </form>
        </div>
        <div class="ebook-image">
            <img src="https://placehold.co/300x400/eee/333?text=THE+PORTAL" alt="The Portal eBook">
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="partners">
    <div class="container">
        <h2 class="partners-title">عملاؤنا</h2>
        <p class="partners-text">نفتخر بأننا على مستوى ثقة عملائنا وتطلعاتهم</p>
        <div class="partners-grid">
            <!-- Partner logos - First row -->
            <div class="partner-logo">
                <img src="https://placehold.co/160x60/fff/333?text=Partner+1" alt="Partner 1">
            </div>
            <div class="partner-logo">
                <img src="https://placehold.co/160x60/fff/333?text=Partner+2" alt="Partner 2">
            </div>
            <div class="partner-logo">
                <img src="https://placehold.co/160x60/fff/333?text=Partner+3" alt="Partner 3">
            </div>
            <div class="partner-logo">
                <img src="https://placehold.co/160x60/fff/333?text=Partner+4" alt="Partner 4">
            </div>
            <div class="partner-logo">
                <img src="https://placehold.co/160x60/fff/333?text=Partner+5" alt="Partner 5">
            </div>
            <!-- Partner logos - Second row -->
            <div class="partner-logo">
                <img src="https://placehold.co/160x60/fff/333?text=Partner+6" alt="Partner 6">
            </div>
            <div class="partner-logo">
                <img src="https://placehold.co/160x60/fff/333?text=Partner+7" alt="Partner 7">
            </div>
            <div class="partner-logo">
                <img src="https://placehold.co/160x60/fff/333?text=Partner+8" alt="Partner 8">
            </div>
            <div class="partner-logo">
                <img src="https://placehold.co/160x60/fff/333?text=Partner+9" alt="Partner 9">
            </div>
            <div class="partner-logo">
                <img src="https://placehold.co/160x60/fff/333?text=Partner+10" alt="Partner 10">
            </div>
        </div>
        <div class="more-partners">
            <button class="more-partners-btn">اكتشف المزيد</button>
        </div>
    </div>
</section>

<!-- Contact Banner -->
<div class="container">
    <section class="contact-banner">
        <div class="contact-wave"></div>
        <div class="contact-content">
            <h3 class="contact-title">جاهز للانطلاق معنا؟</h3>
            <h2 class="contact-heading">تواصل معنا الآن؛ لتبدأ رحلتك نحو مستقبل رقمي مبتكر ومستدام!</h2>
            <p class="contact-text">منصة إلكترونية مرموقة بأحدث التقنيات فريق خدمة عملاء قوي ومدرب بطريقة احترافية.</p>
            <div class="contact-buttons">
                <button class="contact-btn primary-btn">طلب عرض تسعير</button>
                <button class="contact-btn secondary-btn"><i class="fas fa-headset"></i> تواصل مع خدمة العملاء</button>
            </div>
        </div>
    </section>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-container">
            <div class="footer-column">
                <div class="footer-logo">
                    <img src="https://placehold.co/160x40/fff/003366?text=NumoX" alt="Numo X">
                </div>
                <p class="footer-about">نومو حيث نوفر التعلم ونصنع المستقبل، نتشارك في عالم التدريب لنرتقي بمهاراتكم نحو
                    آفاق جديدة</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3 class="footer-title">روابط مهمة</h3>
                <ul class="footer-links">
                    <li><a href="#">الرئيسية</a></li>
                    <li><a href="#">منتجات</a></li>
