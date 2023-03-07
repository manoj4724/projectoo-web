<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>


   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>projectoo</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
   




        <link rel="shortcut icon" href="images/logo1.png" />
        <title>Projectoo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/style1.css" type="text/css">
    </head>
    <body>
        <!-- header section starts  -->

<header class="header">

<section class="flex">

   <a href="#home" class="logo"></a>

   <nav class="navbar">
   <?php
                require 'header.php';
                
            ?>
     
      
      
   </nav>
  
  

   <div id="menu-btn" class="fas fa-bars"></div>
   
</section>


</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="row">

      <div class="content">
         <h3> <span>projectoo</span></h3>
      </div>
      
      </div>

</section>

<!-- home section ends -->




<!-- project section starts  -->

<section class="teachers" id="teachers">

   <h1 class="heading">human following robot</span></h1>
<div>
   <div class="swiper teachers-slider">

     

         <div class="swiper-slide slide1">
                   
                        <img src="images/human.png" alt="" >   
                          
                  
                          
               </div>  
                  
      </div>
      
        
      <h1 class="heading"> description:</h1>
      <div class="swiper-slide slide">
      <h3>Human following robot follows you in direction you walk
        it is preprogrammed with the intelligence.<br>
        hardware specifications:-<br>
        - IR sensors<br>
        - Ultrasonic sensors<br>
       - Arduino<br>
       - 4 TT gear motors<br>
       - 4 wheels <br>
        - motor drive shield<br>
- Jumper wires<br>
- Servo motor <br>
- 18650 Li-on battery<br>
- 18650 battery holder<br>
- Acrylic sheet<br>
- DC power switch

</h3>
   
   
    </div>
 
    <a href="cart_add.php?id=1" class="btn btn-block btn-primary"  name="add" value="add" class="btn btn-block btr-primary"><span><h1>buy now</h1></span></a>

    <h1 class="heading"><span>Rs:-3500</span></h1>

   
<section class="reviews" id="reviews">

  
<div>
          
          <section class="projects" id="projects">
              
              <div class="container">
                  <div class="row">
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                              <a href="human following.php">
                                  <img src="images/human.png" alt="human following robot">
                              </a>
                              <center>
                                  <div class="caption">
                                      <h3>human following robot</h3>
                                      <p>Price: Rs. 3500</p>
                                      <?php if(!isset($_SESSION['email'])){  ?>
                                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                          <?php
                                          }
                                          else{
                                              if(check_if_added_to_cart(1)){
                                                  echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                              }else{
                                                  ?>
                                                  <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                  <?php
                                              }
                                          }
                                          ?>
                                      
                                  </div>
                              </center>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                              <a href="cart.php">
                                  <img src="images/self.png" alt="self balancing robot">
                              </a>
                              <center>
                                  <div class="caption">
                                      <h3>self balancing robot</h3>
                                      <p>Price: Rs. 2000</p>
                                      <?php if(!isset($_SESSION['email'])){  ?>
                                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                          <?php
                                          }
                                          else{
                                              if(check_if_added_to_cart(2)){
                                                  echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                              }else{
                                                  ?>
                                                  <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                  <?php
                                              }
                                          }
                                          ?>
                                  </div>
                              </center>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                              <a href="cart.php">
                                  <img src="images/light.png" alt="light following robot">
                              </a>
                              <center>
                                  <div class="caption">
                                      <h3>light following robot</h3>
                                      <p>Price: Rs. 3500</p>
                                      <?php if(!isset($_SESSION['email'])){  ?>
                                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                          <?php
                                          }
                                          else{
                                              if(check_if_added_to_cart(3)){
                                                  echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                              }else{
                                                  ?>
                                                  <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                  <?php
                                              }
                                          }
                                          ?>
                                  </div>
                              </center>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                              <a href="cart.php">
                                  <img src="images/obstrical.png" alt="obstracle">
                              </a>
                              <center>
                                  <div class="caption">
                                      <h3>obstracle sensing robot</h3>
                                      <p>Price: Rs. 3000</p>
                                      <?php if(!isset($_SESSION['email'])){  ?>
                                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                          <?php
                                          }
                                          else{
                                              if(check_if_added_to_cart(4)){
                                                  echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                              }else{
                                                  ?>
                                                  <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                  <?php
                                              }
                                          }
                                          ?>
                                  </div>
                              </center>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                              <a href="cart.php">
                                  <img src="images/dustbin.png" alt="smart dustbin">
                              </a>
                              <center>
                                  <div class="caption">
                                      <h3>smart dustbin</h3>
                                      <p>Price: Rs. 1300</p>
                                      <?php if(!isset($_SESSION['email'])){  ?>
                                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                          <?php
                                          }
                                          else{
                                              if(check_if_added_to_cart(5)){
                                                  echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                              }else{
                                                  ?>
                                                  <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                  <?php
                                              }
                                          }
                                          ?>
                                  </div>
                              </center>
                          </div>
                      </div>
   


<!-- footer section starts  -->

<footer class="footer">



   <div class="share">
   
   <a href="https://instagram.com/_projectoo_?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
   <div class="contact">  +91 9945654724</div>
  <div class="contact">projectoo2022@gmail.com</div>
</div>
      

   

</footer>

<!-- footer section ends -->















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>