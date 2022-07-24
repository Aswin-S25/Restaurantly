<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br><br>

        <?php 
            if(isset($_SESSION['add'])) //checeking wheather the session is set or not
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter your name">
                    </td>
                </tr>
                <tr>
                    <td>username: </td>
                    <td>
                        <input type="email" name="email" placeholder="Your email">
                    </td>
                </tr>

                <tr>
                    <td>Password:  </td>
                    <td>
                        <input type="password" name="password" placeholder="ypur Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php'); ?>

<?php
    //processs the value form and save it in database
    //check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        //button clicked
        //echo "button clicked";

        //1. get data from form
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']); //password encryption with MD5

        //2. sql query to save the data into database

        $sql = "INSERT INTO tbl_admin SET
            full_name = '$full_name',
            email = '$email',
            password = '$password'
        ";
        //3. Executing Query and saving Data into Database
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        //4. Select wheather the (Query is executed) data is inserted or not
        if($res == TRUE)
        {
            //Data Inserted
            //echo "Data inserted";
            //Create a session Variabel to Display Message
            $_SESSION['add'] = "Admin Added successfully";
            //redirect page to manage admin
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            //Failed to insert data
            //echo "Failed to insert data";
            //Create a session Variabel to Display Message
            $_SESSION['add'] = "Failed to Add admin";
            //redirect page to manage admin
            header("location:".SITEURL.'admin/add-admin.php');
        }
    }
    
?>