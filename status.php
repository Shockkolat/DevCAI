<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>

    <!--css link-->
    <link rel="stylesheet" href="./css/stylestatus.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="./css/media_queries.css" />
    <link rel="stylesheet" href="./css/animation.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&
family=Jost:wght@500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
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
                        <a href="./admin.php">Edit Lesson</a>
                    </li>
                    <li class="nav-item">
                        <a href="./studentlist.php">Students List</a>
                    </li>
                    <li class="nav-item">
                        <a href="./message.php">Talk with Student</a>
                    </li>
                    <li class="nav-item">
                        <a href="./status.php">Course Status</a>
                    </li>
                    <li class="nav-item">
                        <a href="./document.php">Edit Document</a>
                    </li>
                    <li class="nav-item">
                        <a href="./editexam.php">Edit Exam</a>
                    </li>

                </ul>



                <button class="nav-toggle-btn">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </button>

            </nav>

        </header>
    
        <main>

            <section class="main-section">
                <!--background and shape-->
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
            </section>

        </main>
    </div>
    <!-- JavaScript -->
    <script src="js/script.js?v=<?php echo time(); ?>"></script>
</body>
</html>