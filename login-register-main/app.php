<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/footer_style.css">
    <!-- ion icons -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <!-- google icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- swiper css link  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <!-- font awesome 4 cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
 <!-- header section starts  -->
 <header class="header">
    <a href="#" class="logo"><span><i
          class="fas fa-running"></i><span>HealthWeb</span></span></span></a>

    <nav class="navbar">
      <a href="indexlink.php">HOME</a>
      <a href="Prevention.php">PREVENTION</a>
      <a href="Testing.php">BOOK SLOT</a>
      <a href="app.php">APPOINTMENT</a>
      <a href="aboutus.php">CONTACT</a>
      <a href="logout.php">LOGOUT</a>
    </nav>

    <div class="icons">
      <i id="search-btn" class="fas fa-search"></i>
      <i id="menu-btn" class="fas fa-bars"></i>
    </div>
    <form action="https://www.google.com/search" method="get" class="searchbar-container">
      <input type="search" id="searchbar" placeholder="Search Here.....">
      <label for="searchbar" class="fas fa-search"></label>
    </form>
  </header>
  <!-- header section ends -->
<div id="header"></div>


<section class="home" id="home">

    <div class="image">
        <img src="image/pac.svg" alt="">
    </div>

    <div class="content">
        <h3>stay safe, stay healthy</h3>
        <p>The danger which is least expected soonest comes to us, so Let us be prepared for that with our free checkups,expert doctors, suggested meds in total our total care.</p>
        <a href="#book" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Being aware means you’ll be in a better position to take care of your health.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>With 80+ specialties covered, get medical advice and medical second opinion to any of your health concerns under one roof.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Medicines can treat diseases and improve your health. If you are like most people, you need to take medicine at some point in your life.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Our experienced doctos will help look after you, wherever you may be.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>


<section class="book" id="book">

    <h1 class="heading"> <span>book</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/pics.svg" alt="">
        </div>

        <form action="appconnect.php" method="post">
            <h3>book appointment</h3>
            <input type="text" placeholder="Your name" name="name" class="box">
            <input type="number" placeholder="Your number" name="phone" class="box">
            <input type="email" placeholder="Your email" name="email" class="box">
            <input type="date" name="date" class="box">
            <input type="submit" value="BOOK NOW" class="btn">
        </form>
    </div>
</section>
  </div>
<div>
<script src="js/script.js"></script>
<script src="app.js"></script>
<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
      <div class=" sec about-stayfit">
        <h3><i class="fas fa-running"></i><span>HealthWeb</span></span></a></h3>
        <p>This is a website created to help all maintain a healthy relationship with themselves.</p>
        <div class="social-handles">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <div class="sec quicklinks">
        <h3>QUICK LINKS</h3>
        <a href="indexlink.php" class="link">HOME</a>
        <a href="Prevention.php" class="link">PREVENTION</a>
        <a href="Testing.php" class="link">BOOK SLOT</a>
        <a href="app.php" class="link">APPOINTMENT</a>
        <a href="aboutus.php" class="link">CONTACT</a>
        <a href="checkstatus.php" class="link">CHECK STATUS OF VACCINE</a>
        <a href="checkdoc.php" class="link">CHECK STATUS OF APPOINTMENT</a>
      </div>

      <div class="sec learnmore">
        <h3>LEARN MORE</h3>
        <a href="#faq" class="link">FAQs</a>
        <a href="#" class="link">TERMS & CONDITIONS</a>
        <a href="#" class="link">PRIVACY POLICY</a>
      </div>

      <div class="sec contactus">
        <h3>CONTACT US</h3>
        <div class="details">
          <span>
            <h4><i class="fas fa-phone-alt"></i> Phone</a></h4>
          </span>
          <a href="tel:8697626427" class="link">8697626427</a>

          <span>
            <h4><i class="fa fa-envelope"></i> E-Mail</a></h4>
          </span>
          <a href="mailto:Healthsite@hotmail.com" class="link">Healthsite@hotmail.com</a>
          <a href="mailto:healthandfit@gmail.com" class="link">healthandfit@gmail.com</a>
        </div>
      </div>
    </div>
    <!-- copyright section -->
    <div class="credits">
      <p>
        <h2">Made with ❤ Olivia Karmakar| All Rights Reserved.</h2>
        <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
      </p>
    </div>
  </section>
  <!-- footer section ends -->




  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="script_file/script.js"></script>
</body>

</html>
</body>
</html>