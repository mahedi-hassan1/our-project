<?php


include("connection.php");
session_start();

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$country = $_POST['country'];
$division = $_POST['division'];
$zip_code = $_POST['zip_code'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$sql = "insert into user_regi values('$first_name','$last_name','$email','$country','$division','$zip_code','$password','$confirm_password')";
$data = mysqli_query($conn,$sql);

if($data){
    header('location:login-page.php');
}

else{

    echo "error " .$sql . "<br>" .mysqli_error($conn);
}

mysqli_close($conn);

?>