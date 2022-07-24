<?php 

    //start session
    session_start();
    
    //create constants to store non repeating values

    define('SITEURL', 'http://localhost/Restaurantly/');
    define('LOCALHOST', 'localhost');
    define('DB_EMAIL', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');
    $conn = mysqli_connect(LOCALHOST, DB_EMAIL, DB_PASSWORD) or die(mysqli_error($conn));//database connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));//selecting database
    
    
?>