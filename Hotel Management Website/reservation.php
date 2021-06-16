<?php

session_start();
header('location:welcome.php');

$con = mysqli_connect('localhost', 'root');

if($con){
    echo"connection sucessful";
}else{
    echo"no connection";
}

mysqli_select_db($con, 'hotelwebsite');

$title = $_POST['title'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$nationality = $_POST['nationality'];
$roomtype = $_POST['roomtype'];
$bedtype = $_POST['bedtype'];
$totalroom = $_POST['totalroom'];
$meal = $_POST['meal'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

$q = "select * from reservation where title = '$title' && firstname = '$firstname' && lastname = '$lastname' && email = '$email' && phone = '$phone' && nationality = '$nationality'  && roomtype = '$roomtype'  && bedtype = '$bedtype'  && totalroom = '$totalroom'  && meal = '$meal'  && checkin = '$checkin'  && checkout = '$checkout' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"duplicate data";
}else{

    $qy = " INSERT INTO `reservation` (`title`, `firstname`, `lastname`, `email`, `phone`, `nationality`, `roomtype`, `bedtype`, `totalroom`, `meal`, `checkin`, `checkout`) VALUES ('$title', '$firstname', '$lastname', '$email', '$phone', '$nationality', '$roomtype', '$bedtype', '$totalroom', '$meal', '$checkin', '$checkout');" ;
    mysqli_query($con, $qy);
}


?>