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
      
      <div class="hero min-h-screen bg-base-200">
        <img src="images/logo1.png" alt="" class="w-[700px]">
     </div>
      <div>
        <h1
          class="text-5xl py-2 font-bold text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary font-['Bebas Neue']">
          let's innovate something new</h1>
        <p class="py-6">Projectoo is an excellent resource for students who are interested in learning about robotics and gaining hands-on experience in the field.</p>
      </div>
    </div>
  </div>
  <div class="hero min-h-screen bg-base-200" id="about-2">
    <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="hero min-h-screen bg-base-200">
        <img src="images/dance.gif" alt="" class="w-[700px]">
     </div>
      <div>
      <h1
          class="text-5xl py-2 font-bold text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary font-['Bebas Neue']">
          About us</h1>
        <p class="py-6">Projectoo is dedicated to providing students with engaging and educational robotic project kits. They offer a wide range of projects to choose from on their website, and each kit comes with detailed circuit diagrams and instructions to help students build the project. In addition to the materials provided, Projectoo also offers a workspace where students can get clarification and assistance with any problems or errors they encounter while working on the project. Once the project is completed, students will receive an e-certificate that can be added to their resume to demonstrate their knowledge and experience in robotics.</p>
        <a href="products.php"><button class="btn btn-primary">see projects</button></a>
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
   <a href="https://instagram.com/_projectoo_?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
   <div class="contact">  +91 9945654724</div>
  <div class="contact">projectoo2022@gmail.com</div>
</div>
  </footer>
  </body>
</html>
