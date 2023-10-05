<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Event Organizer Website Design</title>
    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Header section starts -->
<header class="header">
    <a href="#" class="logo"><span>L</span>uxurious</a>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#service">service</a>
        <a href="#about">about</a>
        <a href="#gallery">gallery</a>
        <a href="#price">price</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>
</header>
<!-- Header section ends -->



<!-- Home section starts -->

<section class="home" id="Home">

    <div class="content">
        <h3>Life is an Event!<span>Make it Memorable</span></h3>
        <a href="#" class="btn">contact us</a>
    </div>

    <div id="main">
      <img src="images/m1.jpg" id="slideimage">
      
        </div>

</section>

<script>
  function first () {
    document.getElementById("slideimage") .src="images/m2.jpg";
  }

  function second () {
    document.getElementById("slideimage") .src="images/m3.jpg";
  }

  function third () {
    document.getElementById("slideimage") .src="images/m4.jpg";
  }

  function fourth () {
    document.getElementById("slideimage") .src="images/m5.jpg";
  }

  function fifth () {
    document.getElementById("slideimage") .src="images/m6.jpg";
  }

  
  setInterval(first,2000);
  setInterval(second,4000);
  setInterval(third,6000);
  setInterval(fourth,8000);
  setInterval(fifth,10000);
  
  
  
</script>

    

            

<!-- Home section ends -->


<!-- Service section starts -->
<section class="service" id="service">

  <h1 class="heading"> Our <span>Services</span> </h1>

  <div class="box-container">

    <div class="box">

      <i class="fas fa-map-marker-alt"></i>

      <h3>Venue selection</h3>
    </div>

    <div class="box">

      <i class="fas fa-envelope"></i>

      <h3>Invitation Cards</h3>
    </div>

    <div class="box">

      <i class="fas fa-music"></i>

      <h3>Entertainment</h3>
    </div>

    <div class="box">

      <i class="fas fa-utensils"></i>

      <h3>Food with Drinks</h3>
    </div>

    <div class="box">

      <i class="fas fa-photo-video"></i>

      <h3>Photos and Videos</h3>
    </div>

    <div class="box">

      <i class="fas fa-birthday-cake"></i>

      <h3>Custom foods</h3>
    </div>
  </div>
</section>

<!-- Service section ends -->

<!-- About section starts -->

<section class="about" id="about">

  <h1 class="heading"><span>About</span> US </h1>

  <div class="row">

    <div class="image">
      <img src="images/11.jpg" height="550px" width="800px" alt="">
    </div>

    <div class="content">
      <h3>We Will Planned a Unique luxurious Events and Celebrations for you</h3>
      <a href="#" class="btn">contact us</a>
    </div>
  </div>

</section>
<!-- About section ends -->


<!-- Gallery section starts -->


<section class="gallery" id="gallery">

  <h1 class="heading">Our <span>Gallery</span></h1>
  <div class="box-container">

    <div class="box">
      
      <img src="images/7.jpg" alt="">
      

      <h3 class="title">Some Unique Pics</h3>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        
        <a href="#" class="fas fa-share"></a>
        
        <a href="#" class="fas fa-eye"></a>
      </div>
    </div>

    <div class="box">

      <img src="images/62.jpg" alt="">

      <h3 class="title">Some Unique Pics</h3>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        
        <a href="#" class="fas fa-share"></a>
        
        <a href="#" class="fas fa-eye"></a>
      </div>
    </div>

    <div class="box">

      <img src="images/3.webp" alt="">

      <h3 class="title">Some Unique Pics</h3>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        
        <a href="#" class="fas fa-share"></a>
        
        <a href="#" class="fas fa-eye"></a>
      </div>
    </div>

    <div class="box">

      <img src="images/4.webp" alt="">

      <h3 class="title">Some Unique Pics</h3>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        
        <a href="#" class="fas fa-share"></a>
        
        <a href="#" class="fas fa-eye"></a>
      </div>
    </div>

    <div class="box">

      <img src="images/63.jpg" alt="">

      <h3 class="title">Some Unique Pics</h3>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        
        <a href="#" class="fas fa-share"></a>
        
        <a href="#" class="fas fa-eye"></a>
      </div>
    </div>

    <div class="box">

      <img src="images/64.jpg" alt="">

      <h3 class="title">Some Unique Pics</h3>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        
        <a href="#" class="fas fa-share"></a>
        
        <a href="#" class="fas fa-eye"></a>
      </div>
    </div>

    <div class="box">

      <img src="images/29.jpg" alt="">

      <h3 class="title">Some Unique Pics</h3>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        
        <a href="#" class="fas fa-share"></a>
        
        <a href="#" class="fas fa-eye"></a>
      </div>
    </div>

    <div class="box">

      <img src="images/37.jpeg" alt="">

      <h3 class="title">Some Unique Pics</h3>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        
        <a href="#" class="fas fa-share"></a>
        
        <a href="#" class="fas fa-eye"></a>
      </div>
    </div>

    <div class="box">

      <img src="images/4.jpg" alt="">

      <h3 class="title">Some Unique Pics</h3>
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        
        <a href="#" class="fas fa-share"></a>
        
        <a href="#" class="fas fa-eye"></a>
      </div>
    </div>
  </div>
</section>
<!-- Gallery section ends -->

<!-- Price section starts -->

<section class="price" id="price">

  <h1 class="heading"> Our <span>Prices</span></h1>

  <div class="box-container">
    <div class="box">

      <h3 class="title">For weddings</h3>
      <h3 class="amount">5,00000</h3>
      <ul>
        <li><i class="fas fa-check"></i>Full services</li>
        <li><i class="fas fa-check"></i>food with Drinks</li>
        <li><i class="fas fa-check"></i>Decorations</li>
        <li><i class="fas fa-check"></i>Music and Photos</li>
        <li><i class="fas fa-check"></i>Invitation cards</li>
      </ul>
      <a href="#" class="btn">check out</a>
    </div>


    <div class="box">

      <h3 class="title">For Concerts</h3>
      <h3 class="amount">2,00000</h3>
      <ul>
        <li><i class="fas fa-check"></i>Full services</li>
        <li><i class="fas fa-check"></i>food with Drinks</li>
        <li><i class="fas fa-check"></i>Decorations</li>
        <li><i class="fas fa-check"></i>Music and Photos</li>
        <li><i class="fas fa-check"></i>Invitation cards</li>
      </ul>
      <a href="#" class="btn">check out</a>
    </div>

    <div class="box">

      <h3 class="title">For Birthdays</h3>
      <h3 class="amount">50,000</h3>
      <ul>
        <li><i class="fas fa-check"></i>Full services</li>
        <li><i class="fas fa-check"></i>food with Drinks</li>
        <li><i class="fas fa-check"></i>Decorations</li>
        <li><i class="fas fa-check"></i>Music and Photos</li>
        <li><i class="fas fa-check"></i>Invitation cards</li>
      </ul>
      <a href="#" class="btn">check out</a>
    </div>

    <div class="box">

      <h3 class="title">For other any occasions</h3>
      <h3 class="amount">75,000</h3>
      <ul>
        <li><i class="fas fa-check"></i>Full services</li>
        <li><i class="fas fa-check"></i>food with Drinks</li>
        <li><i class="fas fa-check"></i>Decorations</li>
        <li><i class="fas fa-check"></i>Music and Photos</li>
        <li><i class="fas fa-check"></i>Invitation cards</li>
      </ul>
      <a href="#" class="btn">check out</a>
    </div>
  </div>
</section>
<!-- Price section ends -->

<!-- Review section starts -->

<section class="review" id="review">

  <h1 class="heading">Client's <span>Reviews</span></h1>
  <div class="review-slider swiper-container">

    <div class="swiper-wrapper">

      <div class="swiper-slide box">
        <i class="fas fa-quote-right"></i>
        <div class="user">
          <img src="images/pic1.png" alt="">
          <div class="user-info">
            <h3>Naira Gupta</h3>
            <p>Creative and Innovative</p>
            <span>Happy Clients</span>
          </div>
</div>

      </div>

      <div class="swiper-slide box">
        <i class="fas fa-quote-right"></i>
        <div class="user">
          <img src="images/pic2.png" alt="">
          <div class="user-info">
            <h3>Shayesha Sharma</h3>
            <p>Attention to detail and Pride in work</p>
            <span>Happy Clients</span>
          </div>
</div>

      </div>

      <div class="swiper-slide box">
        <i class="fas fa-quote-right"></i>
        <div class="user">
          <img src="images/pic3.png" alt="">
          <div class="user-info">
            <h3>Aarav Singh</h3>
            <p>Determination to Succeed,Stamina to work Hard</p>
            <span>Happy Clients</span>
          </div>
</div>

      </div>

      <div class="swiper-slide box">
        <i class="fas fa-quote-right"></i>
        <div class="user">
          <img src="images/pic4.png" alt="">
          <div class="user-info">
            <h3>Ankush Mehra</h3>
            <p>Highly organised and Efficient</p>
            <span>Happy Clients</span>
          </div>
</div>

      </div>

    </div>

  </div>


</section>

<!-- Review section ends -->

<!-- Contact section starts -->

<section class="contact" id="contact">
  <h1 class="heading"> <span>Contact</span>  Us </h1>

  <form action="contact_form.php" method="post">

    <div class="inputBox">
      <input type="text" placeholder="Enter your Name" name="username">
      <input type="email" placeholder="Enter your Email" name="email">
    </div>

    <div class="inputBox">
      <input type="number" placeholder="Enter your Number" name="phone">
      <input type="text" placeholder="Enter your Subject" name="subject">
    </div>
    <textarea name="" placeholder="Enter your message" id="" cols="30"  rows="10" name="message"></textarea>
    <input type="submit" value="send message" class="btn" name="send">
  </form>
</section>
<!-- Contact section ends -->


<!-- Footer section starts -->
<section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>Branches</h3>
      <a href="#"> <i class="fas fa-map-marker-alt"></i> Bangaluru </a>
      <a href="#"> <i class="fas fa-map-marker-alt"></i> Kolkata </a>
      <a href="#"> <i class="fas fa-map-marker-alt"></i> Goa </a>
      <a href="#"> <i class="fas fa-map-marker-alt"></i> Mumbai </a>
      <a href="#"> <i class="fas fa-map-marker-alt"></i> Ahmedabad </a>
    </div>


    <div class="box">
      <h3>Quick links</h3>
      <a href="#"> <i class="fas fa-arrow-right"></i> Home </a>
      <a href="#"> <i class="fas fa-arrow-right"></i> service </a>
      <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
      <a href="#"> <i class="fas fa-arrow-right"></i> Gallery </a>
      <a href="#"> <i class="fas fa-arrow-right"></i> price </a>
      <a href="#"> <i class="fas fa-arrow-right"></i> review </a>
       <a href="#"> <i class="fas fa-arrow-right"></i> Contact </a>
      </div>


      <div class="box">
        <h3>Contact information</h3>
        <a href="#"> <i class="fas fa-phone"></i> 8276497634 </a>
        <a href="#"> <i class="fas fa-phone"></i> 8797649554 </a>
        <a href="#"> <i class="fas fa-envelope"></i> guptaanaisha@gmail.com </a>
        <a href="#"> <i class="fas fa-envelope"></i> guptaivansha@gmail.com </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> Bangaluru, India - 5900156 </a>
      </div>


      <div class="box">
        <h3>Follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>  
        <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
        <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
        </div>



  </div>
  <div class="credit"> created by <span>Miss Vaishali</span> | All rights reserved  </div>
</section>
<!-- Footer section ends -->












    <!-- Custom js file link -->
    <script src="script.js"></script>
</body>
</html> 