<!DOCTYPE php>
<php lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>About the Forum</title>
    <link rel="stylesheet" href="css/navbarEE.css">
    <link rel="stylesheet" href="css/footerE.css">
    <link rel="stylesheet" href="css/aboutEE.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
       
      
         /* Mobile Design */
         @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
        }
         .pp{ 
                font-family:'Times New Roman', Times, serif;
                font-size: 30px;
                line-height: 30px;
                font-weight: 400;
                width:100%;
                font: optional;
                padding-left: 200px;
                padding-right: 200px;
  }
  @media (max-width: 768px) {
    .hero-section {
        width: 100%; /* تقليل العرض قليلاً على الشاشات الصغيرة */
        margin: 0 auto; /* محاذاة الصورة في المنتصف */
        text-align: center;

    }
    p.pp{ 
        font-family:'Times New Roman', Times, serif;
        font-size: 15px;
        text-align: center;
      
        padding-left: 0px;
        padding-right: 0px;
        margin-top:-20px ;       
     }
        h1.mb-5{
            font-family: 'Times New Roman', Times, serif;
            font-size: 22px;   
            margin-bottom: 0px;
            padding-top: 70px;
            block-size: auto;
            transition: all 500ms ease;

            }
        h2.mb-5{
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;   
            transition: all 500ms ease;
            }
        
}

        
    </style>
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop>
          <source src="../video/smart.mp4" type="video/mp4">
          Your browser does not support video playback.
        </video>
    <!-- Navigation Bar -->
        <?php include 'navbarE.php'; ?>
        <section class="hero-section">
           
            <br>
            <h1 class="mb-5 text-white">About Us</h1>
            <br>
            <p class="pp"> The Libyan International Smart Cities Forum / About Us 
                     </p>
       
            <br><br>
        
        </section>
        
    </div>

    <!-- Main Content -->
    <main class="main-content">
        

        <div class="features">

            <div class="feature-card">
                <img src="../imgs/13.jpg" alt="High Speed" class="feature-icon" />

            </div>
            <div class="feature-card">
                <h3>About the Forum</h3>
                <p>
                    The Libyan International Forum for Smart Cities
                    is an initiative aimed at developing Libyan cities and transforming them into smart cities. The forum is held periodically and brings together experts and stakeholders from various sectors to discuss challenges and exchange ideas on how to build smart and sustainable cities in Libya.
                    Forum Objectives:
                    
                    Raising awareness about the importance of smart cities: Spreading awareness about the importance of adopting the concept of smart cities in Libya and its positive impact on sustainable development and improving quality of life.
                    Knowledge and experience exchange: Providing a platform for exchanging knowledge and experiences among experts and stakeholders in the field of smart cities from around the world.
                    Encouraging innovation: Promoting innovation in the field of smart cities by showcasing the latest technologies and smart solutions.
                    Building partnerships: Establishing partnerships between the public and private sectors and civil society to develop smart cities in Libya.
                    Developing a strategic vision: Creating a strategic vision for developing smart cities in Libya, including setting priorities and creating the necessary plans and programs to achieve them.
                    Forum Topics:
                    The forum discusses a variety of topics related to smart cities, including:
                    Smart technology and infrastructure: Using modern technology to develop city infrastructure, such as communication networks, energy, and transportation.
                    Sustainability: Achieving sustainable development in cities through the use of renewable energy, waste management, and efficient use of natural resources.
                    Smart economy: Developing the local economy in cities by supporting innovation and entrepreneurship.
                    Smart governance: Improving city management by using technology to provide better services to citizens.
                    Smart community: Building cohesive and active communities in cities by enhancing community participation and providing education and training opportunities.
                    Importance of the Forum:
                    The Libyan International Forum for Smart Cities is an important initiative for developing Libyan cities and keeping up with global advancements in this field. The forum contributes to achieving sustainable development goals and improving the quality of life for citizens in Libya.</p>
            </div>
            
            
           
        </div>
    </main>

    <!-- Footer -->
    <?php include 'footerE.php'?>
    <script src="js/navbarE.js"></script>