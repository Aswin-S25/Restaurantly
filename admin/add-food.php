<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Food</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
        
            <table class="tbl-30">

                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Title of the Food">
                    </td>
                </tr>

                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description" cols="30" rows="5" placeholder="Description of the Food."></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Price: </td>
                    <td>
                        <input type="number" name="price" min = "0" step="0.01">
                    </td>
                </tr>

                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Category: </td>
                    <td>
                        <select name="category">

                            <?php 
                                //Create PHP Code to display categories from Database
                                //1. CReate SQL to get all active categories from database
                                $sql = "SELECT * FROM tbl_category WHERE active='Yes'";
                                
                                //Executing qUery
                                $res = mysqli_query($conn, $sql);

                                //Count Rows to check whether we have categories or not
                                $count = mysqli_num_rows($res);

                                //IF count is greater than zero, we have categories else we donot have categories
                                if($count>0)
                                {
                                    //WE have categories
                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        //get the details of categories
                                        $id = $row['id'];
                                        $title = $row['title'];

                                        ?>

                                        <option value="<?php echo $id; ?>"><?php echo $title; ?></option>

                                        <?php
                                    }
                                }
                                else
                                {
                                    //WE do not have category
                                    ?>
                                    <option value="0">No Category Found</option>
                                    <?php
                                }
                            

                                //2. Display on Drpopdown
                            ?>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes 
                        <input type="radio" name="featured" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes 
                        <input type="radio" name="active" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Food" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

       <?php
            //check wheather the button is clicked or not
            if(isset($_POST['submit']))
            {
                //echo "clicked";

                //1 get the data from the form
                echo $title = $_POST['title'];
                echo $description = $_POST['description'];
                echo $price = $_POST['price'];
                echo $category = $_POST['category'];

                //check wheather the radio button is clicked or not
                if(isset($_POST['featured']))
                {
                    $featured = $_POST['featured'];
                }
                else
                {
                    $featured = "No";
                }


                if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                {
                    $active = "No";
                }


                //2. upload the image if selected
                //check wheather the select image is clicked orn ot and upload the umage only if the image is selected
                if(isset($_FILES['image']['name']))
                {
                    //get the details of the selected image
                    $image_name = $_FILES['image']['name'];

                    //check wheather the image is selected or not
                    if($image_name != "")
                    {
                        //1. rename the image
                        //get the extension of selected image (jpg, png, gif, etc.) "aswin.jpg"

                        $ext = end(explode('.', $image_name));

                        //create new name for Image
                        $image_name = "Food-Name-".rand(0000, 9999).".".$ext; //New Image Name may be "Food-Name-657.jpg"


                        //2. upload the image
                        //get the src path and destination path

                        //source path is the current location of the image
                        $src = $_FILES['image']['tmp_name'];

                        //Destination path for the image to be upload
                        $dst = "../assets/img/menu/".$image_name;

                        //finally upload the image food image

                        $upload = move_uploaded_file($src, $dst);

                        //check wheather the image is uploaded or not
                        if($upload == false)
                        {
                            //failed to upload the image
                            //Redirect to add food page with error message
                            $_SESSION['upload'] = "<div class='error'>Failed to upload image</div>";
                            header('location:'.SITEURL.'admin/add-food.php');
                            //stop the process
                            die();
                        }
                        
                        
                    }
                }
                else
                {
                    $image_name = "";
                }
                //3. INsert into the database

                //create a sql Query to save or Add food
                $sql2 = "INSERT INTO tbl_food SET
                    title = '$title',
                    description = '$description',
                    price = '$price',
                    image_name = '$image_name',
                    category_id = $category,
                    featured = '$featured',
                    active = '$active'
                    ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //check wheather the data inserted or not

                if($res2 == true)
                {
                    $_SESSION['add'] = "<div class = 'success'>Food Added Successfully</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
                else
                {
                    $_SESSION['add'] = "<div class = 'error'>Failed to add food...</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
                //4. Redirect with message to manage food page
            }
       ?>


    </div>
</div>

<?php include('partials/footer.php'); ?>