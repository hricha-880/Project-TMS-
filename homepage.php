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
      <a href="homepage.php" class="active">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>

 <!-- slider section  -->
 <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url('images/slider2.jpg') no-repeat">
                    <div class="content1">
                        <span>Be a Wanderer</span>
                        <h3>Make your tour effective</h3>
                        <a href="package.php" class="btn">See more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url('images/slider1.jpg') no-repeat">
                    <div class="content2">
                        <span>Be a Wanderer</span>
                        <h3>explore the new destination</h3>
                        <a href="package.php" class="btn">See more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url('images/banner1.jpg') no-repeat">
                    <div class="content3">
                        <span>Be a Wanderer</span>
                        <h3>Create unforgettable memories</h3>
                        <a href="package.php" class="btn">See more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const swiper = new Swiper('.swiper.home-slider', {
          loop: true,
          autoplay: {
            delay: 5000,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      });
    </script>

    <!-- Our Services Section-->

<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/service2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="images/service1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="images/service3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/service5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="images/service4.png" alt="">
         <h3>camp fire</h3>
      </div>
   </div>
</section>

<!--Packages section -->
<section class="home-packages">
   <h1 class="heading-title"> our packages </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/topdest1pokh.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pokhara Package</h3>
            <p>Enjoy the trip of Pokhara Ghandruk with unforgettable fun with our top selling packages!</p>
            <h2>NRs. 25,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/topdest2ktm.jpg" alt="">
         </div>
         <div class="content">
            <h3>Kathmandu Durbar Square</h3>
            <p>Enjoy the religious tour with unforgettable fun with our top selling packages!</p>
            <h2>NRs. 20,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/topdest3lumbi.jpg" alt="">
         </div>
         <div class="content">
            <h3>Lumbini Tour Packages</h3>
            <p>Enjoy the adventure with unforgettable fun with our Lumbini top selling packages!</p>
            <h2>NRs. 30,200</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>

<!-- about us section-->
<section class="home-about">
   <div class="image">
      <img src="images/pack3.jpg" alt="about-us">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati adipisci ex quasi nostrum neque? Dolorem consequatur reiciendis maxime, illo cum dolores soluta ratione ut, similique pariatur est sit voluptates quis!</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>

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

