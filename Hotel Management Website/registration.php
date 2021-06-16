<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root');

if($con){
    echo"connection sucessful";
}else{
    echo"no connection";
}

mysqli_select_db($con, 'hotelwebsite');

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$q = "select * from signin where name = '$name' && email = '$email' && gender = '$gender' && phone = '$phone' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"duplicate data";
}else{
    $qy = " INSERT INTO `signin` ( `name`, `email`, `gender`, `phone`, `password`) VALUES ('$name', '$email', '$gender', '$phone', '$password')" ;
    mysqli_query($con, $qy);
}

?>