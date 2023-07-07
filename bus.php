<?php
session_start();
include("connection.php");
include("functions.php");

$user_data=check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bus Portal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <header>
           <div class="icon">
               <a class="logo"><img src="LogoMakr-0i3dlm.png" height="79" width="130"></a>
           </div>
               <nav class="navbar">
                   <a href="index.php">DASHBOARD</a>
                   <a href="bus.php">BUS</a>
                   <a href="seat.php">SEAT</a>
                   <a href="destination.php">DESTINATONS</a>
                   <a href="about.php">ABOUT</a>
                   <a href="logout.php">LOGOUT</a>
</nav>
            <div class="search">
           <p>hi ,<?php echo $user_data['user_name'];?> </p>
           </div>
    </header>
<section class="Buses">
       <h1 class=bus2>Different Buses Available</h1>
       <p>Choose Your Own Comfort</p>
       <div class="main-carousel">
        <div class="cell"><img src="ksrtc-changanassery-velankanni-express.jpg"></div>
        <div class="cell"><img src="DSC_5186.jpg"></div>
        <div class="cell"><img src="main-qimg-1b56ba46ea32a915dbcfe6ed92fae78f-lq.jpg"></div>
        <div class="cell"><img src="ksrtc-double-decker-bus (1).jpg"></div>
        <div class="cell"><img src="ksrtc-bus-service.jpg"></div>
  </div>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script type="text/javascript">
      $('.main-carousel').flickity({
          // options
          cellAlign: 'left',
          wrapAround:true,
          freeScroll:true,
        });
  </script>
</section>
<section class="footer">
    <div class="box-container">
      <div class="box">
        <div class="box-col">
            <h3>quick links</h3>
            <ul>
            <li><a href="index.php"><i class="fas fa-angle-right"></i>DASHBOARD</a></li>
            <li><a href="bus.php"><i class="fas fa-angle-right"></i>BUS</a></li>
            <li><a href="seat.php"><i class="fas fa-angle-right"></i>SEAT</a></li>
            <li><a href="destination.php"><i class="fas fa-angle-right"></i>DESTINATIONS</a></li>
            <li><a href="about.php"><i class="fas fa-angle-right"></i>ABOUT</a></li>
    </ul>
        </div>
        <div class="box-col">
            <h3>extra links</h3>
            <ul>
            <li><a href="#"><i class="fas fa-angle-right"></i>ask questions</a></li>
            <li><a href="#"><i class="fas fa-angle-right"></i>about us</a></li>
            <li><a href="#"><i class="fas fa-angle-right"></i>privay policy</a></li>
            <li><a href="#"><i class="fas fa-angle-right"></i>terms of use</a></li>
    </ul>
        </div>
        <div class="box-col">
            <h3>contact info</h3>
            <ul>
            <li><a href="#"><i class="fas fa-phone"></i>+91 9535179492</a></li>
            <li><a href="#"><i class="fas fa-phone"></i>+91 9854213654</a></li>
            <a href="#"><i class="fas fa-envelope"></i>akshaybaliga18@gmail.com</a>
            <li><a href="#"><i class="fas fa-map"></i>Mangalore, India-575003</a></li>
    </ul>
        </div>
        <div class="box-col">
            <h3>follow us</h3>
            <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</div>
<div class="credit">created by <span>mr. b akshay baliga</span>|all rights reserved!</div>
</section>
</body>
</html>