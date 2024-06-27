<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/Testing.css" class="css">
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
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
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

    <div class="container1">
      <form id="contact" action="in.php" method="post">
        <h1>Covid Testing Form</h1>
        <h3>Fill the form below and press the submit button!</h3>
        <div class="row">
          <!-- first column -->
          <div class="column">
            <fieldset>
              <input
                type="text"
                placeholder="Full Name *"
                name="name"
                required
                autofocus
              />
            </fieldset>
            <fieldset>
              <input
                type="text"
                placeholder="Guardian's name *"
                name="fname"
                required
                autofocus
              />
            </fieldset>
            <fieldset>
              <input
                type="email"
                placeholder="Your email *"
                name="email"
                required
                autofocus
              />
            </fieldset>
            <fieldset>
              <input
                type="date"
                placeholder="Date of birth *"
                name="date"
                onfocus="(this.type = 'date')"
                required
                autofocus
              />
            </fieldset>
            <!-- adding all country code list -->
            <fieldset>
              <input
                type="text"
                placeholder="Phone number *"
                name="phone"
                id="phone"
                required
                autofocus
              />
            </fieldset>
          </div>
          <!-- second column -->
          <div class="column">
            <fieldset>
              <p>What is your gender?</p>
              <div class="radio">
                <input type="radio" id="male" name="gender" value="m" required/>
                <label for="male">Male</label>
              </div>
              <div class="radio">
                <input type="radio" id="female" name="gender" value ="f"required />
                <label for="female">Female</label>
              </div>
            </fieldset>
            <fieldset>
              <label for="idCard">Enter your ID CardNo in given formate.</label>
              <div class="idCard">
                <input
                  type="text"
                  name="idCard"
                  pattern="[0-9]{12}"
                  placeholder="############"
                  maxlength="12"
                />
               
              </div>
            </fieldset>
            <fieldset>
              <input
                type="address"
                placeholder="Your address *"
                name="address"
                required
                autofocus
              />
            </fieldset>
          </div>
        </div>
        <!-- submit button -->
        <fieldset>
          <button type="submit" value="submit" name="submit" id="button">Submit Now</button>
        </fieldset>
      </form>
    </div>

    <!-- Javascript to initialize the code list -->
    <script>
      var input = document.querySelector("#phone");
      window.intlTelInput(input, {
        separateDialCode: true,
      });
    </script>
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