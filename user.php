<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER SITE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("header-user.php"); ?>
    <?php include("animation.php"); ?>
    <section class="packages" id="packages">
    <h1 class="heading"><span>packages</span></h1>
    <p style="text-align:right; font-size:20px; "><a href="user_package.php" >View all packages >></a></p>
    <div class="box-container">
        <div class="box">
            <img src="images/b-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> MUMBAI </h3>
                <p>5 days, 4 nights</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹15,000 <span> ₹30,000</span> </div>
            </div>
        </div>
        <div class="box">
            <img src="images/b-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> PARIS </h3>
                <p>7 Days, 6 Nights</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price"> ₹1,15,000 <span> ₹1,30,000</span> </div>
            </div>
        </div>
        <div class="box">
            <img src="images/b-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> TOKYO </h3>
                <p>4 Days, 3 Nights</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> ₹85,000<span> ₹1,00,000 </span> </div>
             </div>
        </div>
   </div>
        

</section>
<!--gallery-->
<section class="gallery" id="gallery">
    <h1 class="heading"><span>gallery</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="images/a-1.jpg" alt="">
            <div class="content">
                <h3>stunning places</h3>
                <a href="gallery.html" class="btn">Explore more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/a-2.jpg" alt="">
            <div class="content">
                <h3>exciting places</h3>
                <a href="gallery.html" class="btn">Explore more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/a-3.jpg" alt="">
            <div class="content">
                <h3>thrilling places</h3>
                <a href="gallery.html" class="btn">Explore more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/a-4.jpg" alt="">
            <div class="content">
                <h3>awesome places</h3>
                <a href="gallery.html" class="btn">Explore more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/a-5.jpg" alt="">
            <div class="content">
                <h3>stunning places</h3>
                <a href="gallery.html" class="btn">Explore more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/a-6.jpg" alt="">
            <div class="content">
                <h3>exciting places</h3>
                <a href="gallery.html" class="btn">Explore more</a>
            </div>
        </div>
    </div>
</section>

<!--review-->
<section class="review" id="review">
    <h1 class="heading"><span>Review</span></h1>
<div class="wrapper">
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>Lorem aliasry ipsum 
          dolor sits ametans, 
          consectetur adipisicing elitits. Expedita reiciendis itaque 
          atu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
      <div class="content">
        <div class="info">
          <div class="name">Aliya Singh</div>
          <div class="job">Visited | Mumbai</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="images/pp2.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
      <div class="content">
        <div class="info">
          <div class="name">Rachel </div>
          <div class="job">Visited | paris</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="images/pp1.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left  quote"></i>
      <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
      <div class="content">
        <div class="info">
          <div class="name">Alex smith</div>
          <div class="job">Visited | Tokyo</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="images/pp3.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="click">
    <p><a href="user-review.php" >Click here to see more reviews >></a></p>
    <div>
  </div>
</section>

<!--contact-->
<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span></h1>
    <div class="row">
        <div class="image">
            <img src="images/contact-img2.jpg" alt="">
        </div>
        <form action="contact.php" method="post">
            <div class="inputBox">
                <input type="text" placeholder="Name" name="name" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="number" placeholder="Number" name="number" required>
                <input type="text" placeholder="Subject" name="subject"required>
            </div>
            <textarea placeholder="Message" name="message" id="" cols="30" rows="10" required></textarea>
            <input type="submit" class="btn" value="send message">
        </form>
    </div>
</section>
    <?php include("footer.php"); ?>
    <script src="script.js"></script>
</body>
</html>
