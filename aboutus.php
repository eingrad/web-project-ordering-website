<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 
?>
<head>
<title>About Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animsition.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.main.css" rel="stylesheet"> 
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

body {font-family: "Poppins", sans-serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>

<header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/logo.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Menu <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="aboutus.php">About Us <span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Signup</a> </li>';
							}
						else
							{

									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>
        </header>
<br>
<br>

<div class="w3-content" style="max-width:1100px">


  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="images/img/bg.jpg" class="w3-round w3-image w3-opacity-min" alt="" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Murni</h1><br>
      <h5 class="w3-center">Sell Fried chicken since 1889</h5>
      <br>
      <p class="w3-large">Murni Fried Chicken, founded by Mr. Arif, Helmi, Burhan, and Ishraqi, 
        is a beloved culinary destination known for its mouth-watering fried chicken. Established with 
        a passion for delivering exceptional taste and quality, our restaurant has become a favorite 
        among locals and visitors alike.</p>
        <br>
      <p class="w3-large">At Murni Fried Chicken, we pride ourselves on using the finest 
        ingredients and traditional recipes, ensuring every bite is a delightful experience. Additionally, 
        we offer a convenient delivery service, ensuring that you can enjoy our mouth-watering dishes from the comfort of your home.</p>
        <br>
        <p class="w3-large">Join us to 
        savor the rich flavors and warm hospitality that have made Murni Fried Chicken a household name.<p>
    </div>
  </div>
  
  <hr>
  

  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Team</h1><br><br><br><br><br><br>
      <h4>Founder 1</h4>
      <p class="w3-text-grey">Muhammad Ishraqi bin Mohd Rizal</p><br>
    
      <h4>Founder 2</h4>
      <p class="w3-text-grey">Muhammad Helmi bin Osman</p><br>
    
      <h4>Founder 3</h4>
      <p class="w3-text-grey">Burhanuddin Madani bin Ahmad Shukri</p><br>
    
      <h4>Founder 4</h4>
      <p class="w3-text-grey">Muhammad Arif bin Othman</p><br>
      
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="images/img/bg2.png" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>


  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>At Murni Fried Chicken, we offer full-service delivery for any occasion, large or small. We understand your needs and are 
        dedicated to delivering food that satisfies the highest criteria in both appearance and taste. 
        Do not hesitate to contact us for your next meal.</p>
    <p class="w3-text-blue-grey w3-large"><b>Lot 22, Jalan Hujung Simpang, 72100, Batu Pahat, Johor.</b></p>
    <p>You can also contact us by phone 00553123-2323 or email murnichickenglobal@business.com.</p>
  </div>
</div>

<footer style="background-color: #131A25;">
    <div class="container p-4">

      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Copyright Murni Fried Chicken:
      <a class="text-dark" href="#">MurniFriedChicken.com</a>
    </div>
  </footer>

<!-- ----------------------------------------- -->

  <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>

</body>
</html>