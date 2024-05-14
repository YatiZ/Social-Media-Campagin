<?php 
session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="/style.css" />
    <link rel="stylesheet" href="/css/info.css" />
    <script src="/script.js"></script>
    <script
      src="https://kit.fontawesome.com/9dca7ae98e.js"
      crossorigin="anonymous"
    ></script>
    <title>Home Page</title>
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="50">
    <nav class="navbar navbar-expand-lg bg-primary fixed-top" data-bs-theme="dark" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="/Home.php">Home</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownInformation"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >Information</a
              >
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownInformation"
              >
                <!-- Corrected aria-labelledby attribute -->
                <li>
                  <a class="dropdown-item" href="./Information.php/#about-us"
                    >About Us</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="./Information.php/#social-risks"
                    >Social Tips</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a
                    class="dropdown-item"
                    href="./Information.php/#partnerships"
                    >Partnerships</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Help.php">How Parents Can Help</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Livestreaming.php">Livestreaming</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/SocialMediaApps.php"
                >SocialMediaApps</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Legislation.php"
                >Legislation & Guidance</a
              >
            </li>
          </ul>
          <div class="d-flex justify-content-end">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        <a href="/Newsletter.html">
        <a href="/backend/logout.php">Logout</a>
        </a>
      <?php else: ?>
        <a href="/auth/LoginPage.html"><i class="fa-solid fa-right-to-bracket"></i></a>
      <?php endif; ?>
                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div style="padding-top: 60px;"></div>
    <section id="about-us">
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm">
            <h3>History of this campagin</h3>
            <p>
              Our social media safety campaign began in 2024 with a mission to
              address the growing concerns surrounding online safety for
              teenagers. Initiated by YUSA, the campaign was a response to the
              increasing prevalence of cyberbullying, online predators, and
              other risks faced by young people in the digital age.
            </p>
          </div>

          <div class="col-sm">
            <img src="/images/history.png" width="370" />
          </div>
        </div>
      </div>
      <div class="container mt-3">
        <div class="row">
          <div class="col-sm">
            <img src="/images/goals.png" alt="" width="370" />
          </div>

          <div class="col-sm">
            <h3>Campaign Goals</h3>
            <p>
              Healthy and positive relationships are essential for teenagers'
              well-being both online and offline. Our campaign aims to foster
              positive relationships among teenagers by promoting empathy,
              kindness, and respect in their online interactions. By encouraging
              positive communication and discouraging hate speech and
              cyberbullying, we create a more inclusive and supportive online
              community.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- risk lists -->
    <section id="social-risks">
      <h3 class="text-center">How to stay safe online</h3>
      <ol class="olcards">
        <li style="--cardColor: #fc374e">
          <div class="content">
            <!-- <div class="icon">😀</div> -->
            <div class="title">Empowerment Through Education</div>
            <div class="text">
              Empower teenagers with the knowledge and skills to navigate the
              online world safely, ensuring they can make informed decisions and
              protect themselves from harm.
            </div>
          </div>
        </li>
        <li style="--cardColor: #36aeb3">
          <div class="content">
            <!-- <div class="icon">😁</div> -->
            <div class="title">Building Digital Resilience</div>
            <div class="text">
              Foster resilience among teenagers to withstand online challenges
              and bounce back from negative experiences, promoting a healthy and
              positive online presence.
            </div>
          </div>
        </li>
        <li style="--cardColor: #162d59">
          <div class="content">
            <!-- <div class="icon">😉</div> -->
            <div class="title">Creating Safe Digital Spaces</div>
            <div class="text">
              Create and maintain safe and supportive online environments where
              teenagers feel respected, valued, and free from harassment or
              exploitation.
            </div>
          </div>
        </li>
        <li style="--cardColor: #f15f0e">
          <div class="content">
            <!-- <div class="icon">😜</div> -->
            <div class="title">Promoting Responsible Digital Citizenship</div>
            <div class="text">
              Instill a sense of responsibility and accountability in teenagers
              for their online actions.
            </div>
          </div>
        </li>
      </ol>
    </section>

    <!-- partnerships with school-->
    <section id="partnerships">
      <div class="text-center">
        <h3>Partnerships with Schools</h3>
        <div class="slider">
          <div class="slide-track">
            <div class="slide" style="margin-right: 25px">
              <img src="/images/uni1.png" alt="" />
            </div>
            <div class="slide" style="margin-right: 25px">
              <img src="/images/uni2.png" alt="" />
            </div>
            <div class="slide" style="margin-right: 25px">
              <img src="/images/uni3.png" alt="" />
            </div>
            <div class="slide" style="margin-right: 25px">
              <img src="/images/uni4.png" alt="" />
            </div>
            <div class="slide" style="margin-right: 25px">
              <img src="/images/uni5.png" alt="" />
            </div>
            <div class="slide">
              <img
                src="https://skylinecollege.edu/images/skyline-logo-1.svg"
                alt=""
              />
            </div>
            <div class="slide">
              <img
                src="https://www.ccsf.edu/themes/custom/ccsf/assets/images/logo.png"
                alt=""
              />
            </div>
            <div class="slide">
              <img
                src="https://nthu-en.site.nthu.edu.tw/var/file/3/1003/img/3876/logo.png"
                alt=""
              />
            </div>
            <div class="slide" style="margin-left: 25px">
              <img
                src="https://www.ntu.edu.sg/images/default-source/corporate/ntu_logo.png?sfvrsn=b5dd1d82_5"
                alt=""
              />
            </div>
            <div class="slide">
              <img
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>

      <!-- partnerships with influencers -->
      <div class="text-center mt-5">
        <h3>Our Newsletter</h3>
      </div>

      <!-- newsletter  -->
      <section class="wrapper">
        <div class="card_container">
          <div class="img__container">
            <img
              src="https://images.unsplash.com/photo-1546793665-c74683f339c1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
              alt="salad"
              class="img"
            />
          </div>
          <div class="content">
            <h4 class="subtitle">Digital Guide:IONOS</h4>
            <p class="">
              Young people are particularly prone to becoming addicted to the
              internet . . .
            </p>

            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        <a href="/Newsletter.html">
          <button class="register">Read More</button>
        </a>
      <?php else: ?>
        <button class="register" onclick="showNotification()">Subscribe</button>
      <?php endif; ?>
          </div>
        </div>

        <div class="card_container">
          <div class="img__container">
            <img
              src="https://images.unsplash.com/photo-1546793665-c74683f339c1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
              alt="salad"
              class="img"
            />
          </div>
          <div class="content">
            <h4 class="subtitle">Rock Content</h4>
            <p class="">
              Social media usage is growing at an exponential rate. With this
              growth come . . .
            </p>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        <a href="/Newsletter.html">
          <button class="register">Read More</button>
        </a>
      <?php else: ?>
        <button class="register" onclick="showNotification()">Subscribe</button>
      <?php endif; ?>
          </div>
        </div>

        <div class="card_container">
          <div class="img__container">
            <img
              src="https://images.unsplash.com/photo-1546793665-c74683f339c1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
              alt="salad"
              class="img"
            />
          </div>
          <div class="content">
            <h4 class="subtitle">OSWEGO</h4>
            <p class="">
              Oversharing information is arguably the biggest risk of using
              social media . . .
            </p>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        <a href="/Newsletter.html">
          <button class="register">Read More</button>
        </a>
      <?php else: ?>
        <button class="register" onclick="showNotification()">Subscribe</button>
      <?php endif; ?>
          </div>
        </div>
      </section>

      <!-- alert box -->

      <div class="alert" id="noti" style="display: none">
        <span class="closebtn" onclick="closeAlert()">&times;</span>
        <h2>Hi!</h2>
        <div>
          Would you like to read more? Please log in
          <a href="/auth/LoginPage.html">LogIn</a>
        </div>
      </div>
    </section>

    <!-- footer section -->

    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
      <!-- Section: Social media -->
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
      >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
              <p>
                <a href="/Home.php" class="text-reset">Home</a>
              </p>
              <p>
                <a href="/Information.php" class="text-reset">Information</a>
              </p>
              <p>
                <a href="/Help.php" class="text-reset">How Parents can help</a>
              </p>
              <p>
                <a href="/Livestreaming.php" class="text-reset"
                  >Livestreaming</a
                >
              </p>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fa-solid fa-location-dot"></i> Company Location
              </h6>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50387.12702161721!2d-122.36823497832032!3d37.879111899999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80857ecf027d8dd7%3A0x12b2d505a961cbaf!2sREI!5e0!3m2!1sen!2smm!4v1698913813396!5m2!1sen!2smm"
                class="map"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                yati@example.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div
        class="text-center p-4"
        style="background-color: rgba(0, 0, 0, 0.05)"
      >
        © 2024 Copyright:
        <a class="text-reset fw-bold" href="#">YUSASocialCampagin.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script>
      function showNotification() {
        var notification = document.getElementById("noti");
        notification.style.display = "block";
        document.body.classList.add("no-scroll");
      }

      function closeAlert() {
        var notification = document.getElementById("noti");
        notification.style.display = "none";
        document.body.classList.remove("no-scroll");
      }
    </script>
  </body>
</html>
