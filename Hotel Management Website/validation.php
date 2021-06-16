<?php

session_start();


$con = mysqli_connect('localhost', 'root');

if($con){
    echo"connection sucessful";
}else{
    echo"no connection";
}

mysqli_select_db($con, 'hotelwebsite');

$name = $_POST['name'];
$password = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){

    $_SESSION['username'] = $name;
    header('location:homepage.php');

}else{
    header('location:login.php');
}

?>