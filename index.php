<!DOCTYPE php>
<php lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>الرئيسية</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbarr.css">
    <link rel="stylesheet" href="css/indexs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    @media (max-width: 768px) {
    .hero-section {
        width: 100%; /* تقليل العرض قليلاً على الشاشات الصغيرة */
        margin: 0 auto; /* محاذاة الصورة في المنتصف */
        text-align: center;

    }
    p.pp{ 
        font-family:'Times New Roman', Times, serif;
        font-size: 10px;
        padding-left: 0px;
        padding-right: 0px;
        margin-top:-20px ;        
    }
        h1.mb-5{
            font-family: 'Times New Roman', Times, serif;
            font-size: 22px;   
            margin-bottom: -50px;
            block-size: auto;
            transition: all 500ms ease;
            }
        h2.mb-5{
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;   
            margin-bottom: -5px;
            transition: all 500ms ease;
        }  

}
</style>
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop>
          <source src="video/smart.mp4" type="video/mp4">
          متصفحك لا يدعم تشغيل الفيديو.
        </video>
        
    <!-- شريط التنقل -->
    <?php include 'navbar.php'; ?>

        <section class="hero-section">
            <br>
            <h1 class="mb-5">المنتدى الليبي الدولي للمدن الذكية</h1>
            <br><br>
            <h2 class="mb-5 text-white">جودة الحياة</h2>
            <h2 class="mb-5 text-white">حياة أسهل</h2>
            <br><br>
        <p class="pp"> المنتدى هو منصة عالمية للمدن الذكية في ليبيا، يجمع نخبة من الخبراء من جميع أنحاء العالم في مجال بناء المدن الذكية والذكاء الاصطناعي لمناقشة مواضيع هامة تتعلق بمستقبل هذه المدن وتأثيرها على المجتمعات البشرية. الهدف هو تشكيل رؤية طموحة لمستقبل المدن باستخدام الحلول الذكية ووضع مبادئ أساسية تدعم خطط التنمية الحضرية لتحقيق تنمية حضرية مستدامة تعزز جودة الحياة.
        </p>
        </section>
    </div> 
    <!-- المحتوى الرئيسي -->
    <main class="main-content">
        <div class="features">
            <div class="feature-card">
                <img src="imgs/2.jpg" alt="سرعة فائقة" class="feature-icon" />
                <h3>ميسرى فخري عيسى</h3>
                <p>المدير العام للمنتدى الليبي الدولي للمدن الذكية</p>
            </div>
            <div class="feature-card">
                <img src="imgs/2.jpg" alt="سرعة فائقة" class="feature-icon" />
                <h3>ميسرى فخري عيسى</h3>
                <p>المدير العام للمنتدى الليبي الدولي للمدن الذكية</p>
            </div>
            <div class="feature-card">
                <img src="imgs/2.jpg" alt="سرعة فائقة" class="feature-icon" />
                <h3>ميسرى فخري عيسى</h3>
                <p>المدير العام للمنتدى الليبي الدولي للمدن الذكية</p>
            </div>
            <div class="feature-card">
                <img src="imgs/2.jpg" alt="سرعة فائقة" class="feature-icon" />
                <h3>ميسرى فخري عيسى</h3>
                <p>المدير العام للمنتدى الليبي الدولي للمدن الذكية</p>
            </div>
        </div>
    </main>
   <?php include 'footer.php';?>
    <script src="js/navbar.js"></script>  
    </body>
</php>

</body>
</html>