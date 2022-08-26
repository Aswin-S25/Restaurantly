<?php include('partials/menu.php'); ?>

    <!--main content section starts-->
    <div class="main-content">
        <div class="wrapper">
            <h1>Admin Dashboard</h1>
            <br><br>
            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

            ?>
            <br><br>
            <div style="background-color: #1EB2F0" class="col-4 text-left">
                <?php
                $sql =  "SELECT * FROM tbl_admin";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res)
                ?>
                <h1><?php echo $count ?></h1>
                <br>
                Admin
                <img  style="width: 121px" class="logo" src="../assets/img/admin.png" alt="">
            </div>


            <div style="background-color: #F47693;" class="col-4 text-left">
                <?php
                    $sql3 =  "SELECT * FROM tbl_food";
                    $res3 = mysqli_query($conn, $sql3);
                    $count3 = mysqli_num_rows($res3)
                ?>
                <h1><?php echo $count3 ?></h1>
                <br>
                Food Items
                <img class="logo" src="../assets/img/food.png" alt="">
            </div>

            <div style="background-color: #FF9A30;" class="col-4 text-left">
                <?php
                    $sql4 = "SELECT * FROM tbl_order";
                    $res4 = mysqli_query($conn, $sql4);
                    $count4 = mysqli_num_rows($res);

                ?>
                <h1><?php echo $count4; ?></h1>
                </br>
                Total Orders
                <img  class="logo" src="../assets/img/order3.png" alt="">
            </div>

            <div style="background-color: #00CDEC;" class="col-4 text-left">
                    
                    <?php 
                        //Creat SQL Query to Get Total Revenue Generated
                        //Aggregate Function in SQL
                        $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                        //Execute the Query
                        $res4 = mysqli_query($conn, $sql4);

                        //Get the VAlue
                        $row4 = mysqli_fetch_assoc($res4);
                        
                        //GEt the Total REvenue
                        $total_revenue = $row4['Total'];

                    ?>

                    <h1>₹<?php echo $total_revenue; ?></h1>
                    <br />
                    Revenue
                    <img class="logo" src="../assets/img/income.png" alt="">

                </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!--main content section ends-->

<?php include('partials/footer.php'); ?>
    