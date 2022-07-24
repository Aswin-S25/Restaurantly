<?php

    //authorisation-access control
    //check whether the user is logged in or not
    if(!isset($_SESSION['user']))
    {
        //user if not logged in
        //redirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error'>Please login to access admin panel</div>";
        header('location:'.SITEURL.'admin/login.php');
    }
?>