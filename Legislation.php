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
    <script src="/script.js"></script>
    <script
      src="https://kit.fontawesome.com/9dca7ae98e.js"
      crossorigin="anonymous"
    ></script>
    <title>Home Page</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
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
                <li>
                  <a class="dropdown-item" href="/Information.php#about-us"
                    >About Us</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/Information.php#social-risks"
                    >Social Tips</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="/Information.php#partnerships"
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
              <a class="nav-link active" href="/Legislation.php"
                >Legislation & Guidance</a
              >
            </li>
          </ul>
          <div class="d-flex justify-content-end">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
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
    <h1>This is Legislation Page</h1>
    <form class="d-flex" role="search">
      <input
        class="form-control me-2"
        type="search"
        placeholder="Search"
        aria-label="Search"
      />
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

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
            <a class="text-reset fw-bold" href="#">YatiSocialCampagin.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
  </body>
</html>
