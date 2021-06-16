<?php

session_start();
header('location:index.php');


$con = mysqli_connect('localhost', 'root');

if($con){
    echo"connection sucessful";
}else{
    echo"no connection";
}

mysqli_select_db($con, 'hotelwebsite');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$query = $_POST['query'];

$q = "select * from contact where name = '$name' && phone = '$phone' && email = '$email' && query = '$query' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"duplicate data";
}else{
    $qy = "INSERT INTO `contact` ( `name`, `phone`, `email`, `query`) VALUES ('$name', '$phone', '$email', '$query')" ;
    mysqli_query($con, $qy);
}

?>