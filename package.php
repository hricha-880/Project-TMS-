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
      <a href="homepage.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
      <a href="book.php">book</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!--Package css-->
<style>
 .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap: 2rem;
}

 .box-container .box{
   box-shadow: var(--box-shadow);
   background: var(--white);
}

 .box-container .box:hover .image img{
   transform: scale(1.1);
}

 .box-container .box .image{
   height: 25rem;
   overflow: hidden;
}

 .box-container .box .image img{
   height: 100%;
   width: 100%;
   object-fit: cover;
   transition: .2s linear;
}

.box-container .box .content{
   padding:2rem;
   text-align: center;
}

 .box-container .box .content h3{
   font-size: 2.5rem;
   color:var(--black);
}

 .box-container .box .content p{
   font-size: 1.6rem;
   color:var(--light-black);
   line-height: 2;
   padding:1rem 0;
}

 .load-more{
   text-align: center;
   margin-top: 2rem;
}

.scroll-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            display: none;
            background: #f15173;
            color: white;
            border: none;
            border-radius: 50%;
            width: 3rem;
            height: 3rem;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transition: background 0.3s ease;
        }

        .scroll-top:hover {
            background: #d13d5d;
        }
</style>

<!--Package-->
<div class="heading" style="background:url(images/slider2.jpg) no-repeat">
   <h1>packages</h1>
</div>
<section class="packages">
   <h1 class="heading-title">top destinations</h1>
   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/chitwannpp.jpg" alt="Chitwan National Park">
         </div>
         <div class="content">
            <h3>Chitwan National Park Package</h3>
            <p>A world heritage site with a variety of birds, animals, and plants. It's home to the One Horned Rhinoceros, Gharial Crocodiles, and Royal Bengal Tigers.</p>
            <h2>Nrs. 35,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/bhaktapur.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bhaktapur</h3>
            <p>Known as the city of medieval art, it's filled with temples, pagodas, and ornate pools</p>
            <h2>Nrs. 9,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/swayambhunath.jpg" alt="">
         </div>
         <div class="content">
            <h3>Swayambhunath Trip</h3>
            <p>A serene temple sanctuary atop a steep climb with 365 steps.</p>
            <h2>NRs. 5,500</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/phewa.jpg" alt="">
         </div>
         <div class="content">
            <h3>Phewa Lake</h3>
            <p>A serene lakeside retreat framed by the Annapurna mountains.</p>
            <h2>NRs. 22,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ilam.jpg" alt="">
         </div>
         <div class="content">
            <h3>Ilam</h3>
            <p>A place to see tea fields and views of Mt Kanchenjunga.</p>
            <h2>NRs. 32,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/khopra_dada.jpg" alt="">
         </div>
         <div class="content">
            <h3>Khopra Danda Trek </h3>
            <p>The Khopra Danda Trek offers a magnificent eco-friendly nature alternative trek between Annapurna Base Camp and the Jomsom-Muktinath Trek trail.</p>
            <h2>NRs. 50,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
    
      <div class="box">
         <div class="image">
            <img src="images/annapurna.jpg" alt="">
         </div>
         <div class="content">
            <h3>Annapurna Base Camp Trek</h3>
            <p>This popular short Annapurna Base Camp trek passes through village settings, pine forests, rhododendron forests, and the spectacular views of the Annapurna.</p>
            <h2>NRs. 98,850</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/gosaikunda.jpg" alt="">
         </div>
         <div class="content">
            <h3>Gosaikunda Trek</h3>
            <p>Explore the majestic Lake, witness breathtaking mountains, and experience Tamang's culture and tradition in your Gosaikunda Trek 5 days.</p>
            <h2>NRs. 40,500</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/tmgheritage.jpg" alt="">
         </div>
         <div class="content">
            <h3>Tamang Heritage Trek</h3>
            <p>The Tamang Heritage Trek is a 12-day hike, where you need to spend 11 nights at trek regions.</p>
            <h2>NRs. 1,00,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/everest_trek.jpg" alt="">
         </div>
         <div class="content">
            <h3>Everest View Trek</h3>
            <p>Everest View Trek is a joyous and low-altitude friendly destination!</p>
            <h2>NRs. 44,500</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/mardi.jpg" alt="">
         </div>
         <div class="content">
            <h3>Mardi Himal Trek</h3>
            <p>Discover the breathtaking beauty of Mardi Himal Trek and gain tips, experiences and inspiration for your upcoming journey.</p>
            <h2>NRs. 99,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/bardiya.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bardiya National Park</h3>
            <p>Bardia National Park Tour welcomes you to the proximity of large exquisite fauna from Bengal tigers, leopards, one-horned rhinos,etc!!</p>
            <h2>NRs. 15,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>
   <div class="load-more"><span class="btn see-more">see more</span></div>
   <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>   
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
    document.addEventListener("DOMContentLoaded", function () {
    const seeMoreButton = document.querySelector(".see-more");

    // Scrolls to the packages section when the "See More" button is clicked
    seeMoreButton.addEventListener("click", function () {
        const packagesSection = document.querySelector(".packages");
        packagesSection.scrollIntoView({
            behavior: "smooth",
            block: "start",
        });
    });
});
</script>
</body>
</html>