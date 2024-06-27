<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/aboutus.css" class="css" />
    <link rel="stylesheet" href="css/footer_style.css">
    <title>Aboutus</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
      $(function () {
        $("#header").load("header.php");
      });
    </script>
  </head>
  <body>
    <div id="header"></div>
    <div class="about-section">
      <h1>About Us</h1>
      <p>
        <h2>We're a transparent team with a mission to make information easily
        accesible every where everyday, we design an amazing user experiences
        for our customers</h2>
      </p>
      <p>
        <h2>Our mission is to make it easier for everyone to find and understand the
        government services and information they need—anytime, anywhere, any way
        they want. Thats's likely over-simplified, but it's cleaner tha a long
        list of descriptors. We think about how people search for government
        information, and how they use it. This helps us simplify and organize it
        in a way that makes sense.</h2>
      </p>
    </div>
    <div class="Our">
      <h2 style="text-align: center">Our Team</h2>
    </div>
    <div class="row">
      

      <div class="column">
        <div class="card">
          <img src="image/Oli.jpg" alt="image" style="width: 100%" />
          <div class="container2">
            <h2>Olivia Karmakar</h2>
            <p class="title">Member</p>
            <a
              class="social-icon"
              href="https://www.instagram.com/olivia.547/"
              target="_blank"
            >
              <ion-icon name="logo-instagram"size="large"></ion-icon>
            </a>
            <a
              class="social-icon"
              href="https://www.linkedin.com/in/olivia-karmakar-939076210/"
              target="_blank"
            >
            <ion-icon name="logo-linkedin"
            size="large">
            </ion-icon>
            </a>
            <a
              class="social-icon"
              href="https://github.com/oliviakarmakar"
              target="_blank"
            >
            <ion-icon name="logo-github"size="large"></ion-icon>
            </a>
            <a
              class="social-icon"
              href="mailto: oliviakarmakar@gmail.com"
              target="_blank"
            >
              <ion-icon name="mail-outline"size="large"></ion-icon>
            </a>
          </div>
        </div>
      </div>

     
    </div>
    <section class="contain" id="contact">
      <h2 class="text-center">Contact us</h2>
      <div class="form">
        <form action="contact.php" method="POST">
        <input
          class="form-input"
          type="text"
          name="name"
          id="name"
          placeholder="Enter your Name"
        />
        <input
          class="form-input"
          type="tel"
          name="phone"
          id="phone"
          placeholder="Enter your Mobile number"
        />
        <input
          class="form-input"
          type="email"
          name="email"
          id="email"
          placeholder="Enter your Email"
        />
        <textarea
          class="form-input"
          type="text"
          name="message"
          id="message"
          cols="30"
          rows="10"
          placeholder="Ellaborate your Concern"
        ></textarea>
        <button class="btn btn-dark">Submit</button>
        </form>
        </div>
       </section>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
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
