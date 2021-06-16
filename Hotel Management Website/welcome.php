<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"> <link rel="stylesheet" href="welcome.css">
    <title>Book Reservation</title>
</head>
<body>
<div class="header">
<h2>welcome<span><?php echo $_SESSION['username']?></span></h2>
<a href="logout.php">Logout <i class="fa fa-sign-out" style="font-size: 30px;"></i></a>
</div>

<div class="reservation">
    <h1>RESERVATION</h1>
    <hr>
</div>
<form action="reservation.php" method="POST">

<div class="maintable">

    <div class="table1">
        <h2>PERSONAL INFORMATION</h2>

        <h3>Title*</h3>

        <select name="title" required>
            <option value="" selected disabled></option>
            <option value="Dr.">Dr.</option>
            <option value="Miss.">Miss.</option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Prof.">Prof.</option>
        </select>


        <h3>First Name*</h3>
         <input type="text" name="firstname" placeholder="enter first name" required>
        
         <h3>Last Name*</h3>
         <input type="text" name="lastname" placeholder="enter last name" required>
            
         <h3>Email*</h3>
         <input type="email" name="email" placeholder="enter email" required>

         <h3>Phone No.*</h3>
         <input type="tel" name="phone" placeholder="enter phone no." required>

         <h3>Nationality*</h3>
          <span> Indian </span> <input type="radio" name="nationality" value="Indian" required>
          <span>Non-Indian</span> <input type="radio" name="nationality" value="Non-Indian" required>

         

    </div>

    <div class="table2">
        <h2>RESERVATION INFORMATION</h2>

        <h3>Type of room*</h3>
        <select name="roomtype" required>
            <option value="" selected disabled></option>
            <option value="Superior Room">Superior Room</option>
            <option value="Delux Room">Delux Room</option>
            <option value="Guest Room">Guest Room</option>
            <option value="Single Room">Single Room</option>
            
        </select>

        <h3>Bedding Type*</h3>
        <select name="bedtype" required>
            <option value="" selected disabled></option>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
            <option value="Quad">Quad</option>
            <option value="None">None</option>
        </select>

        <h3>No. of rooms*</h3>
        <select name="totalroom" required>
            <option value="" selected disabled></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
           
        </select>

        <h3>Meal plan</h3>
        <select name="meal">
            <option value="" selected disabled></option>
            <option value="Room only">Room only</option>
            <option value="Break-fast">Break-fast</option>
            <option value="Half-board">Half-board</option>
            <option value="Full-board">Full-board</option>

        </select>

        <h3>Check-in Date*</h3>
        <input type="date" name="checkin" required>

        <h3>Check-out Date*</h3>
        <input type="date" name="checkout" required>

    </div>

</div>

<input type="submit" value="Submit">
</form>

</body>
</html>