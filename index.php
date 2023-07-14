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
   <div class="main">
    <header>
           <div class="icon">
               <a class="logo"><img src="Images/LogoMakr-0i3dlm.png" height="79" width="130"></a>
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
   </div>
 <section class="Buses">
       <h1>Different Buses Available</h1>
       <p>Choose Your Own Comfort</p>
       <div class="main-carousel">
        <div class="cell"><img src="Images/ksrtc-changanassery-velankanni-express.jpg"></div>
        <div class="cell"><img src="Images/DSC_5186.jpg"></div>
        <div class="cell"><img src="Images/main-qimg-1b56ba46ea32a915dbcfe6ed92fae78f-lq.jpg"></div>
        <div class="cell"><img src="Images/ksrtc-double-decker-bus (1).jpg"></div>
        <div class="cell"><img src="Images/ksrtc-bus-service.jpg"></div>
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
<section class="first">
    <div class="heading">
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
<!-- Booking Section -->
<div class="destinations">
    <h1 class="heading-title">top destination</h1>
    <div class="box-container1">
        <div class="box1">
            <div class="image">
                <img src="Images/image1.jpg"alt="Bangalore">
            </div>
            <div class="content">
                <h3>bangalore</h3>
                <p> Silicon Valley of India</p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="Images/images2.jpg"alt="Hyderbad">
            </div>
            <div class="content">
                <h3>hyderbad</h3>
                <p> Hyderbad City of Pearls.</p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="Images/images3.jpg" alt="Delhi">
            </div>
            <div class="content">
                <h3>delhi</h3>
                <p> Dildaar Dilli </p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="Images/images4.jpg" alt="Madikeri">
            </div>
            <div class="content">
                <h3>madikeri</h3>
                <p> The Scotland of India</p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="Images/images5.jpg" alt="Kudremukh">
            </div>
            <div class="content">
                <h3>kudremukh</h3>
                <p> The heavens do exist on earth...</p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="Images/images6.jpg" alt="Dandeli">
            </div>
            <div class="content">
                <h3>Dandeli</h3>
                <p>Karnataka's Adventure Capital</p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="Images/images7.jpg" alt="Mumbai">
            </div>
            <div class="content">
                <h3>mumbai</h3>
                <p> City of dreams </p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="Images/images8.jpg" alt="Mysore">
            </div>
            <div class="content">
                <h3>mysore</h3>
                <p> Mysore Unforgettable</p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
    </div>
    <div id="load-more">load more</div>
    </div>
    <script>
    let loadMoreBtn=document.querySelector('#load-more');
    let currentItem = 4;

    loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.destinations .box-container1 .box1')];
    for (var i = currentItem;i < currentItem + 4;i++){
        boxes[i].style.display ='inline-block';
    }
    currentItem += 4;
    if(currentItem>=boxes.length){
        loadMoreBtn.style.display='none';
    }
}
    </script>
<div class="heading3">
<h1>about us</h1>
</div>
<!-- About section starts  -->
<section class="about">

<div class="image">
   <img src="Images/abo.jpg" alt="">
</div>

<div class="content">
   <h3>why choose us?</h3>
   <p>Travel and Tousrism is also one of the sectors highly impacted by the Bus Transportation.The Abhi Bus Portal will back you with the best bus facility in the whole country</p>
   <p>We have a skilled and experienced team to advice and serve you with the help of thier knowledge.Best drivers who will make you reach your destination safe and sound</p>
   <div class="icons-container">
      <div class="icons">
         <i class="fas fa-map"></i>
         <span>top destinations</span>
      </div>
      <div class="icons">
         <i class="fas fa-hand-holding-usd"></i>
         <span>affordable price</span>
      </div>
      <div class="icons">
         <i class="fas fa-headset"></i>
         <span>24/7 guide service</span>
      </div>
   </div>
</div>

</section>

<!-- about section ends -->
<!--footer section starts -->
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
