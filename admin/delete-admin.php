<?php

    //include constants.php file ghere

    include('../config/constants.php');

    //1. get the id of admin to be deleted
    $id = $_GET['id'];


    //2. Create SQL Query to delete admin
    $sql = "DELETE FROM tbl_admin WHERE id = $id";

    //execute the Query
    $res = mysqli_query($conn, $sql);

    //chech wheather the query executed successfully or not

    if($res == TRUE)
    {
        //echo "admin deleted";

        //create a section variable to display message
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully</div> ";
        //redirect to manage admin page
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        //echo "admin not delted";
        $_SESSION['delete'] = "<div class='error'>Failed to delete Admin</div> ";
        header('location:'.SITEURL.'admin/manage-admin.php');

    }

    //3. redirect to manage admin page with message (either successful or failed)
     
?>  