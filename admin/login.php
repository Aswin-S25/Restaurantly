<?php include('../config/constants.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <div class="login">
        <h1 class="text-center">Admin Login</h1>
        <br><br>

        <?php 
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            if(isset( $_SESSION['no-login-message']))
            {
                echo  $_SESSION['no-login-message'];
                unset ($_SESSION['no-login-message']);
            }
        ?>

            <br><br>
            <!--Login form start here-->
            <form action="" method="post" class="text-center">
                Email Id: : <br>
                <input type="email"  name="email" placeholder="Enter email"> <br><br>
                Password: <br>
                <input type="password" name="password" placeholder="Enter password"><br><br>

                <input type="submit" name="submit" value="login" class="btn-primary">
                <br>
            </form>
             <!--Login form ends here-->

    </div>
</body>
</html>

<?php
    //check wheather the submit button is clicked or not
    if(isset($_POST['submit']))
    {
        //1. get the data
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //2. sql to check wheather the user with username and password availabel or not
        $sql = "SELECT * FROM tbl_admin WHERE email = '$email' AND password = '$password'";
        $res = mysqli_query($conn, $sql);

        //4.count to check wheather the user exist or not

        $count = mysqli_num_rows($res);

        if($count == 1)
        {
            $_SESSION['login'] = "<div class='success'>Login successfully</div>";
            $_SESSION['user'] = $email;//to check wheather the user is login or not
            header('location:'.SITEURL.'admin/');
        }
        else
        {
            $_SESSION['login'] = "<div class='error text-center'>Login Failed</div>";
            header('location:'.SITEURL.'admin/login.php');
        }

    }
?>