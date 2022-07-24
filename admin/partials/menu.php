<?php 
    include('../config/constants.php'); 
    include('login-check.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <!--menu section starts-->
    <div class="menu text-center">
        <div class="wrapper">
            <ul>
                <li><a href="../admin/">Home</a></li>
                <li><a href="../admin/manage-admin.php">Admin</a></li>
                <li><a href="../admin/manage-food.php">Food</a></li>
                <li><a href="../admin/manage2-category.php">Category</a></li>
                <li><a href="../admin/manage-gallery.php">Gallery</a></li>
                <li><a href="../admin/manage-chef.php">Chef</a></li>
                <li><a href="../admin/manage-order.php">Orders</a></li>
                <li><a href="../admin/logout.php">Logout</a></li>
            </ul>
        </div>
        
    </div>
    <!--menu section ends-->
