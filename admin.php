<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    
    <!--css link-->
    <link rel="stylesheet" href="./css/styleadmin.css?v=<?php echo time(); ?>">
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
                        <a href="./exam.php">Edit Exam</a>
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
            
             
               
                <div class="lesson-selector">
                  <select>
                    <option value="lesson1">??????????????? 1 ?????????????????????????????????????????????????????????????????????????????????</option>
                    <option value="lesson2">??????????????? 2 ?????????????????????????????????????????????????????????????????????????????????????????????????????????</option>
                    <option value="lesson3">??????????????? 3 ????????????????????????????????????????????????????????????</option>
                  </select>
                </div>
                
              


              <button class="btn btn-primary add">
                <p class="btn-text">????????????????????????????????????</p>
                <span class="square"></span>
              </button>
              <button class="btn btn-primary drop">
                <p class="btn-text">???????????????????????????</p>
                <span class="square"></span>
              </button>
            </div>
      </section>

      <section class="example">

          <div class="videoex">
               <iframe width="854" height="480" src="https://youtube.com/embed//6WdLwsrXTNA" title="Stat"></iframe>
          </div>
          
          <!-- actual upload which is hidden -->
          <input type="file" id="actual-btn" hidden/>

          <!-- our custom upload button -->
          <label for="actual-btn">????????????????????????????????????????????????????????????????????????????????????????????????</label>

          <!-- name of file chosen -->
          <span id="file-chosen">??????????????????????????????????????????????????????</span>
   
      </section>
      

    </div>
    </main>
    <!-- JavaScript -->
    <script src="js/script.js?v=<?php echo time(); ?>"></script>
  </body>
</html>