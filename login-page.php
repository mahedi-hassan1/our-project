




<!DOCTYPE html>
<html>



<?php

include_once("connection.php");

session_start();

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user_regi WHERE email='$email' and password='$password'";

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


    <head>
        
        <title>Log in</title>
        <link rel="stylesheet" type="text/css" href="login-page.css"/>
		<script src="https://kit.fontawesome.com/bce4f2171d.js" crossorigin="anonymous"></script>




        






    </head>
    <body>
        <form action="" method="POST" >
		<div class="log-in">
			<h2>Log in</h2>
            <h3><i class="fas fa-user"></i> user name</h3>

            <input type="email" placeholder="user name,email" value="" name="email"/>
			
			<div id="email_err">put your email</div>
			
            <h3><i class="fas fa-unlock"></i> password</h3>
            
            <input type="password" placeholder="enter your password" value="" name="password"/>
			
			<div id="pass_err">put your password</div>
			
			<br><br>
            <input type="submit" value="log in" placeholder="log in"/>
			<br>
			<a href="#">Find lost password</a>
			<br>
			<a href="#">Creat a new account</a>

        </div>
        </form>
		
		
		
		
		
    </body>
    <html>