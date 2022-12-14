<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stat E-learning Registration</title>

    <link rel="stylesheet" href="./css/styleregistration.css">
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
                        <a href="./index.php">Home</a>
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

                <button class="nav-toggle-btn">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </button>

            </nav>

        </header>

        
                    
                <div class="form regitsration">
                    <header>สมัครสมาชิก</header>

                    <form action="#">

                        <div class="field input-field">
                            <input type="text" placeholder="Enter your email" required>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Enter password" class="password" required>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Confirm password" class="password" required>
                        </div>

                        <div class="field input-field">
                            <input type="text" placeholder="Enter your first name" required>
                        </div>

                        <div class="field input-field">
                            <input type="text" placeholder="Enter your last name" required>
                        </div>

                        <div class="field input-field">
                            <input type="number" placeholder="Enter mobile number" required>
                        </div>

                        <div class="field button-field">
                            <button>กลับ</button>
                        </div>
                        
                        <div class="field button-field">
                            <button>ยืนยัน</button>
                        </div>
                        
                    </form>

                </div>

        </form>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>
