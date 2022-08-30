<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ti Amo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/gallery/La Boom (2) (1).png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!--font awesome-->
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <span>canteenmanagement.cms@gmail.com</span>
      </div>

      <div class="languages d-none d-md-flex fa-sm align-items-center">
        <ul>
          <li><a href="#"><i class="bi bi-twitter "></i></a></li>
          <li><a href="#"><i class="bi bi-facebook"></i></a></li>
          <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
          <li><a href="#"><i class="bi bi-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <img style="width: 70px; height: 70px; margin-left: 5px;" class="logosa" src="assets/img/gallery/La Boom (2) (1).png" alt="">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href="index.html">Ti Amo</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <!--<a href="login.html" class="book-a-table-btn scrollto d-none d-lg-flex">Login / Sign Up</a>-->

    </div>
    <?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>
  </header><!-- End Header -->
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
       
          <h1>WE'RE <span>Ti AMO </span>CANTEENO</h1>
          <h2>Delivering great food for more than 18 years!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#contact" class="btn-book animated fadeInUp scrollto">Contact Us</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

 <!-- ======= About Section ======= -->
 <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>WELCOME TO TI AMO CANTEENO</h3>
            <p class="fst-italic">
            If you are looking for good food and faster service , Then no doubt this is the right place!
            We are been delivering happiness for more than 18 years! We provide a wide variety of dishes which
            will match almost all tastebuds!
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Customer satifaction and good food are our main aim.</li>
              <li><i class="bi bi-check-circle"></i> All our food is freshly prepared on a daily basis ensuring that you 
              receive only the finest cuisine ,delicious to taste. Our food not only tastes good it looks wonderful as
               well..</li>
              <li><i class="bi bi-check-circle"></i> Our staff understand that this is your day and that we need to be polite and courteous. 
              We strive for excellence both in the quality of our food and in our interaction with you.</li>
            </ul>
            <p>
              Through this virtual platform of TI AMO we are providing our customers to take a glance at the wide
              variety of cusines we are offering and also provide an extra feature to place order for the food item that
              they wish to do.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Restaurant</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <img style="width: 100px;" src="http://demo.exptheme.com/laboom/wp-content/uploads/2017/06/fancy1.png" alt="">
              <h4>Fresh Dishes</h4>
              <p>We do not compromise with the quality of food that we are offering.
                We provide only fresh food.
              </p>
            </div>
          </div>

         

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>02</span>
              <img style="width: 140px;" src="http://demo.exptheme.com/laboom/wp-content/uploads/2017/06/fancy3.png" alt="">
              <h4>Well Service</h4>
              <p>Customer's happiness is our happiness. So we provide a great service to our customers.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <img style="width: 125px;" src="http://demo.exptheme.com/laboom/wp-content/uploads/2017/06/fancy4.png" alt="">
              <h4>Fast Delivery</h4>
              <p>We give total respect to our customer's time so we are here to provide food deliveries 
                within no time!
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <form action="./order.php" method="POST">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
            <li data-filter="*" class="filter-active">All</li>
            <!-- php section star here for adding category-->
            <?php

              $sql = "SELECT * FROM tbl_category WHERE active = 'Yes' AND featured = 'Yes' ORDER BY id";
              $res = mysqli_query($conn, $sql);
              $count = mysqli_num_rows($res);
              $n = 0;
              $arr = [];
              if($count > 0)
              {
                while($row = mysqli_fetch_assoc($res))
                {
                  //get the values like id, title
                  $id = $row['id'];
                  $title = $row['title'];
                  $n++; 
                  $arr[$n] = $title;
                  ?>
                  <li data-filter=".filter-<?php echo $title ?>"><?php echo $title ?></li>
                  <?php
                }
              }
            
            ?>
            </ul>
            
            
            
            </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          <?php

          $sql2 = "SELECT * FROM tbl_food WHERE active = 'Yes' AND featured = 'Yes'";
          $res2 = mysqli_query($conn, $sql2);
          $count2 = mysqli_num_rows($res2);
          if($count2 > 0)
          {
            while($row = mysqli_fetch_assoc($res2))
            {
              //get the values like id, title
              $id = $row['id'];
              $title_food = $row['title'];
              $price = $row['price'];
              $description = $row['description'];
              $image_name = $row['image_name'];
              $category_id = $row['category_id']
              
                  ?>
                  
                    <div class="col-lg-6 menu-item filter-<?php echo $arr[$category_id] ?>">
                      <img src="assets/img/menu/<?php echo $image_name ?>" class="menu-img" alt="">
                      <div class="menu-content">
                        <a href="#"><?php echo $title_food ?></a><span>₹<?php echo $price ?></span>
                      </div>
                      <div class="menu-ingredients">
                        <?php echo $description ?>
                      </div>
                      <div class="menu-order">
                        <button class="btn-order" style="margin: 2% 4%; border-radius:10px; background-color:#cda45e; border-style: none;"><a style=" color:#fff;" href="order.php?food_id=<?php echo $id; ?>">Oder now</a></button>
                      </div>
                    </div>
                  <?php
            }
          }
          ?>
          
         
        </div>

      </div>
      </form>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Dragon Chicken</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Beef Chilly</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Schezwan Noodles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Chicken Barbecue</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Biriyani</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Dragon chicken</h3>
                    <p class="fst-italic">Dragon chicken is a popular Indo-Chinese Chicken Recipe</p>
                    <p>Thin long strips of chicken breast are marinated & the deep fried. It is then
                      toasted with cashews,veggies, & yummy sauces. Serve it as a starter or side dish with fried rice.
                    </p>
                  </div>


                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/dra2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Beef Chilly</h3>
                    <p class="fst-italic">Chilly beef is one of our signaturte dishes. It is a dish which is having a huge demand</p>
                    <p>Crispy Chilli Beef is a fried shredded beef steak tossed in sweet, spicy and savoury homemade sweet sauce. 
                      This recipe is a popular Chinese takeaway style shredded beef strips with a delicious sweet chilli kick.This is made up of rice vinegar, dark soy sauce, caster sugar, ketchup and sweet chilli sauce along with the 
                      main ingredient beef.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/beef2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>


              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Schezwan Chicken Noodles</h3>
                    <p class="fst-italic">Schezwan noodles recipe is made with the spicy schezwan sauce and Hakka Noodles is made with soy sauce</p>
                    <p>Schezwan noodles is an immensly popular Indo Chinese Dish served in our restuarant. These are the most flavourful, spicy and hot Noodles
                      made using Schezwan sauce.
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>


              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Chicken Brbeque</h3>
                    <p class="fst-italic">Barbecue chicken consists of chicken parts or entire chickens that are barbecued, grilled or smoked</p>
                    <p>There are many global and regional preparation techniques and cooking styles. Barbecue chicken is often seasoned or coated in a spice rub, barbecue sauce, or both</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/barb2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>


              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Special Biriyani</h3>
                    <p class="fst-italic">Biryani is a mixed rice dish originating among the royal khansamas of the durbar of Old Delhi, under the Mughal Empire, during the late 16th century of the then Mughal Court</p>
                    <p>Biryani is one of the most popular dishes in South Asia, as well as among the diaspora from the region. Similar dishes are also prepared in other parts of the world such as in Iraq, Thailand, Singapore and Malaysia.[3] Biryani is the single most-ordered dish on Indian online food ordering and delivery services.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/biri2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Organize Your Events in our Restaurant</p>
        </div>

        <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span>₹15000/-</span></p>
                  </div>
                  <p class="fst-italic">
                    Bithday is one of the auspicious day in one's life. So make it a memorable one by hosting
                    it in our restaurant. 
                  Here we provide the following :
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> A wide open space suitable for outdoor events or programmes</li>
                    <li><i class="bi bi-check-circled"></i> Open play area for kids.</li>
                    <li><i class="bi bi-check-circled"></i> Along with the space , we also provide some of our signature
                    dishes which will be included in the package. .</li>
                  </ul>
                  <p>
                    Once a day is booked , the whole property will be available to the customers and they can conduct or arrange 
                    any programs as they wish and thus they can make their day a wonderful one! 

                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p><span>₹20000/-</span></p>
                  </div>
                  <p class="fst-italic">
                    Having fun with our beloved ones is always what we all dream for . So next time when
                    you think of hosting private parties TI AMO should be your first choice! 
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> We provide all the necessary arrangements for hosting a private party.</li>
                    <li><i class="bi bi-check-circled"></i> We do have a well expereienced event management group to 
                    arrange all the events exceptionally well.</li>
                    <li><i class="bi bi-check-circled"></i>Once a party is hosted here ,it will be remembered forever .</li>
                  </ul>
                  <p>
                    
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6"> <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>₹7000/-</span></p>
                  </div>
                  <p class="fst-italic">
                    Be any kind of Parties. Ti Amo provides the perfect place to host your any kind of parties.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i>Customise your party </li>
                    <li><i class="bi bi-check-circled"></i>Provide us the ideas you have and we will find a way to implement it</li>
                    <li><i class="bi bi-check-circled"></i>Our team will help to make the event as you wished it in your mind</li>
                  </ul>
                  <p>
                   So whatever be the nature of the party, We are here to provide a best experience to our customers.
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">


        <!-- php section for adding gallery -->

        <?php 
        $sql3 = "SELECT * FROM tbl_gallery WHERE  active = 'Yes' ORDER BY id";
        $res3 = mysqli_query($conn, $sql3);
        $count3 = mysqli_num_rows($res3);

        if($count3 > 0)
        {
          while($row = mysqli_fetch_assoc($res3))
          {
            //get the value image
            $image_name = $row['image_name'];
            ?>
            <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/<?php echo $image_name ?>" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/<?php echo $image_name ?>" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <?php
          }
        }
          ?>

          
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">
        
        <!-- php for chef session-->
        <?php 
        $sql4 = "SELECT * FROM tbl_chef WHERE active = 'Yes' ORDER BY id";
        $res4 = mysqli_query($conn, $sql4);
        $count4 = mysqli_num_rows($res4);
        $delay = 100;
        if($count4 > 0)
        {
          while($row = mysqli_fetch_assoc($res4))
          {
            $fullname = $row['fullname'];
            $position = $row['position'];
            $image_name = $row['image_name'];
            ?>
                <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="<?php echo $delay ?>">
                  <img src="assets/img/chefs/<?php echo $image_name ?>" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4><?php echo $fullname ?></h4>
                      <span><?php echo $position ?></span>
                    </div>
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            $delay += 100;
          }
        }

        ?>
        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.612101969592!2d76.3287598148091!3d10.04883249281771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d45a618515d%3A0x3e2556fd9e3ba073!2sSOE%2CCUSAT!5e0!3m2!1sen!2sin!4v1654884088029!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>SOE, CUSAT, KERALA</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>canteenmanagement.cms@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

              <form action="https://formsubmit.co/cd98dc9f992521147ad45f5cc591063e" method="POST">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
                <br><br><br>
              <div class="text-center"><button type="submit">Contact Us</button></div>
            </form>
            <!--js for email integration-->
            
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Ti Amo</h3>
              <p>
                Near SOE CUSAT <br>
                KERALA 535022, INDIA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> canteenmanagement.cms@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our newsletter to keep you informed </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>