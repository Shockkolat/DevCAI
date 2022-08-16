<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Stat E-learning Home</title>

    <!--css link-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media_queries.css">
    <link rel="stylesheet" href="./css/animation.css">
    
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&
    family=Jost:wght@500;600;700;800;900&display=swap" rel="stylesheet">

    
</head>

<body>

    <!--main container-->
    
    <div class="container">
        
        <!--header-->
        <header>

            <nav class="navbar">

                <div class="navbar-brand">
                    <img src="./image/logo.png" alt="Statlearning Logo">
                </div>

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a href="./index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#course">Course</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact">Contact Us</a>
                    </li>

                </ul>

                <button class="btn btn-secondary">
                    <p class="btn-text"><a href="./login.php">ลงชื่อเข้าใช้</a></p>
                    <span class="square"></span>
                </button>

                <button class="btn btn-primary">
                    <p class="btn-text"><a href="./registration.php">สมัครสมาชิกฟรี</a></p>
                    <span class="square"></span>
                </button>

                <button class="nav-toggle-btn">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </button>

            </nav>

        </header>




        <main>
            <!--home section-->

            <section class="home" id="home">

                <div class="deco-shape shape-1">
                    <img src="./image/shape-1.png" alt="art shape" width="70">
                </div>
                <div class="deco-shape shape-2">
                    <img src="./image/shape-2.png" alt="art shape" width="55">
                </div>
                <div class="deco-shape shape-3">
                    <img src="./image/shape-3.png" alt="art shape" width="120">
                </div>
                <div class="deco-shape shape-4">
                    <img src="./image/shape-4.png" alt="art shape" width="30">
                </div>

                <div class="home-left">

                    <p class="section-subtitle">ยินดีต้อนรับสู่คลาสเรียนสถิติของเรา</p> 

                    <h1 class="main-heading">
                        คลาสเรียนจาก
                        <span class="underline-img">ผู้สอนชั้นนำ <img src="./image/banner-line.png" alt="line"></span>
                    </h1>

                    <p class="section text">

                        สถิติ หมายถึง ศาสตร์หรือวิชาที่ว่าด้วยหลักการและระเบียบวิธีทางสถิติ สถิติใน ความหมาย นี้มักเรียกว่า สถิติศาสตร์ (Statistics)

                    </p>

                    <div class="home-btn-group">
                        <button class="btn btn-primary ">
                        <p class="btn-text">Explore Course</p>
                        <span class="square"></span>
                        </button>

                        <button class="btn btn-secondary ">
                        <p class="btn-text">Contact Us</p>
                        <span class="square"></span>
                        </button>
                    </div>


                </div>
                
                <div class="home-right">

                    <div class="img-box">

                        <img src="./image/banner-img-bg.png" alt="colorful background shape" class="background-shape">
                        
                        <img src="./image/banner-img.png" alt="banner image" class="banner-img">

                        <img src="./image/banner-aliment-icon-1.png" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">

                        <img src="./image/banner-aliment-icon-2.png" alt="" class="icon-2 smooth-zigzag-anim-2" width="240">

                        <img src="./image/banner-aliment-icon-3.png" alt="" class="icon-3 smooth-zigzag-anim-3" width="195">
                        
                        <img src="./image/banner-aliment-icon-4.png" alt="" class="icon-4 drop-anim" >
                        
                    </div>

                </div>

            </section>



            <!--course category section-->
            
            <section class="category">
                
                <p class="section-subtitle">หมวดหมู่บทเรียนต่างๆ</p>

                <h2 class="section-title">บทเรียนยอดนิยม</h2>

                <ul class="course-item-group">
                
                    <li class="course-category-item">
                    
                        <div class="wrapper">
                            <img src="./image/course-category-icon-1.png" alt="category icon" 
                            class="category-icon default">
            
                            <img src="./image/course-category-icon-1-w.png" alt="category icon
                            white" class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="catagory-title">
                                <a href="#">Learn Lesson2</a>
                            </h3>

                            <p class="catagory-subtitle">บท2</p>
                        </div>
            
                    </li>

                    <li class="course-category-item">
                    
                        <div class="wrapper">
                            <img src="./image/course-category-icon-2.png" alt="category icon" 
                            class="category-icon default">
            
                            <img src="./image/course-category-icon-2-w.png" alt="category icon
                            white" class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="catagory-title">
                                <a href="#">Learn Lesson3</a>
                            </h3>

                            <p class="catagory-subtitle">บท3</p>
                        </div>
            
                    </li>

                    <li class="course-category-item">
                    
                        <div class="wrapper">
                            <img src="./image/course-category-icon-3.png" alt="category icon" 
                            class="category-icon default">
            
                            <img src="./image/course-category-icon-3-w.png" alt="category icon
                            white" class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="catagory-title">
                                <a href="#">Learn Lesson4</a>
                            </h3>

                            <p class="catagory-subtitle">บท4</p>
                        </div>
            
                    </li>

                    <li class="course-category-item">
                    
                        <div class="wrapper">
                            <img src="./image/course-category-icon-4.png" alt="category icon" 
                            class="category-icon default">
            
                            <img src="./image/course-category-icon-4-w.png" alt="category icon
                            white" class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="catagory-title">
                                <a href="#">Learn Lesson5</a>
                            </h3>

                            <p class="catagory-subtitle">บท5</p>
                        </div>
            
                    </li>

                    <li class="course-category-item">
                    
                        <div class="wrapper">
                            <img src="./image/course-category-icon-5.png" alt="category icon" 
                            class="category-icon default">
            
                            <img src="./image/course-category-icon-5-w.png" alt="category icon
                            white" class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="catagory-title">
                                <a href="#">Learn Lesson6</a>
                            </h3>

                            <p class="catagory-subtitle">บท6</p>
                        </div>
            
                    </li>

                    <li class="course-category-item">
                    
                        <div class="wrapper">
                            <img src="./image/course-category-icon-6.png" alt="category icon" 
                            class="category-icon default">
            
                            <img src="./image/course-category-icon-6-w.png" alt="category icon
                            white" class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="catagory-title">
                                <a href="#">Learn Lesson7</a>
                            </h3>

                            <p class="catagory-subtitle">บท7</p>
                        </div>
            
                    </li>

                </ul>

            
            </section>

            <!--about section-->

     <!--       <section class="about" id="about">

                <div class="about-left">

                    <div class="img-box">
                        <img src="./image/about-img-bg.png" alt="about bg" class="about-bg">

                        <img src="./image/about-img.png" alt="about person" class="about-img">

                        <img src="./image/banner-aliment-icon-1.png" alt="" class="icon-1 smooth-zigzag-anim-1"
                        width="250">

                        <img src="./image/banner-aliment-icon-3.png" alt="" class="icon-2 smooth-zigzag-anim-3"
                        width="195">
                    </div>

                </div>

                <div class="about-right">
                    
                    <p class="section-subtitle">About Us</p>

                    <h2 class="section-title">We have best Online Education</h2>

                    <p class="section-text">
                        พวกเราคือเว็บการสอนวิชาสถิติที่ยอดเยี่ยม และมีผู้สอนที่มากความสามารถ
                    </p>

                    <ul class="about-ul">

                        <li>
                            <ion-icon name="checkmark-circle"></ion-icon>
                            <p>สวัสดีครับ</p>
                        </li>

                        <li>
                            <ion-icon name="checkmark-circle"></ion-icon>
                            <p>สวัสดีครับ</p>
                        </li>

                        <li>
                            <ion-icon name="checkmark-circle"></ion-icon>
                            <p>สวัสดีครับ</p>
                        </li>

                    </ul>

                    <button class="btn btn-primary ">
                    <p class="btn-text">Explore More</p>
                    <span class="square"></span>
                    </button>

                </div>

            </section>
        -->

            <!--course section-->
            <!--<section class="course" id="course">
                <p class="section-subtitle">Our Online Courses</p>
                <h2 class="section-title">Find out Right Online Course For you</h2>
                <div class="course-grid">

                    <div class="course-card">
                        <div class="course-banner">
                            <img src="./image/course-1.jpg" alt="course banner">
                            <div class="course-tag-box">
                                <a href="#" class="badge-tag orange">Business</a>
                                <a href="#" class="badge-tag blue">Marketing</a>
                            </div>
                        </div>

                        <div class="coures-content">

                            <h3 class="card-title">
                                <a href="#">Become product manager learn skills.</a>
                            </h3>
                            <div class="warpper border-bottom">
                                <div class="author">
                                    <img src="./image/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                                    <a href="#" class="author-name">Parada Sarawong</a>
                                </div>
                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <p>5.0 (2k)</p>
                                </div>
                            </div>

                            <div class="warpper">
                                <div class="course-price">$50.00</div>

                                <div class="enrolled">
                                    <div class="icon-user">
                                        <img src="./image/student-icon.png" alt="user icon">
                                    </div>

                                    <p>600k</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-banner">
                            <img src="./image/course-2.jpg" alt="course banner">
                            <div class="course-tag-box">
                                <a href="#" class="badge-tag orange">Business</a>
                                <a href="#" class="badge-tag blue">Marketing</a>
                            </div>
                        </div>

                        <div class="coures-content">

                            <h3 class="card-title">
                                <a href="#">Fashion and luxury fashion in a changing.</a>
                            </h3>
                            <div class="warpper border-bottom">
                                <div class="author">
                                    <img src="./image/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                                    <a href="#" class="author-name">Narawit Choeychom</a>
                                </div>
                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <p>4.7 (5k)</p>
                                </div>
                            </div>

                            <div class="warpper">
                                <div class="course-price">$80.00</div>

                                <div class="enrolled">
                                    <div class="icon-user">
                                        <img src="./image/student-icon.png" alt="user icon">
                                    </div>

                                    <p>545k</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-banner">
                            <img src="./image/course-3.jpg" alt="course banner">
                            <div class="course-tag-box">
                                <a href="#" class="badge-tag orange">Business</a>
                                <a href="#" class="badge-tag blue">Marketing</a>
                            </div>
                        </div>

                        <div class="coures-content">

                            <h3 class="card-title">
                                <a href="#">learning to write as a professional.</a>
                            </h3>
                            <div class="warpper border-bottom">
                                <div class="author">
                                    <img src="./image/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                                    <a href="#" class="author-name">Lillian wals</a>
                                </div>
                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <p>4.3 (3k)</p>
                                </div>
                            </div>

                            <div class="warpper">
                                <div class="course-price">$50.00</div>

                                <div class="enrolled">
                                    <div class="icon-user">
                                        <img src="./image/student-icon.png" alt="user icon">
                                    </div>

                                    <p>345k</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-banner">
                            <img src="./image/course-4.jpg" alt="course banner">
                            <div class="course-tag-box">
                                <a href="#" class="badge-tag orange">Business</a>
                                <a href="#" class="badge-tag blue">Marketing</a>
                            </div>
                        </div>

                        <div class="coures-content">

                            <h3 class="card-title">
                                <a href="#">Improving accessibility of your markdown.</a>
                            </h3>
                            <div class="warpper border-bottom">
                                <div class="author">
                                    <img src="./image/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                                    <a href="#" class="author-name">Lillian wals</a>
                                </div>
                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <p>4.8 (3.9k)</p>
                                </div>
                            </div>

                            <div class="warpper">
                                <div class="course-price">$49.90</div>

                                <div class="enrolled">
                                    <div class="icon-user">
                                        <img src="./image/student-icon.png" alt="user icon">
                                    </div>

                                    <p>205k</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-banner">
                            <img src="./image/course-5.jpg" alt="course banner">
                            <div class="course-tag-box">
                                <a href="#" class="badge-tag orange">Business</a>
                                <a href="#" class="badge-tag blue">Marketing</a>
                            </div>
                        </div>

                        <div class="coures-content">

                            <h3 class="card-title">
                                <a href="#">master query in a s hort peroid of time.</a>
                            </h3>
                            <div class="warpper border-bottom">
                                <div class="author">
                                    <img src="./image/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                                    <a href="#" class="author-name">Lillian wals</a>
                                </div>
                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <p>4.5 (3.9k)</p>
                                </div>
                            </div>

                            <div class="warpper">
                                <div class="course-price">$40.90</div>

                                <div class="enrolled">
                                    <div class="icon-user">
                                        <img src="./image/student-icon.png" alt="user icon">
                                    </div>

                                    <p>199k</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-banner">
                            <img src="./image/course-6.jpg" alt="course banner">
                            <div class="course-tag-box">
                                <a href="#" class="badge-tag orange">Business</a>
                                <a href="#" class="badge-tag blue">Marketing</a>
                            </div>
                        </div>

                        <div class="coures-content">

                            <h3 class="card-title">
                                <a href="#">wefwef  wefweyeh wefwefwf wefwehhs.</a>
                            </h3>
                            <div class="warpper border-bottom">
                                <div class="author">
                                    <img src="./image/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                                    <a href="#" class="author-name">Lillian wals</a>
                                </div>
                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <p>4.9 (2.9k)</p>
                                </div>
                            </div>

                            <div class="warpper">
                                <div class="course-price">$20.90</div>

                                <div class="enrolled">
                                    <div class="icon-user">
                                        <img src="./image/student-icon.png" alt="user icon">
                                    </div>

                                    <p>201k</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary ">
                    <p class="btn-text">View All Course</p>
                    <span class="square"></span>
                    </button>

            </section>-->

            <!--Event section-->

        <!--    <section class="event">

                <div class="event-left">

                    <div class="event-banner">
                        
                        <img src="./image/event-img.jpg" alt="event banner" class="banner-img">
                    </div>

                    <button class="play smooth-zigzag-anim-1">
                        <div class="play-icon pulse-anim">
                            <ion-icon name="play-circle"></ion-icon>
                        </div>

                        <p>Watch us</p>
                    </button>

                </div>

                <div class="event-right">

                    <p class="section-subtitle">Our Events</p>

                    <h2 class="section-title">Join Our Upcomimg Events</h2>

                    <div class="event-card-group">

                        <div class="event-card">

                            <div class="content-left">
                                <p class="day">28</p>
                                <p class="month">Feb, 2022</p>
                            </div>

                            <div class="content-right">
                                <div class="schedule">
                                    <p class="time">10:30am To 2:30pm</p>
                                    <p class="place">Thailand</p>
                                </div>

                                <a href="#" class="event-name">Business creativity workshops</a>
                            </div>
                        </div>

                        <div class="event-card">

                            <div class="content-left">
                                <p class="day">15</p>
                                <p class="month">Mar, 2022</p>
                            </div>

                            <div class="content-right">
                                <div class="schedule">
                                    <p class="time">10:30am To 2:30pm</p>
                                    <p class="place">Thailand</p>
                                </div>

                                <a href="#" class="event-name">Atreet Perfornamce: Call for Art.</a>
                            </div>
                        </div>

                        <div class="event-card">

                            <div class="content-left">
                                <p class="day">20</p>
                                <p class="month">May, 2022</p>
                            </div>

                            <div class="content-right">
                                <div class="schedule">
                                    <p class="time">10:30am To 2:30pm</p>
                                    <p class="place">Thailand</p>
                                </div>

                                <a href="#" class="event-name">Digital tranformation conference.</a>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </section>

            <!--Features section-->

        <!--    <section class="features">

                <div class="features-left">

                    <p class="section-subtitle">Core features</p>

                    <h2 class="section-title">See What Our Mission Are</h2>

                    <ul>

                        <li class="features-item">
                            <div class="item-icon-box blue">
                                <img src="./image/feature-icon-1.png" alt="feature icon">
                            </div>

                            <div class="warpper">

                                <h3 class="item-title">Student Life</h3>

                                <p class="item-text">Nulla vestibulum pretium ljnvosjnklshfkkshfkhskhsbbsgjkabdadiwgf</p>
                            
                                
                            </div>
                        </li>

                        <li class="features-item">
                            <div class="item-icon-box pink">
                                <img src="./image/feature-icon-2.png" alt="feature icon">
                            </div>

                            <div class="warpper">

                                <h3 class="item-title">Best Online Class</h3>

                                <p class="item-text">Nulla vestibulum pretium ljnvosjnklshfkkshfkhskhsbbsgjkabdadiwgf</p>
                            
                                
                            </div>
                        </li>

                        <li class="features-item">
                            <div class="item-icon-box purple">
                                <img src="./image/feature-icon-3.png" alt="feature icon">
                            </div>

                            <div class="warpper">

                                <h3 class="item-title">24*7 Program</h3>

                                <p class="item-text">Nulla vestibulum pretium ljnvosjnklshfkkshfkhskhsbbsgjkabdadiwgf</p>
                            
                                
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="features-right">
                    <img src="./image/coure-features-img.jpg" alt="core features image">
                </div>
            </section>-->

            <!--instrusctor section-->
            
        <!--    <section class="instructor">

                <p class="section-subtitle">Best Coach</p>

                <h2 class="section-title">Our Expert Instructor</h2>

                <div class="instructor-grid">

                    <div class="instructor-card">

                        <div class="instructor-img-box">
                            <img src="./image/instructor-1.jpg" alt="instructor">
                        
                            <div class="social-link">
                                <a href="a" class="facebook">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>  
                                
                                <a href="a" class="instagram">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>  
                                

                                <a href="a" class="twitter">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>  
                            </div>
                        </div>
                        <h4 class="instructor-name">Louis Sullivan</h4>

                        <p class="instructor-title">Instructor</p>
                    </div>

                    <div class="instructor-card">

                        <div class="instructor-img-box">
                            <img src="./image/instructor-2.jpg" alt="instructor camden david">
                        
                            <div class="social-link">
                                <a href="a" class="facebook">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>  
                                
                                <a href="a" class="instagram">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>  
                                

                                <a href="a" class="twitter">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>  
                            </div>
                        </div>
                        <h4 class="instructor-name">Camden David</h4>

                        <p class="instructor-title">Instructor</p>
                    </div>

                    <div class="instructor-card">

                        <div class="instructor-img-box">
                            <img src="./image/instructor-3.jpg" alt="instructor Fiona Dean">
                        
                            <div class="social-link">
                                <a href="a" class="facebook">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>  
                                
                                <a href="a" class="instagram">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>  
                                

                                <a href="a" class="twitter">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>  
                            </div>
                        </div>
                        <h4 class="instructor-name">Fiona Dean</h4>

                        <p class="instructor-title">Instructor</p>
                    </div>

                    <div class="instructor-card">

                        <div class="instructor-img-box">
                            <img src="./image/instructor-4.jpg" alt="instructor cheris sosa">
                        
                            <div class="social-link">
                                <a href="a" class="facebook">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>  
                                
                                <a href="a" class="instagram">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>  
                                

                                <a href="a" class="twitter">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>  
                            </div>
                        </div>
                        <h4 class="instructor-name">Cheris Sosa</h4>

                        <p class="instructor-title">Instructor</p>
                    </div>

                </div>

            </section>

            <!--Testimonails-->

        <!--    <section class="testimonials">

                <div class="testimonials-left">

                    <p class="section-subtitle">Testimonial</p>
                    
                    <h2 class="section-title">What Our client Says About Us</h2>
                    
                    <p class="section-text">
                        slknvlkzshhglhrghhrgvmslmlksdmvlsdmdslvmlsdmvmdslmvdlsvmlsdmvlsmvdklmsdklvmksldmvlksdmvklmskldvmklsvmsldvmm
                        sdvmksdvlknslknvlnsdlvnlsndvl
                        sdkvmkmsdvmsmv;
                        skdvm; ความหมาย
                    </p>

                </div>

                <div class="testimonails-right">

                    <div class="testimonial-card">

                        <img src="./image/quote.png" alt="quote icon" class="quote-img">
                        
                        <p class="testimonials-text">
                            ๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔
                            ๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔
                            ๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔
                            ๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔๔
                        </p>

                        <div class="testimonial-client">

                            <div class="client-img-box">
                                <img src="./image/client.jpg" alt="client christine rose">
                            </div>

                            <div class="client-detail">
                                <h4 class="client-name">Christine Rose</h4>

                                <p class="client-title">Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Blog-->

        <!--    <section class="blog" id="blog">

                <p class="section-subtitle">Our Blog</p>
                    
                <h2 class="section-title">Lastest Blog & News</h2>

                <div class="blog-grid">

                    <div class="blog-card">

                        <div class="blog-banner-box">
                            <img src="./image/blog-1.jpg" alt="blog banner">
                        </div>

                        <div class="blog-content">

                            <h3 class="blog-title">
                                <a href="#">Proin feugiat tortor non neque eleifend.</a>
                            </h3>

                            <div class="wrapper">

                                <div class="blog-publish-date">
                                    <img src="./image/calendar.png" alt="calendar icon">

                                    <a href="#">07 Jan, 2022</a>
                                </div>

                                <div class="blog-comment">
                                    <img src="./image/comment.png" alt="comment icon">

                                    <a href="#">3 Comments</a>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="blog-card">

                        <div class="blog-banner-box">
                            <img src="./image/blog-2.jpg" alt="blog banner">
                        </div>

                        <div class="blog-content">

                            <h3 class="blog-title">
                                <a href="#">Proin feugiat tortor non neque eleifend.</a>
                            </h3>

                            <div class="wrapper">

                                <div class="blog-publish-date">
                                    <img src="./image/calendar.png" alt="calendar icon">

                                    <a href="#">04 Jan, 2022</a>
                                </div>

                                <div class="blog-comment">
                                    <img src="./image/comment.png" alt="comment icon">

                                    <a href="#">10 Comments</a>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="blog-card">

                        <div class="blog-banner-box">
                            <img src="./image/blog-3.jpg" alt="blog banner">
                        </div>

                        <div class="blog-content">

                            <h3 class="blog-title">
                                <a href="#">Proin feugiat tortor non neque eleifend.</a>
                            </h3>

                            <div class="wrapper">

                                <div class="blog-publish-date">
                                    <img src="./image/calendar.png" alt="calendar icon">

                                    <a href="#">01 Jan, 2022</a>
                                </div>

                                <div class="blog-comment">
                                    <img src="./image/comment.png" alt="comment icon">

                                    <a href="#">5 Comments</a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <!--Contact-->

         <!--   <section class="contact">

                <div class="contact-card" id="contact">
                    <img src="./image/cta-bg-img.png" alt="shape" class="contact-card-bg">
                
                <h2>Start Your Best Online Class With Us</h2>
               
                <button class="btn btn-primary ">
                    <p class="btn-text">Contact Us</p>
                    <span class="square"></span>
                </button>
                </div>

                
            </section>
-->
            <!--Footer-->

        <!--    <footer>
                
                <div class="footer-grid">

                    <div class="grid-item">

                        <div class="footer-logo">
                            <img src="./image/logo-footer.png" alt="educator logo white">
                        </div>

                        <p class="footer-text">

                            footerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr
                        </p>

                        <div class="social-link">
                            <a href="#">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </div>

                    </div>

                    <ul class="grid-item">

                        <h4 class="item-heading">Our Link</h4>

                        <li class="list-item">
                            <a href="#home">Home</a>
                        </li>

                        <li class="list-item">
                            <a href="#about">About Us</a>
                        </li>

                        <li class="list-item">
                            <a href="#course">Courses</a>
                        </li>

                        <li class="list-item">
                            <a href="#blog">Blog</a>
                        </li>

                        <li class="list-item">
                            <a href="#contact">Contac Us</a>
                        </li>

                    </ul>

                    <ul class="grid-item">

                        <h4 class="item-heading">Other Link</h4>

                        <li class="list-item">
                            <a href="#">Instructor</a>
                        </li>

                        <li class="list-item">
                            <a href="#">FAQ</a>
                        </li>

                        <li class="list-item">
                            <a href="#">Event</a>
                        </li>

                        <li class="list-item">
                            <a href="#">Privacy Policy</a>
                        </li>

                        <li class="list-item">
                            <a href="#">Term & Condition</a>
                        </li>

                    </ul>

                    <div class="grid-item">

                        <h4 class="item-heading">Subscribe Now</h4>

                        <div class="wrapper">
                            <input type="text" name="subscribe" placeholder="Email Address">
                            <button class="send-btn">
                                <ion-icon name="paper-plane"></ion-icon>
                            </button>
                        </div>

                    </div>

                </div>

                <p class="copyright">
                    Copyright @ 2022 <a href="#">Stat Learning</a>All right reserved.
                </p>

            </footer>

        </main>

    </div>

-->

    <!--js-->

    <script src="./js/script.js"></script>



    <!--ionicon-->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>