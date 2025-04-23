<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نومو إيديو إكس - الشركاء</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', 'Segoe UI', Tahoma, sans-serif;
        }

        body {
            background-color: #fff;
            color: #333;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
        }

        ul {
            list-style: none;
        }

        /* Container */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .text-center {
            text-align: center;
        }

        /* Header */
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            height: 50px;
        }

        /* Navigation */
        nav {
            display: flex;
            align-items: center;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            margin-left: 20px;
        }

        .nav-menu li {
            margin: 0 15px;
            position: relative;
        }

        .nav-menu li a {
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-menu li a:hover {
            color: #f44336;
        }

        .dropdown-icon::after {
            content: "▼";
            font-size: 10px;
            margin-right: 5px;
        }

        /* Button Styles */
        .btn {
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
            display: inline-block;
            text-align: center;
        }

        .btn-primary {
            background-color: #f44336;
            color: white;
        }

        .btn-primary:hover {
            background-color: #e53935;
            box-shadow: 0 4px 10px rgba(244, 67, 54, 0.3);
        }

        /* Hero Section */
        .hero {
            background-color: #002d5b;
            color: white;
            padding: 100px 0 60px;
            position: relative;
            overflow: hidden;
            background-image: url('/api/placeholder/1200/400');
            background-size: cover;
            background-position: center;
            background-blend-mode: multiply;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        /* Info Box */
        .info-box {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 30px;
            margin: 40px 0;
            background-color: #f9f9f9;
        }

        .info-box-header {
            margin-bottom: 20px;
            color: #002d5b;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .info-box-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
        }

        .info-box-text {
            flex: 1;
        }

        .info-box-text ul {
            margin-top: 20px;
            padding-right: 20px;
        }

        .info-box-text ul li {
            margin-bottom: 10px;
        }

        .info-box-image {
            flex: 1;
            text-align: center;
        }

        /* Features Section */
        .features {
            padding: 60px 0;
            background-color: #f5f7fa;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: #002d5b;
            font-size: 1.8rem;
        }

        .features-heading {
            color: #f44336;
            text-align: center;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .features-grid {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 0 -15px;
        }

        .feature-card {
            flex: 1;
            min-width: 300px;
            padding: 0 15px;
            margin-bottom: 30px;
            text-align: center;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
            margin: 0 auto 15px;
        }

        .feature-title {
            color: #002d5b;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .feature-description {
            color: #555;
            font-size: 0.95rem;
        }

        /* Benefits Section */
        .benefits {
            padding: 60px 0;
            background-color: #fff;
        }

        .benefits-grid {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }

        .benefit-card {
            flex: 1 0 30%;
            margin: 0 15px 30px;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            background-color: #f8f9fa;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .benefit-title {
            color: #f44336;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .benefit-description {
            color: #555;
        }

        /* CTA Section */
        .cta {
            background-color: #002d5b;
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .cta h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .cta-buttons {
            margin-top: 30px;
        }

        /* Video Section */
        .video-section {
            padding: 60px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .video-content {
            flex: 1;
        }

        .video-player {
            flex: 1;
            position: relative;
            border-radius: 8px;
            overflow: hidden;
        }

        .video-player img {
            width: 100%;
            border-radius: 8px;
        }

        .video-title {
            color: #f44336;
            margin-bottom: 15px;
            font-weight: 700;
            font-size: 1.8rem;
        }

        /* Partners Section */
        .partners {
            padding: 40px 0;
            background-color: #f0f6ff;
        }

        .partners-grid {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .partner-logo {
            height: 50px;
            margin: 10px 20px;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .partner-logo:hover {
            opacity: 1;
        }

        /* Breadcrumbs */
        .breadcrumbs {
            padding: 10px 0;
            background-color: #f5f7fa;
            margin-top: 80px;
        }

        .breadcrumbs-list {
            display: flex;
            list-style: none;
        }

        .breadcrumbs-list li {
            margin-left: 5px;
        }

        .breadcrumbs-list li:after {
            content: "/";
            margin-right: 5px;
            color: #999;
        }

        .breadcrumbs-list li:last-child:after {
            content: "";
        }

        .breadcrumbs-list a {
            color: #666;
        }

        .breadcrumbs-list .active {
            color: #f44336;
        }

        /* Language Switcher */
        .lang-switcher {
            background-color: transparent;
            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 4px;
            margin-right: 15px;
            cursor: pointer;
        }

        /* Path Navigation */
        .path-nav {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .path-item {
            color: #f44336;
            margin-left: 10px;
        }

        .path-item:not(:last-child):after {
            content: "<";
            margin-right: 10px;
            color: #333;
        }

        /* Whatsapp Button */
        .whatsapp-btn {
            position: fixed;
            bottom: 30px;
            left: 30px;
            background-color: #25d366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
            z-index: 99;
            transition: all 0.3s;
        }

        .whatsapp-btn:hover {
            transform: scale(1.1);
        }

        .text-primary {
            color: #f44336;
        }

        @media (max-width: 768px) {
            .video-section,
            .info-box-content {
                flex-direction: column;
            }

            .video-content,
            .info-box-text {
                padding: 0;
                margin-bottom: 30px;
            }

            .feature-card {
                min-width: 100%;
            }

            .benefit-card {
                flex: 1 0 100%;
            }
        }
    </style>
</head>
<body>
<!-- Header -->
<header>
    <div class="container header-container">
        <a href="index.html">
            <img src="/api/placeholder/150/50" alt="Numo EdTech X" class="logo">
        </a>

        <nav>
            <ul class="nav-menu">
                <li><a href="index.html">الرئيسية</a></li>
                <li><a href="products.html" class="dropdown-icon">منتجات</a></li>
                <li><a href="partners.html" class="dropdown-icon">الشركاء</a></li>
                <li><a href="pricing.html" class="dropdown-icon">التسعير</a></li>
                <li><a href="resources.html" class="dropdown-icon">مصادر</a></li>
                <li><a href="about.html">من نحن</a></li>
                <li><a href="contact.html">تواصل معنا الآن</a></li>
            </ul>

            <button class="lang-switcher">EN</button>
            <a href="contact.html" class="btn btn-primary">طلب عرض تسعير</a>
        </nav>
    </div>
</header>

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs-list">
            <li><a href="index.html">الرئيسية</a></li>
            <li><span class="active">الشركاء</span></li>
        </ul>
    </div>
</div>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="path-nav">
            <div class="path-item">الشركاء</div>
            <div class="path-item">الرئيسية</div>
        </div>
        <div class="hero-content">
            <h1>معًا نحو مستقبل تعليمي أكثر ذكاءً</h1>
            <p>نؤمن أن النجاح لا يتحقق بمفردنا، بل بالشراكة مع رواد التعليم والتكنولوجيا حول العالم. نعمل مع جانب من
                شركائنا من المؤسسات الأكاديمية، الشركات التقنية لخلق بيئة تعليمية متطورة تلبي احتياجات المستقبل.</p>
        </div>
    </div>
</section>

<!-- Main Info Box -->
<div class="container">
    <div class="info-box">
        <h2 class="info-box-header">كن جزءًا من نجاح نظام نومو إيديو إكس!</h2>
        <div class="info-box-content">
            <div class="info-box-text">
                <p>هل أنت مستعد لتوسيع نطاق أعمالك والمساهمة في تطوير مستقبل التعليم؟ يقدم نظام نومو إيديو إكس في
                    مجتمعنا التعليمي منصة متكاملة مصممة خصيصًا لمساعدة المؤسسات التعليمية على تبسيط عملياتها الإدارية
                    وتحسين جودة التعليم وتطوير تجربة التعلم باستخدام أحدث التقنيات الذكية.</p>
                <p>نحن في طليعة التقدم المستمر في مجال التكنولوجيا التعليمية (EdTech) لمنح الأفضل في المؤسسات التعليمية
                    أدوات مبتكرة وحلول آمنة وفعّالة لتحسين خبرة التعلم الرقمي. ومن خلال نظام نومو إيديو إكس، نوفر
                    للمؤسسات الأكاديمية حلولًا مبتكرة تساهم في أتمتة العمليات، تحسين إدارة الطلاب وأعضاء هيئة التدريس،
                    وتطوير تجربة تعليمية إلكترونية فعالة ومتسقة.</p>
                <p>انضم إلينا كشريك استراتيجي وساعدنا في نشر نظام نومو إيديو إكس عالميًا!</p>
                <p>نبحث عن شركاء موثوقين لدعم الرغبة في العمل معنا لتقديم حلولنا وكافة المدارس والجامعات والمراكز
                    التدريبية بسوق جيد.</p>
                <ul>
                    <li><a href="#" class="text-primary">• مطور برامج: نبحث عن عروض لدعم التكنولوجيا الحديثة في المجال
                            التعليمي.</a></li>
                    <li><a href="#" class="text-primary">• شريكًا تعليميًا: نهدف إلى تقديم حلول تعليمية أكثر ذكاءً.</a>
                    </li>
                    <li><a href="#" class="text-primary">• موردًا لحلول البرمجيات: نسعى لتقديم أفضل أنظمة إدارة
                            التعليم.</a></li>
                    <li><a href="#" class="text-primary">• متخصصًا في تقنيات التعليم: نبحث عن فرص لتنمية أعمالك.</a>
                    </li>
                </ul>
            </div>
            <div class="info-box-image">
                <img src="/api/placeholder/500/400" alt="تكنولوجيا التعليم">
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<section class="features">
    <div class="container">
        <h3 class="features-heading">المميزات</h3>
        <h2 class="section-title">عند انضمامك كشريك OEM لنومو إيديو إكس</h2>

        <div class="features-grid">
            <div class="feature-card">
                <img src="/api/placeholder/60/60" alt="دعم" class="feature-icon">
                <h3 class="feature-title">توسيع الأعمال في سوق تكنولوجيا التعليم</h3>
                <p class="feature-description">دخول سوق التعليم الرقمي وتقديم حلول ذكية للمؤسسات التعليمية. سيساعدك على
                    توسيع أعمالك.</p>
            </div>

            <div class="feature-card">
                <img src="/api/placeholder/60/60" alt="إيرادات" class="feature-icon">
                <h3 class="feature-title">مصدر إضافي لزيادة الإيرادات</h3>
                <p class="feature-description">يمكنك تحقيق أرباح إضافية من خلال بيع البرامج، تقديم الاستشارات، أو
                    التدريب للمؤسسات التعليمية.</p>
            </div>

            <div class="feature-card">
                <img src="/api/placeholder/60/60" alt="شيفرة المصدر" class="feature-icon">
                <h3 class="feature-title">الوصول إلى الشيفرة المصدرية لـ نومو إيديو إكس</h3>
                <p class="feature-description">تطبيق الشروط والأحكام</p>
            </div>
        </div>

        <div class="text-center" style="margin-top: 40px;">
            <a href="#" class="btn btn-primary">كن شريكًا لنومو إيديو إكس</a>
        </div>
    </div>
</section>

<!-- Expand Business Section -->
<div class="container">
    <div class="info-box">
        <div class="info-box-content">
            <div class="info-box-text">
                <h2 class="info-box-header">وسّع نطاق عملك وحقق المزيد من المبيعات من خلال دمج "نومو إيديو إكس" في
                    حلولك</h2>
                <p>في بيئتنا التنافسية اليوم، تحتاج أي مدرسة أو جامعة إلى حلول ذكية يمكن دمجها بسهولة. تبحث المؤسسات
                    التعليمية عن برامج مرنة ومتكاملة لمساعدتها على زيادة الإنتاجية، وتحليل البيانات بذكاء، وتقليل
                    التكاليف التشغيلية.</p>
                <p>مع أكثر من 40,000 مؤسسة تعليمية تستخدم نومو إديو إكس، نضمن تجربة عالمية المستوى لكل عميل. هذا يفتح
                    فرصًا هائلة لشركات OEM من خلال مشاريع خصوصية فريدة أو نماذج أعمال مستدامة. 🚀</p>
            </div>
            <div class="info-box-image">
                <img src="/api/placeholder/500/400" alt="نمو الأعمال">
            </div>
        </div>
    </div>
</div>

<!-- Video Section -->
<div class="container">
    <div class="video-section">
        <div class="video-player">
            <img src="/api/placeholder/600/400" alt="فيديو توضيحي">
        </div>
        <div class="video-content">
            <h2 class="video-title">هندستنا + تسويقك ومبيعاتك = نجاح باهر!</h2>
            <p>نعمل مع العديد من شركات OEM حول العالم لتصميم وتطوير وتقديم حلول مبتكرة لإدارة المدارس باستخدام نومو
                إيديو إكس. نحن نحقق قيمة حقيقية لعملائك ونمنح منتجك ميزة تنافسية قوية.</p>
            <p>انضم إلى برنامج شركاء نومو إيديو إكس اليوم واستمتع بجميع مزاياه. من البداية إلى النهاية، دون الحاجة إلى
                كتابة سطر واحد من الكود
                أو تطويره داخليًا.</p>
            <p>كشريك من شركات OEM ستحصل على أحدث التحديثات والتطويرات في نظام نومو إيديو إكس، مع التركيز على مشاركتك في
                التسويق والمبيعات لتحقيق النجاح. 🚀</p>
        </div>
    </div>
</div>

<!-- Benefits Section -->
<section class="benefits">
    <div class="container">
        <h2 class="section-title">فوائد مثبتة لشراكتك مع نومو إيديو إكس</h2>

        <div class="benefits-grid">
            <div class="benefit-card">
                <h3 class="benefit-title">لوحة تحكم الشركاء</h3>
                <p class="benefit-description">حصولك على حساب خاص بك في لوحة تحكم الشركاء حيث يمكنك بناء وتهيئة الحلول
                    الخاصة بك بسهولة دون الحاجة إلى معرفة تقنية.</p>
            </div>

            <div class="benefit-card">
                <h3 class="benefit-title">أنت تتحكم بكل شيء!</h3>
                <p class="benefit-description">يمكن لشركات OEM أن تحدد نسبة الأسعار والمزايا الخاصة بمنتجك. يوفر نظام
                    نومو إيديو إكس البنية التحتية والدعم الفني كاملًا إن طلبت ذلك.</p>
            </div>

            <div class="benefit-card">
                <h3 class="benefit-title">منتج مصمم ليناسب السوق</h3>
                <p class="benefit-description">تم تطوير نومو إيديو إكس بطريقة مرنة وقابلة للتخصيص مع واجهات قوية API
                    للتكامل مع تكنولوجيا التعليم.</p>
            </div>

            <div class="benefit-card">
                <h3 class="benefit-title">دعم فني على مدار الساعة</h3>
                <p class="benefit-description">الدعم 24/7 من فريق نومو إيديو إكس هنا دائمًا لتسهيل عليك تسويق منتجاتك
                    وخدماتك بثقة.</p>
            </div>

            <div class="benefit-card">
                <h3 class="benefit-title">تحديثات تلقائية</h3>
                <p class="benefit-description">تلقائيًا تتلقى تحديثات منتظمة وستستلم أحدث التحديثات والتطويرات لنظام
                    نومو
                    إيديو إكس بشكل تلقائي.</p>
            </div>

            <div class="benefit-card">
                <h3 class="benefit-title">عائد استثمار مضمون</h3>
                <p class="benefit-description">حوالي 98% من شركائنا استعادوا استثماراتهم خلال السنة الأولى وتمكنوا من
                    تحقيق أرباح إضافية بدعم من نومو إيديو إكس.</p>
            </div>

            <div class="benefit-card">
                <h3 class="benefit-title">ترخيص مفتوح المصدر تجاري</h3>
                <p class="benefit-description">يوفر نومو إيديو إكس ترخيصًا تجاريًا آمنًا ومفتوحًا جزئيًا يمنحك الحرية
                    الكاملة لتعديل الكود والبناء عليه بحقوق الملكية الفكرية الخاصة بك. 🚀</p>
            </div>
        </div>

        <div class="text-center" style="margin-top: 40px;">
            <a href="#" class="btn btn-primary">كن شريكًا نومو</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta">
    <div class="container">
        <h2>تواصل معنا لنبدأ رحلتك نحو مستقبل رقمي مبتكر ومستدام!</h2>
        <p>منصة تكنولوجية مبتكرة بأحدث التقنيات، فريق دعم فني وخبرة، وتجربة احترافية.</p>
        <div class="cta-buttons">
            <a href="#" class="btn btn-primary">طلب عرض تسعير</a>
            <a href="#" class="btn" style="background-color: white; color: #002d5b; margin-right: 15px;">تواصل مع خدمة
                العملاء</a>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="partners">
    <div class="container">
        <h2 class="section-title">شركاؤنا</h2>
        <p style="text-align: center; margin-bottom: 30px;">نتعاون مع شركات دولية ومحلية رائدة تضمن لك أعلى درجة
            من الجودة لمنتجاتنا عالميًا</p>

        <div class="partners-grid">
            <img src="/api/placeholder/120/50" alt="Oracle" class="partner-logo">
            <img src="/api/placeholder/120/50" alt="Saudi Vision 2030" class="partner-logo">
            <img src="/api/placeholder/120/50" alt="Partner 3" class="partner-logo">
            <img src="/api/placeholder/120/50" alt="Partner 4" class="partner-logo">
            <img src="/api/placeholder/120/50" alt="Partner 5" class="partner-logo">
        </div>

        <div class="text-center" style="margin-top: 30px;">
            <a href="#" class="btn btn-primary">اكتشف المزيد</a>
        </div>
    </div>
</section>

<!-- Whatsapp Button -->
<a href="#" class="whatsapp-btn">
    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.4054 3.5875C18.1607 1.3425 15.1714 0 11.9946 0C5.4375 0 0.106071 5.33125 0.106071 11.8875C0.106071 13.9875 0.648214 16.0312 1.67679 17.8312L0 24L6.30536 22.35C8.03036 23.2875 9.99107 23.775 11.9893 23.775C18.5464 23.775
