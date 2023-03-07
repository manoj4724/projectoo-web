<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>



   
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <title>Projectoo</title>
  <link rel="stylesheet" href="css/style2.css" type="text/css">
  <link rel="stylesheet" href="/css/style1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="/images/logo1.png">
  <meta name="title" content="GameHunt">
  <meta name="description" content="A knowledge base and list of intetesting projects">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://gamehunt.pages.dev/">
  <meta property="og:title" content="GameHunt">
  <meta property="og:description" content="A knowledge base and list of intetesting projects">
  <meta property="og:image" content="https://gamehunt.pages.dev/img/top.jpg">

        <link rel="shortcut icon" href="images/logo2.png" />
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style1.css" type="text/css">
        <link rel="stylesheet" href="css/style2.css" type="text/css">
        
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>


  <div class="hero min-h-screen bg-base-200" id="about">
    <div class="hero-content flex-col lg:flex-row">
        
      <img src="images/Arduino1.png" class="w-[500px] " />
      <div>
        <h1
          class="text-5xl py-2 font-bold text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary font-['Bebas Neue']">
          Arduino projects</h1>
        <p class="py-6">Arduino is a microcontroller platform for building electronics projects. It's open-source, easy to use for beginners, and has a wide range of capabilities. Perfect for interactive art, home automation, or custom device development.</p>
        <a href="#game1"><button class="btn btn-primary">jump in</button></a>
      </div>
    </div>
  </div>

  <div class="hero min-h-screen bg-base-200 py-6" id="game1">
    <div class="hero-content flex-col lg:flex-row">
      <img src="images/human.png"
        class="w-[500px] " />
      <div>
        <h1 class="text-5xl font-bold">human following robot</h1>
        <div class="rating gap-1 pt-6">
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" checked />
        </div>
        <p class="py-6">An Arduino-based human following robot uses an Arduino microcontroller to control its movements and follow a person. It utilizes sensors to detect the person and control the motors for movement. They are easy to build and program with Arduino.<br>
        arduino UNO<br>
        ultrasonic sensor<br>
        IR sensors<br>
        dc motors<br>
        motor driver<br>
        batteries<br>
        jumper wires<br>
    </p>
          <p>Price: Rs. 4000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
      </div>
    </div>
  </div>

  <div class="hero min-h-screen bg-base-200 py-6" id="game2">
    <div class="hero-content flex-col lg:flex-row">
      <img src="images/obstrical.png"
        class="w-[500px]" />
      <div>
        <h1 class="text-5xl font-bold">obstacle sensing robot</h1>
        <div class="rating gap-1 pt-6">
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" checked />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
        </div>
        <p class="py-6">An obstacle avoiding robot using Arduino is a robot that uses an Arduino microcontroller to navigate and avoid obstacles in its environment using sensors.
            Arduino UNO<br>
            ultrasonic sensors<br>
            tt DC motors <br>
            motor driver shield<br>
            batteries<br>
            jumper wires.</p>
          <p>Price: Rs. 4000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
      </div>
    </div>
  </div>

  <div class="hero min-h-screen bg-base-200 py-6" id="game3">
    <div class="hero-content flex-col lg:flex-row">
      <img
        src="images/bluetooth.png"
        class="w-[500px] " />     <!--rounded-lg shadow-2xl  for shadow-->
      <div>
        <h1 class="text-5xl font-bold">bluetooth control robot</h1>
        <div class="rating gap-1 pt-6">
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" checked />
        </div>
        <p class="py-6">An Arduino Bluetooth controlled robot is a robot that uses an Arduino microcontroller to receive wireless commands via Bluetooth and control its movement and actions. It can be programmed and customized using the Arduino programming language and software. It's a fun and educational project for those interested in robotics and electronics.<br>

            Arduio UNO<br>
            motor driver shield<br>
            bluetooth module<br>
            tt DC motors<br>
            batteries<br>
            jumper wires
        </p>
          <p>Price: Rs. 4000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
      </div>
    </div>
  </div>

  <div class="hero min-h-screen bg-base-200 py-6" id="game4">
    <div class="hero-content flex-col lg:flex-row">
      <img src="images/line.png" class="w-[500px] " />
      <div>
        <h1 class="text-5xl font-bold">Line following robot</h1>
        <div class="rating gap-1 pt-6">
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" checked />
        </div>
        <p class="py-6">A line following robot is a robot that can detect and follow a line using infrared sensors and an Arduino microcontroller. The Arduino is programmed to control the robot's motors to follow the line. It's a popular choice due to its ease of use and versatility<br>
        arduino UNO<br>
        ir sensors<br>
        motor driver shield<br>
        tt DC motors<br>
        batteries<br>
        jumper wires.</p>
          <p>Price: Rs. 4000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
      </div>
    </div>
  </div>

  <div class="hero min-h-screen bg-base-200 py-6" id="game5">
    <div class="hero-content flex-col lg:flex-row">
      <img src="images/radar.jpeg"
        class="w-[500px] " />
      <div>
        <h1 class="text-5xl font-bold">Radar detector</h1>
        <div class="rating gap-1 pt-6">
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" />
          <input disabled type="radio" class="mask mask-heart bg-red-400" checked />
        </div>
        <p class="py-6">A radar detector using an Arduino microcontroller can also be used to measure the distance to an object by using the time of flight principle. An ultrasonic sensor sends out a radar signal and measures the time taken for the signal to be reflected back. The Arduino calculates the distance and angle then displays it on a connected device. This type of radar detector can be used for applications such as obstacle avoidance for robots and distance measurement in industrial settings and in militory applications.<br>
    Arduino UNO<br>
    uldrasonic sensor<br>
    bread board<br>
    jumper wires</p>
          <p>Price: Rs. 4000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
      </div>
    </div>
  </div>



  <footer class="footer p-12 bg-neutral text-neutral-content">
    <div>
      <img class="w-8 rounded-full" src="images/logo2.png" />
      <p>projectoo<br>since 2022</p>
    </div>
    <div>
      <span class="footer-title">Social</span>
   <a href="https://instagram.com/_projectoo_?igshid=YmMyMTA2M2Y=" class="fab fa-instagram">instagram</a><br>
   <div class="contact">  +91-9945654724</div>
  <div class="contact">projectoo2022@gmail.com</div>
</div>
  </footer>

  
  
</body>

</html>