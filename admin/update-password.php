<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>change Password</h1>
        <br><br>

        <?php
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
            }
        ?>

        <form action="" method="post">
            <table class="tbl-30">
                <tr>
                    <td>current password</td>
                    <td>
                        <input type="password" placeholder="current password" name="current_password">
                    </td>
                </tr>

                <tr>
                    <td>new password</td>
                    <td>
                        <input type="password" name="new_password" id="" placeholder="new password">
                    </td>
                </tr>

                <tr>
                    <td>confirm password</td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="confirm_password" id="">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="change password" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php

            //check wheather the submit button is clicked or not
            if(isset($_POST['submit']))
            {
                //1. get the data from form
                $id = $_POST['id'];
                $current_password = md5($_POST['current_password']);
                $new_password = md5($_POST['new_password']);
                $confirm_password = md5($_POST['confirm_password']);

                //2. check wheather the user with current id and password exist or not

                $sql = "SELECT * FROM tbl_admin WHERE id = '$id' AND password = '$current_password'";

                ///3. execute the Query

                $res = mysqli_query($conn, $sql);

                if($res == true)
                {
                    //check wheather the data is available or not
                    $count = mysqli_num_rows($res);

                    if($count == 1)
                    {
                        //user exist and password can be changed

                        //check wheather the new password and confirm is match or not
                        if($new_password == $confirm_password)
                        {
                            //update password
                            
                            $sql2 = "UPDATE tbl_admin SET
                                password = '$new_password'
                                WHERE id = $id
                            ";

                            //execute the Query
                            $res2 = mysqli_query($conn, $sql2);

                            if($res2 == true)
                            {
                                $_SESSION['pwd-match'] = "<div class = 'success'>Password changed successfully</div>";
                                header('location:'.SITEURL.'admin/manage-admin.php');
                            }
                            else
                            {
                                $_SESSION['pwd-match'] = "<div class = 'error'>Failed to change password</div>";
                                header('location:'.SITEURL.'admin/manage-admin.php');
                            }

                        }
                        else
                        {
                            //redirect to manage admin.php
                            $_SESSION['pwd-not-match'] = "<div class = 'error'>Password not match</div>";
                            header('location:'.SITEURL.'admin/manage-admin.php');

                        }
                    }
                    else
                    {
                        $_SESSION['user-not-found'] = "<div class = 'error'>User not found</div>";
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                }
            }

?>

<?php include('partials/footer.php'); ?>