<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/index.css">
  <title>Hotel Dashboard</title>
</head>
<body>

<div class="block">
    <header>

        <div class="main">
            <p>HOTEL <span>DASHBOARD</span> </p>
        
        </div>

        <div class="link">
            <a href="#" onclick="myopen()">Contact-us</a>
            <a href="login.php" >Log-In</a>
            <a href="signup.php" >Sign-Up</a>
         </div>

    </header>

    <div class="maincontact">
    <div class="contact" id="contact">
    <i class="fa fa-times" onclick="myclose()"></i>

        <h2>Contact Us</h2>
        <p> Lets Get In Touch</p>
        <form action="contact.php" method="POST">

        <span>Name :</span>
        <input type="text" placeholder="enter your name" name="name" required><br>

        <span>Phone no :</span>
        <input type="tel" placeholder="enter your phone" name="phone" required><br>

        <span>E-mail :</span>
        <input type="email" placeholder="enter your email" name="email" required><br>

        <span>Query box :</span><br>
        <textarea name="query" cols="30" rows="30" placeholder="enter your query" required></textarea><br>
        <input type="submit" value="Submit">

        </form>

    </div>
</div>

<div class="menu">
    <h3>Hotel Management <span>Dashboard</span></h3>
   
    <p>Please Login To Book Your Hotel Room and spend Quality Holiday with us.</p>
   
    <div class="notice">
        <div class="notice1">
        <h2>Features You Get :</h2>
        <ul>
            <li>Best Rooms at cheap Prices.</li>
            <li>Get 24 hours Restaurant facility.</li>
            <li>Book your hotels at best place.</li>
            <li>Get upto 50% OFF on your first booking.</li>
            <li>Get a High Speed Wi-Fi Coverage on Evey Booking.</li>
            <li>Get Special Discount On Special Events.</li>
        </ul>
        </div>
        <div class="notice2">
            <p>Contact Info :</p>
        <i class="fa fa-phone"></i><span> +91-000-0000-000</span><br>
        <i class="fa fa-envelope"></i><span>abc123@gmail.com</span>

        </div>

    </div>

    
    
</div>

</div>

<footer>
&copy; 2020 HOTEL MANAGEMENT . All Rights Reserved | Design by AAKASH SHARMA .
</footer>


<script>
function myopen(){
    document.getElementById("contact").style.display="block";
}

function myclose(){
    document.getElementById("contact").style.display="none";
}


</script>

</body>
</html>