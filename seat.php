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
    <section class="first">
    <div class="heading1">
        <h1>Available Seats</h1>
    </div>
  <div class="bus-seats">
       <label>Select a Bus</label>
       <select id="bus">
           <option value="220">Vaibhav(Rs 220)</option>
           <option value="250">Airavat(Rs 250)</option>
           <option value="180">Rajahamsa(Rs 180)</option>
           <option value="80">Nagara Sarige(Rs 80)</option>
           <option value="60">Gramantara Sarige(Rs 60)</option>
       </select>
</div>
<ul class="showcase">
    <li>
        <div class="seat"></div>
        <small>Available</small>
    </li>
    <li>
        <div class="seat selected"></div>
            <small>Selected</small>
        </div>
    </li>
    <li>
        <div class="seat sold"></div>
            <small>Sold</small>
        </div>
    </li>
</ul>
</div>
<div class="container">
    <div class="WindShield"></div>
    <div class="row">
        <div class="driver"></div>
    </div>
    <div class="row">
    <div class="seat"></div>
    <div class="seat"></div>
    <div class="seat"></div>
    <div class="seat"></div>
    <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>
    <div class="row">
    <div class="seat"></div>
    <div class="seat"></div>
    <div class="seat"></div>
    <div class="seat"></div>
    <div class="seat"></div>
    </div>
    <div class="row">
    <div class="seat sold"></div>
    <div class="seat"></div>
    <div class="seat"></div>
    <div class="seat"></div>
    <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
    </div>
    <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        </div>
    </div>
</div>
<p class="text">
    You have selected <span id="count">0</span> seat for a price of RS.<span id="total">0</span>
</p>
   <script src="script.js"></script>
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