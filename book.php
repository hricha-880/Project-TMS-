<?php session_start(); ?>
<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TravelVerse</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="homepage.css">
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
</head>
<!-- header section  -->
<section class="header">
<a href="homepage.php" class="logo">
    <img src="images/logo.jpeg" alt="Logo">
    <div class="logo-text">
        <span class="logo-title">TravelVerse <br>tms881@gmail.com</span>   
    </div>
</a>
   <nav class="navbar">
      <a href="homepage.php" >home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php" class="active">book</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!--book picture header-->
<div class="heading" style="background:url(images/slider2.jpg) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section  -->

<section class="booking">

   <h1 class="heading-title">--Book Trip--</h1>

   <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php
      unset($_SESSION['success_message']);
   }
   ?>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="members">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>
</section>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!--footer-->
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#a">Location: Kathmandu,Nepal</a></li>
                        <li><a href="#a">Contact: 9767528520</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="package.php">Package</a></li>  
                    </ul>
                </div>
                    <div class="footer-col">
                        <h4>Booking</h4>
                        <ul>
                            <li><a href="book.php">Book</a></li>
                            <li><a href="#a">Photos</a></li>
                        </ul>
                    </div>
                <div class="footer-col">
                        <h4>Follow us</h4>
                        <div class="social-links">
                           <a href="#a"><i class="fab fa-facebook"></i></a>
                           <a href="#a"><i class="fab fa-twitter"></i></a>
                           <a href="#a"><i class="fab fa-instagram"></i></a>
                           </div>    
                 </div>
    </div>
</footer>
   </body>
</html>