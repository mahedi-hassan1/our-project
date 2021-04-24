<?php

function check_login_user(){

    if(!isset($_SESSION)){

        session_start();
    }

    if(!isset($_SESSION['email'])){

        if (!isset($_SESSION['password'])){

            header('location:login-page.php');
            exit;
        }
    }
}

?>