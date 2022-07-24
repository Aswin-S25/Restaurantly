<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>

        <br><br>
        <?php
            //1. get id of selected admin
            $id = $_GET['id'];


            //2. create sql Query
            $sql = "SELECT * FROM tbl_admin WHERE id=$id";

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            if($res == true)
            {
                $count = mysqli_num_rows($res);

                //chech wheather the admin data is availble or not
                if($count == 1)
                {
                    //echo "Admin Available";
                    $row = mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $email = $row['email'];

                }
                else
                {
                    header('location'.SITEURL.'admin/manage-admin.php');

                }
            }



        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name</td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
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
       // echo "button clicked";
       //get all the values from form to update

      echo $id = $_GET['id'];
       echo $full_name = $_POST['full_name'];
       echo $email = $_POST['email'];


       //create a sql query to update admin
        $sql = "UPDATE tbl_admin SET
            full_name = '$full_name',
            email = '$email'
            WHERE id = '$id'
        ";
       //execute the Query
       $res = mysqli_query($conn, $sql);

       if($res == true)
       {
            $_SESSION['update'] = "<div class = 'success'>admin update successfully</div>";
            header('location:'.SITEURL.'admin/manage-admin.php');
       }
       else
       {
        $_SESSION['update'] = "<div class = 'error'>failed to update admin</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
       }
    }
    

    
    
    

       

       

?>


<?php include('partials/footer.php'); ?>
