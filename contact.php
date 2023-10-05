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