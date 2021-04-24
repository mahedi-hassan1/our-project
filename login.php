<?php

include_once("connection.php");

session_start();

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' and pass='$password'";

    $result = mysqli_query($mysqli,$query);
    $row = mysqli_num_row($result);

    if($row==1){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location:home.php');

    }
    else{
        echo "Error";
    }
}

?>

