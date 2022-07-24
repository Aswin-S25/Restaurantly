<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Photos</h1>

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
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
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
                        $dst = "../assets/img/gallery/".$image_name;

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
                $sql2 = "INSERT INTO tbl_gallery SET
                    image_name = '$image_name',
                    active = '$active'
                    ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //check wheather the data inserted or not

                if($res2 == true)
                {
                    $_SESSION['add'] = "<div class = 'success'>Photo Added Successfully</div>";
                    header('location:'.SITEURL.'admin/manage-gallery.php');
                }
                else
                {
                    $_SESSION['add'] = "<div class = 'error'>Failed to add Photo...</div>";
                    header('location:'.SITEURL.'admin/manage-gallery.php');
                }
                //4. Redirect with message to manage food page
            }
       ?>


    </div>
</div>

<?php include('partials/footer.php'); ?>