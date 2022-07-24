<?php include('partials/menu.php'); ?>


    <!--main content section starts-->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1>
            <br>
            
            <?php 
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

                if(isset($_SESSION['delete']))
                {
                    echo($_SESSION['delete']);
                    unset($_SESSION['delete']);
                }
                if(isset($_SESSION['update']))
                {
                    echo($_SESSION['update']);
                    unset($_SESSION['update']);
                }
                if(isset($_SESSION['user-not-found']))
                {
                    echo($_SESSION['user-not-found']);
                    unset($_SESSION['user-not-found']);
                }
                if(isset($_SESSION['pwd-not-match']))
                {
                    echo($_SESSION['pwd-not-match']);
                    unset($_SESSION['pwd-not-match']);
                }
                if(isset($_SESSION['pwd-match']))
                {
                    echo($_SESSION['pwd-match']);
                    unset($_SESSION['pwd-match']);
                }
            ?>
            <br><br><br>


            <!--Button to add admin-->
            <a href="add-admin.php" class="btn-primary">Add admin</a>
            <br><br><br>
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>


                <?php
                
                $sql = "SELECT * FROM tbl_admin";
                //Execute the Query

                $res = mysqli_query($conn, $sql);

                //check wheather the uery is executed or not
                if($res == TRUE)
                {
                    $count = mysqli_num_rows($res);//Finction to get all the rows in database

                    $sn = 1; 
                    //check the num of rows
                    if($count>0)
                    {
                        //we have data in database
                        while($rows = mysqli_fetch_assoc($res))
                        {
                            //using while loop to get all the data from the database
                            //And while loop will run as long as we have data in database

                            //Get individuak Data

                            $id = $rows['id'];
                            $full_name = $rows['full_name'];
                            $email = $rows['email'];

                            //display the values in our table
                            ?>

                            <tr>
                                <td><?php echo $sn++ ?></td>
                                <td><?php echo $full_name ?></td>
                                <td><?php echo $email ?></td>
                                <td>
                                    <a href="<?php echo SITEURL;?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                    <a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                                </td>
                            </tr>

                            <?php
                        }
                    }
                    else
                    {
                        //we do not have data in the database
                    }
                }
                ?>
               
            </table>
        </div>
    </div>
    <!--main content section ends-->


   <?php include('partials/footer.php'); ?>