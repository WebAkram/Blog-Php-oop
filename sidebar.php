 <?php require_once 'config.php';
    session_start();
    if (!isset($_SESSION['userid'])) {
        header("location:login.php");
    }
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
     <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


 </head>

 <body onload="myfunction()">

     <div class="side-bar" id="side-bar">
         <div class="nav-header">
             <img src="<?php echo $_SESSION['image']; ?>" alt="">
             <span></span>
             <h2><?php echo $_SESSION['name']; ?></h2>
             <i class='bx bx-chevron-left' id="icon"></i>
         </div>
         <nav>
             <ul>
                 <li>
                     <i class='bx bxs-dashboard'></i>
                     <a class="text-decoration-none hover-overlay" href="dashboard.php">dashboard</a>
                     <i class='bx bx-slider-alt'></i>
                 </li>
                 <li>
                     <i class='bx bx-folder'></i>
                     <a class="text-decoration-none hover-overlay " href="blogsection.php">blog section</a>
                 </li>
                 <li>
                     <i class='bx bx-star'></i>
                     <a class="text-decoration-none hover-overlay" href="popularblog.php">Popular Posts</a>
                 </li>
                 <li>
                     <i class='bx bx-bar-chart-square'></i>
                     <a class="text-decoration-none hover-overlay" href="dashboard.php">data analyst</a>
                 </li>
                 <li>
                     <i class='bx bx-envelope'></i>
                     <a class="text-decoration-none hover-overlay" href="dashboard.php">category</a>
                 </li>
                 <li>
                     <i class='bx bx-calendar'></i>
                     <a class="text-decoration-none hover-overlay" href="dashboard.php">calendar</a>
                     <i class='bx bx-plus-circle'></i>
                 </li>
                 <li>
                     <i class='bx bx-bell'></i>
                     <a class="text-decoration-none  hover-overlay" href="dashboard.php">notification</a>
                     <span class="dot"></span>
                 </li>

             </ul>
         </nav>
         <hr>
         <div class="settings">
             <nav>
                 <ul>
                     <li>
                         <i class='bx bx-cog'></i>
                         <span>settings</span>
                     </li>
                     <li>
                         <i class='bx bx-help-circle'></i>
                         <span>help</span>
                     </li>
                     <li>
                         <i class='bx bx-log-out'></i>
                         <a class="logout" href="logout.php"><span>logout</span></a>
                     </li>
                 </ul>
             </nav>
         </div>
     </div>

     <!-- preloader -->
     <div class="preloader">
         <img src="loadingimage/Spinner-0.5s-157px.gif" alt="">
     </div>
     <script>
         setTimeout(function() {
             let abc = document.getElementsByClassName("preloader")[0];

             abc.style.display = "none";

         }, 1000);
     </script>






     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

 </body>

 </html>