<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Hotel Management</title>
</head>
<body>

    <!--Header section-->
    <header>
        <div class="logo"><span style="color: white";>Welcome</span> <?php echo $_SESSION['username']?></div>

        <div class="links">
            <a href="#">Home</a>
            <a href="#offer">Offer</a>
            <a href="#service">Service</a>
            <a href="#room">Rooms</a>
            <a href="logout.php"> Logout  <i class="fa fa-sign-out" style="font-size: 30px;"></i></a>

        </div>
    </header>

    <!--Home section-->
    <div class="home">
        <p class="para">Find Deals on Hotels, Rooms and much more...<p>
        <p class="mini">Get best rooms at best price</p>

        <p class="hotel">HOTEL MANAGEMENT</p>
        <p class="subhotel">we know what you love</p>

        <div class="learnmore" id="learnmore">
            <i class="fa fa-times" onclick="closefunction()"></i>
            <img class="image" src="photo/image.jpg" alt="" style="width: 400px; height: 200px;">
            <h3 style="font-size: 28px; padding-top: 30px; padding-bottom: 20px; text-align: center;">Learn more...</h3>
            <p style="font-size: 20px; margin-left: 10px; margin-right: 10px; text-align: center;">Welcome to our Hotel Management website. Here you get best facilities and pricies.</p>
            <p style="font-size: 20px; margin-left: 10px; margin-right: 10px; text-align: center;">1. We offers first stay then pay service to our costumers.</p>
            <p style="font-size: 20px; margin-left: 10px; margin-right: 10px; text-align: center;">2. We provides a complete internet coverage and 24 hours restaurants service.</p>
        </div>

        <div class="button">
            <button class="learn" id="learn" onclick="myfunction()">learn more</button>
        </div>

        
        
        <!--scroll slide feature-->
        <div class="updown">
            <a href="#offer"><div class="down"><i class="fa fa-chevron-down"></i></div></a>
        </div>
    </div>
    
   

<!-- offer section -->    

<div class="offer">
    <a name="offer"></a>
    <p style="font-size: 30px; color: orangered; padding-top: 50px;">EXPERIENCE A GOOD STAY, ENJOY A FANTASTIC OFFERS</p>
    <p style="font-size: 20px; color: black; padding-top: 20px; padding-bottom: 70px;">FIND OUR FRIENDLY WELCOME RECEPTION</p>

    <div class="block">

        <div class="insideblock">
            <i class="fa fa-bed" id="symbol"></i>
            <p class="heading">MASTER BEDROOMS</p>
        </div>

        <div class="insideblock">
            <i class="fa fa-cubes" id="symbol"></i>
            <p class="heading">SEA VIEW BALCONY</p>
        </div>

        <div class="insideblock">
            <i class="fa fa-coffee" id="symbol"></i>
            <p class="heading">LARGE CAFE</p>
        </div>

        <div class="insideblock">
            <i class="fa fa-wifi" id="symbol"></i>
            <p class="heading">WIFI COVERAGE</p>
        </div>

    </div>


</div>


<!--service section starts-->

<div class="service">
    <a name="service"></a>

    <h1>OUR SERVICE</h1>
    <p>SERVICES WE OFFERS</p>

    <div class="servicebox">

        <div class="servicebox1">

            <i class="fa fa-credit-card"></i>
            <p style="color: yellow; font-size: 32px;">Stay First, Pay After</p>
            <p class="servicepara">As we say stay first then pay after which means that customer will stay first and can avail the faclity and then he can pay after ensuring the facility we provide.</p>
            <ul style=" color: white; font-size: 20px;">    
                <li>Decorated room </li>
                </li>proper air conditioned, Private balcony</li>
            </ul>

        </div>

        <div class="servicebox1">

            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" style="color: yellow; margin-top: 30px; margin-bottom: 15px;">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
              </svg>
            <p style="color: yellow; font-size: 32px;">24 Hours Restaurants</p>
            <p class="servicepara">We provide 24 hour services this means that we take care of our customer 24 hour and we provide them all the services without any delay with nonstop 24 hour sercices .</p>
            <ul style=" color: white; font-size: 20px;">    
                <li>24 hours room service</li>
                </li> service management</li>
                
            </ul>

        </div>

        </div>

    </div>



</div>


<!--room section starts-->

<div class="room">
    <a name="room"></a>

    <h1>Room And Rates</h1>
    <p>Book Rooms At Best Price</p>

    <div class="roomblock">
        <div class="roombox">
            <div class="roomshell">
                <img src="photo/room2.jpg" alt="" width="100%" height="55%">
                <h2>Delux Room</h2>
                <p>10,000 Rs/-</p>
                <div class="book"><a href="welcome.php">Book Now</a></div>
            </div>
        </div>

        <div class="roombox">
            <div class="roomshell">
                <img src="photo/room1.jpg" alt="" width="100%" height="55%">
                <h2>Luxuary Room</h2>
                <p>15,000 Rs/-</p>
                <div class="book"><a href="welcome.php">Book Now</a></div>
            </div>
        </div>

        <div class="roombox">
            <div class="roomshell">
                <img src="photo/room3.jpg" alt="" width="100%" height="55%">
                <h2>Guest Room</h2>
                <p>10,000 Rs/-</p>
                <div class="book"><a href="welcome.php">Book Now</a></div>
            </div>
        </div>

        <div class="roombox">
            <div class="roomshell">
                <img src="photo/room4.jpg" alt="" width="100%" height="55%">
                <h2>Single Room</h2>
                <p>5,000 Rs/-</p>
                <div class="book"><a href="welcome.php">Book Now</a></div>
            </div>
        </div>

    </div>
                                 
</div>



<!--footer section starts-->
<footer>
    <p>&copy; 2020 HOTEL MANAGEMENT . All Rights Reserved | Design by AAKASH SHARMA .</p>
</footer>



<script>
    function myfunction() {
        document.getElementById("learnmore").style.display='block';
        
    }
    function closefunction() {
        document.getElementById("learnmore").style.display='none';
        
    }


</script>


</body>
</html>