
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HealthWeb</title>
  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/header_style.css">
  <link rel="stylesheet" href="css/footer_style.css">
  <link rel="stylesheet" href="css/homepage_style.css">
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

  <!--home slider section starts-->
  <section class="home">
    <div class="swiper home-slider">

      <div class="swiper-wrapper">

        <section class="swiper-slide slide" style="background: url(image/h1.svg) no-repeat;">
          <div class="content">
            <h3>Primary Care</h3>
            <a href="Readmore1.php">Explore:Primary Care</a>
          </div>
        </section>

        <section class="swiper-slide slide" style="background: url(image/h2.svg) no-repeat;">
          <div class="content">
            <h3>Variants of the Virus</h3>
            <a href="Readmore2.php">Explore:Virus</a>
          </div>
        </section>

        <section class="swiper-slide slide" style="background: url(image/h3.svg) no-repeat;">
          <div class="content">
            <h3>Tips & Tricks For Regular Fitness</h3>
            <a href="Readmore3.php">Explore:Tips & Tricks</a>
          </div>
        </section>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- home slider section ends-->

  <!-- BMI calc starts -->
  <section class="bmi">
    <h2>BMI Calculator</h2>
    <p class="text">Height</p>
    <input type="text" id="height">
    <p class="text">Weight</p>
    <input type="text" id="weight">
    <p id="result"></p>
    <button id="btn" onClick="BMICalc()">Calculate</button>
    <p id="info">Please enter the height (in cm) and the weight (in kg)</p>
  </section>
  <!-- BMI calc ends -->
  <section class=Quiz>
    <a href="quiz.php">Click Here To Test Your Fitness Knowledge !</a>
  </section>

  <!-- FAQs starts -->
  <section class="c-fluid" id="faq">
    <div class="container-fluid">
      <h2>Frequently Asked Questions (FAQs)</h2>
      <div class="accordion">
        <div>
          <input type="checkbox" name="e_accordion" id="section1" class="accordion_input">
          <label for="section1" class="accordion_label">How will I know if I am eligible for vaccination?</label>
          <div class="accordion_content">
            <p>
            In the initial phase, COVID 19 vaccine will be provided to the priority group- Health Care and Front-line workers. 

The 50 plus age group may also begin early based on vaccine availability.

The eligible beneficiaries will be informed through their registered mobile number regarding the Health Facility where the vaccination will be provided and the scheduled time for the same. This will be done to avoid any inconvenience in registration and vaccination of beneficiaries.
            </p>
          </div>
        </div>

        <div>
          <input type="checkbox" name="e_accordion" id="section2" class="accordion_input">
          <label for="section2" class="accordion_label">Do I need to be on a vegetarian diet to benefit from
            yoga?</label>
          <div class="accordion_content">
            <p>
              No. You can derive benefit from yoga without a special vegetarian diet. However, for the most complete
              yoga experience, a vegetarian diet is preferred. Vegetarian yogic foods are felt to calm the mind and
              sharpen the intellect. These foods supply the utmost energy and are digested easily.
            </p>
          </div>
        </div>

        <div>
          <input type="checkbox" name="e_accordion" id="section3" class="accordion_input">
          <label for="section3" class="accordion_label">How often should I rest?</label>
          <div class="accordion_content">
            <p>
              Rest is neccessary as this is when the body is able to restore its levels, rebuild muscle, and gather
              energy and fuel for the next session. If you’re constantly working yourself into the ground, there’s a
              point where you’ll hit diminishing returns. Too much exercise can lead to overtraining, which can
              potentially cause elevated resting heart rate, injury, poor sleep, low energy levels, depression/anxiety,
              agitation, decrease in performance, and extreme soreness/pain.
              The amount of rest you need depends on your current routine, how quickly you recover, your fueling
              strategies, and the intensity of your workouts. If you’re working out at intense levels a few times each
              week, you may need more rest time to recover in between sessions. If your workouts are lower-intensity,
              you could possibly work out every day without the effects of overtraining. Make sure you have at least 1-2
              days of full rest each week to allow the body to repair and prevent overtraining.
            </p>
          </div>
        </div>

        <div>
          <input type="checkbox" name="e_accordion" id="section4" class="accordion_input">
          <label for="section4" class="accordion_label">Can a person get the COVID-19 vaccine without registration with Health
Department?</label>
          <div class="accordion_content">
            <p>
              Yes, yoga can help you lose weight. The gentle postures coupled with mindful breathing help to detoxify
              the body, cleanse the digestive tract, and decrease anxiety and stress. Stress is one of the biggest
              culprits behind weight gain. Yoga can help reduce your stress as well as provide a gentle form of exercise
              that can strengthen the body and tone your muscles.
            </p>
          </div>
        </div>

        <div>
          <input type="checkbox" name="e_accordion" id="section5" class="accordion_input">
          <label for="section5" class="accordion_label">What documents are required for registration of eligible beneficiary?</label>
          <div class="accordion_content">
            <p>
              Not at all. It is an exercise for all ages (6-70) with any and every ability level possible. The neat
              thing about Zumba is you only work as hard as you want to. Two people in the same class could do the same
              steps and one may not even break a sweat, while the other is drenched.
            </p>
          </div>
        </div>

        <div>
          <input type="checkbox" name="e_accordion" id="section6" class="accordion_input">
          <label for="section6" class="accordion_label">Is it necessary for a COVID recovered person to take the vaccine?</label>
          <div class="accordion_content">
            <p>
              Contrary to common belief, sore muscles do not mean that you had a *good workout* and you shouldn’t aim to
              be seriously sore after each session. I find that when clients are super sore, it hinders their activity
              level for the rest of the day and days following the workout. For this reason, we take it easy on the
              first session because no matter what we do, it’s different and new, which means they’ll be a tiny bit
              sore. What’s the benefit of pushing yourself super hard so you can’t move the rest of the week? If your
              muscles are incredbily sore, focus on adequate water and protein intake, stretch your muscles (dynamic and
              static stretching feels great), a bath with epsom salts, and magnesium oil. Easy cardio and moving the
              legs can help to reduce soreness. Also, if you have a sauna blanket or access to a sauna, this is an
              incredible recovery tool for sore muscles and inflammation.
            </p>
          </div>
        </div>

        <div>
          <input type="checkbox" name="e_accordion" id="section7" class="accordion_input">
          <label for="section7" class="accordion_label">Will the vaccine be safe as it is being tested and introduced in a short span of time?</label>
          <div class="accordion_content">
            <p>
              Pilates is more dynamic than yoga but less aggressive, sweaty and high-impact than aerobics, jogging or
              gym-work, which, unlike Pilates, can all place damaging strain on the joints and/or heart.
              Whereas most forms of exercise build the body’s stronger muscles, Pilates exercises work as much or more
              to strengthen the weaker ones too. The result is a properly balanced body, with better joint mobility, a
              firm musculature and good, natural posture.
            </p>
          </div>
        </div>

        <div>
          <input type="checkbox" name="e_accordion" id="section8" class="accordion_input">
          <label for="section8" class="accordion_label">Is it mandatory to take the vaccine?</label>
          <div class="accordion_content">
            <p>
              Yes it is possible to learn boxing at home. It will involve watching a lot of videos. But the only
              downside of training boxing at home you're not to have a boxing partner or someone to Spar with. We
              suggest using a punching bag for the strength training here. And if you become more available, we can
            </p>
          </div>
        </div>

        <div>
          <input type="checkbox" name="e_accordion" id="section9" class="accordion_input">
          <label for="section9" class="accordion_label">Will COVID 19 vaccine be given to everyone simultaneously?</label>
          <div class="accordion_content">
            <p>
              This depends on intensity and your goals. If your goal is general movement, your ideal amount of workout
              days will be different than someone who is training for a grueling athletic event. You could train 2-7
              times per week, depending on intensity. Make sure to vary intensity in your workout plan each week so you
              have a mix of challenging, easy, and moderate intensity levels. Always include 1-2 days of full rest.
            </p>
          </div>
        </div>

        <div>
          <input type="checkbox" name="e_accordion" id="section10" class="accordion_input">
          <label for="section10" class="accordion_label">Is working out in the morning better for you?</label>
          <div class="accordion_content">
            <p>
              You should exercise at a time that suits you and your body. There’s no evidence to suggest that an early
              morning workout is better for you, but some people are just more efficient at this time. You’ll get
              results regardless of the time of day, as long as it works for you.
            </p>
          </div>
        </div>
      </div>
  </section>
  <!-- FAQs ends -->

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