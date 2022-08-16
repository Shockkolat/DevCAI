<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    
    <!--css link-->
    <link rel="stylesheet" href="./css/styleadmin.css">
    <link rel="stylesheet" href="./css/media_queries.css">
    <link rel="stylesheet" href="./css/animation.css">
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&
    family=Jost:wght@500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">

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
                    <p class="btn-text"><a href="./login.html">ลงชื่อเข้าใช้</a></p>
                    <span class="square"></span>
                </button>

                <button class="btn btn-primary">
                    <p class="btn-text"><a href="./registration.html">สมัครสมาชิกฟรี</a></p>
                    <span class="square"></span>
                </button>

                <button class="nav-toggle-btn">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </button>

            </nav>

        </header>

        
        <section class="features">
            <div class="features-left">
    
              <h2 class="section-title">Admin</h2>
              
              <ul class="features-button">
                <li class="features-item">
                  <div class="item-icon-box blue">
                    <img src="./image/narawit.png" class="picteacher" />
                  </div>
      
                  <div class="warpper">
                    <h3 class="item-title">Narawit Choeychom</h3>
                  </div>
                </li>
      
                
              </ul>
            </div>
      
            <div class="features-right">
              <img src="./image/staticimg.png" alt="core features image" />
              <button class="btn btn-primary add">
                <p class="btn-text">เพิ่มเนื้อหา</p>
                <span class="square"></span>
              </button>
              <button class="btn btn-primary drop">
                <p class="btn-text">ลบเนื้อหา</p>
                <span class="square"></span>
              </button>
            </div>
          </section>


    </div>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>