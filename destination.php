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
<div class="destinations1">
    <h1 class="heading-title">top destination</h1>
    <div class="box-container1">
        <div class="box1">
            <div class="image">
                <img src="image1.jpg"alt="Bangalore">
            </div>
            <div class="content">
                <h3>bangalore</h3>
                <p> Silicon Valley of India</p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="images2.jpg"alt="Hyderbad">
            </div>
            <div class="content">
                <h3>hyderbad</h3>
                <p> Hyderbad City of Pearls.</p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="images3.jpg" alt="Delhi">
            </div>
            <div class="content">
                <h3>delhi</h3>
                <p> Dildaar Dilli </p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="images4.jpg" alt="Madikeri">
            </div>
            <div class="content">
                <h3>madikeri</h3>
                <p> The Scotland of India</p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="images5.jpg" alt="Kudremukh">
            </div>
            <div class="content">
                <h3>kudremukh</h3>
                <p> The heavens do exist on earth...</p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="images6.jpg" alt="Dandeli">
            </div>
            <div class="content">
                <h3>Dandeli</h3>
                <p> Wild isn't what i expected it to be....</p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="images7.jpg" alt="Mumbai">
            </div>
            <div class="content">
                <h3>mumbai</h3>
                <p> City of dreams </p>
                <a href="book.php" class="btn1">book now</a>
            </div>    
        </div>
        <div class="box1">
            <div class="image">
                <img src="images8.jpg" alt="Mysore">
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
    let boxes = [...document.querySelectorAll('.destinations1 .box-container1 .box1')];
    for (var i = currentItem;i < currentItem + 4;i++){
        boxes[i].style.display ='inline-block';
    }
    currentItem += 4;
    if(currentItem>=boxes.length){
        loadMoreBtn.style.display='none';
    }
}
</script>
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