<?php include('partials/menu.php') ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food Orders</h1>
        <br><br><br>

        <?php
            if(isset($_SESSION['update']))
            {
                echo($_SESSION['update']);
                unset($_SESSION['update']);
            }
        ?>



        <table class="tbl-full">
            <tr>
                <th width="8%">#</th>
                <th width="8%">Order Date</th>
                <th width="8%">Food</th>
                <th width="8%">Price</th>
                <th width="8%">Qty</th>
                <th width="8%">Total</th>
                <th width="8%">Status</th>
                <th width="8%">Customer</th>
                <th width="8%">Contact</th>
                <th width="8%">Email</th>
                <th width="8%">Address</th>
                <th width="8%">Actions</th>
            </tr>

            <?php 

                $sql = "SELECT * FROM tbl_order ORDER BY id DESC LIMIT 7";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);

                $sn = 1;
                if($count > 0)
                {
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $id = $row['id'];
                        $food = $row['food'];
                        $price = $row['price'];
                        $qty = $row['qty'];
                        $total = $row['total'];
                        $order_date = $row['order_date'];
                        $status = $row['status'];
                        $customer_id = $row['customer_id'];
                   
                        $sql = "SELECT * FROM tbl_customer WHERE id = '$customer_id'";
                        $res1 = mysqli_query($conn, $sql);
                        $count1 = mysqli_num_rows($res);
                        if($count1 > 0)
                        {
                            $row1 = mysqli_fetch_assoc($res1);
                            $customer_name = $row1['customer_name'];
                            $customer_contact = $row1['customer_contact'];
                            $customer_email = $row1['customer_email'];
                            $customer_address = $row1['customer_address'];
                        }
                        
                        ?>
                            <tr>
                                <td><?php echo  $sn++;?></td>
                                <td><?php echo $order_date; ?></td>
                                <td><?php echo $food; ?></td>
                                <td><?php echo '$'.$total; ?></td>
                                <td><?php echo $qty; ?></td>
                                <td><?php echo '$' .$total; ?></td>
                                
                                <td>
                                    <?php 
                                        //ordered, on delivery, delivered, cancelled
                                        if($status == "Ordered")
                                        {
                                            echo"<label style = 'color:#ffd500';> $status </label>";
                                        }
                                        elseif($status == "On Delivery")
                                        {
                                            echo"<label style='color:orange;'> $status </label>";
                                        }
                                        elseif($status == "Delivered")
                                        {
                                            echo"<label style='color:green;'> $status </label>";
                                        }
                                        elseif($status == "Cancelled")
                                        {
                                            echo"<label style='color:red;'> $status </label>";
                                        }
                                    ?>
                                </td>

                                <td><?php echo $customer_name; ?></td>
                                <td><?php echo $customer_contact; ?></td>
                                <td><?php echo $customer_email; ?></td>
                                <td><?php echo $customer_address; ?></td>
                                <td>
                                <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>" class="btn-secondary">Update</a>
                                </td>

                            </tr>
                        <?php
                    }
                }
                else
                {
                    echo "<tr><td colspan='12' class='error'>Orders not Available</td></tr>";
                }
            ?>

            
            
        </table>
    </div>
</div>


<?php include('partials/footer.php') ?>