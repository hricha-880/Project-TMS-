<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TravelVerse</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
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
      <a href="homepage.php">home</a>
      <a href="about.php" class="active">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!--about header-->
<div class="heading" style="background:url(images/pack3.jpg) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section  -->
<section class="about">
   <div class="images">
      <img src="images/pack3.jpg" alt="">
   </div>

   <div class="content">
      <h3>why TravelVerse?</h3>
      <p>We provide the most affordable packages with fantastic services that will help you make an unforgettable memories through your journey!!!</p>
      <p>Friendly and Easy to deal with.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Affordable package</span>
         </div>
      </div>
   </div>
</section>

<!--reviews section-->

<section class="testimonials">
    <div class="inner">
        <h1>What Our Clients Say</h1>
        <div class="border">
            <div class="row">
                <!-- Testimonial Card 1 -->
                <div class="col">
                    <div class="testimonial-card">
                        <img src="images/review1.jpeg" alt="Review1" class="testimonial-img">
                        <div class="testimonial-details">
                            <div class="name">Aakash Shrestha</div>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <p class="testimonial-text">I booked the travel through TravelVerse. Mr.Kim assisted the best way possible. The itinerary was well planned and the overall experience was good. I look forward to booking more trips from TravelVerse in the near future too.</p>
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div class="col">
                    <div class="testimonial-card">
                        <img src="images/review2.jpeg" alt="Review2" class="testimonial-img">
                        <div class="testimonial-details">
                            <div class="name">Slyvia Swift</div>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        <p class="testimonial-text">Really recommend TravelVerse. The only thing they should improve is to provide more details for the trips along with their routes. The trip prices are also affordable. I'm going to book more trips from here in the future too!!! :)</p>
                    </div>
                </div>

                <!-- Testimonial Card 3 -->
                <div class="col">
                    <div class="testimonial-card">
                        <img src="images/review3.jpeg" alt="Review3" class="testimonial-img">
                        <div class="testimonial-details">
                            <div class="name">John Doe</div>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        <p class="testimonial-text">We planned the trip through TravelVerse and it really turned out to be an amazing experience. I look forward to booking more trips from here and also recommend everyone to book their trips from here for cozy, affordable experiences.</p>
                    </div>
                </div>

                <!-- Testimonial Card 4 -->
                <div class="col">
                    <div class="testimonial-card">
                        <img src="images/review4.jpeg" alt="Review4" class="testimonial-img">
                        <div class="testimonial-details">
                            <div class="name">Britney Spears</div>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        <p class="testimonial-text">Thank you, TravelVerse, for the well-planned and executed trip plan. The itinerary was great, and the overall experience was fantastic. I highly recommend them and look forward to booking more trips in the future!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Extra Reviews -->
    <div class="extra-reviews" style="display: none;">
        <!-- Testimonial Card 5 -->
        <div class="col">
            <div class="testimonial-card">
                <img src="images/reviewe.jpg" alt="Review5" class="testimonial-img">
                <div class="testimonial-details">
                    <div class="name">Jane Smith</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <p class="testimonial-text">The experience was amazing. Everything was well organized, and I had the best time ever. Highly recommend it to anyone looking for a stress-free vacation!</p>
            </div>
        </div>

        <!-- Testimonial Card 6 -->
        <div class="col">
            <div class="testimonial-card">
                <img src="images/banner3.jpeg" alt="Review6" class="testimonial-img">
                <div class="testimonial-details">
                    <div class="name">Riva Shah</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <p class="testimonial-text">The experience was amazing. Everything was well organized, and I had the best time ever. Highly recommend it to anyone looking for a stress-free vacation!</p>
            </div>
        </div>

      <!-- Testimonial Card 7 -->
      <div class="col">
            <div class="testimonial-card">
                <img src="images/review7.jpg" alt="Review7" class="testimonial-img">
                <div class="testimonial-details">
                    <div class="name">Jane Smith</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <p class="testimonial-text">The experience was amazing. Everything was well organized, and I had the best time ever. Highly recommend it to anyone looking for a stress-free vacation!</p>
            </div>
        </div>

        <!-- Testimonial Card 8-->
        <div class="col">
            <div class="testimonial-card">
                <img src="images/review8.jpg" alt="Review8" class="testimonial-img">
                <div class="testimonial-details">
                    <div class="name">Emily Turner</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
                <p class="testimonial-text">Great company! They helped me plan my perfect honeymoon. The itinerary was clear and detailed, and I enjoyed every moment. Would definitely book again!</p>
            </div>
        </div>
    </div>
    <!-- Button to Toggle More Reviews -->
    <div class="read-more">
        <a href="javascript:void(0);" class="btn" onclick="toggleReviews()">Read more</a>
    </div>
</section>


<!-- footer-->
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
<script>
    function toggleReviews() {
    const extraReviews = document.querySelector('.extra-reviews');
    const readMoreButton = document.querySelector('.read-more a');
    
    //extra reviews herna
    if (extraReviews.style.display === 'none' || extraReviews.style.display === '') {
        extraReviews.style.display = 'block';
        readMoreButton.innerHTML = 'Read less';  //buttonlai read less banauxa
    } else {
        extraReviews.style.display = 'none';
        readMoreButton.innerHTML = 'Read more';  // buttonlai feri read more banauxa
    }
}
</script>
</body>
</html>
