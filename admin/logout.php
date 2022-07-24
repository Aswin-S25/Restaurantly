<?php
    include('../config/constants.php');

    //1. destroy the session
    session_destroy(); //unset $_session['user]

    header('location:'.SITEURL.'admin/login.php');
?>