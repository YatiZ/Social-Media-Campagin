<?php 
session_start();
?>
<!DOCTYPE html>
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
              <a class="nav-link" href="/Legislation.php"
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
    <!-- <h1 class="text-center">Welcome to our Campaign</h1> -->

    <video width="100%" height="80%" autoplay>
      <source
        src="images/What Are the Effects & Impact of Social Media on Teenagers_.mp4"
        type="video/mp4"
      />
    </video>

    <div
      class="container-md d-flex flex-column flex-md-row justify-content-center my-5"
    >
      <div class="w-100 mb-md-0">
        <div class="">
          <h2 class="mb-3 text-center">Campaign Purpose and Goals</h2>
          <p>
            Our campaign aims to raise awareness about the potential risks of
            social media for teenagers and provide resources to help them stay
            safe online.
          </p>
        </div>
        <div class="threed mb-10">
          <div scene style="--size: 50vmin">
            <div rotation animate="true">
              <div center-z>
                <div grid style="--dimension: 8">
                  <!-- Social Media Icons -->
                  <!-- Each icon occupies 1/5th of the grid -->
                  <div pixel style="--l: 1; --r: 1; --c: 1; --color: #ff9000">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-tiktok"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 1; --r: 5; --c: 1; --color: #0000ff">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-twitter"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 1; --r: 1; --c: 5; --color: #ffff00">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-instagram"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 1; --r: 5; --c: 5; --color: #622dd1">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-tiktok"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 2; --r: 2; --c: 2; --color: #ff9000">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-facebook"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 2; --r: 4; --c: 2; --color: #0000ff">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-twitter"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 2; --r: 2; --c: 4; --color: #ffff00">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-twitter"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 2; --r: 4; --c: 4; --color: #622dd1">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-instagram"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 3; --r: 3; --c: 3; --color: #dddddd">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-instagram"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 4; --r: 2; --c: 2; --color: #90ff00">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-quora"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 4; --r: 4; --c: 2; --color: #900090">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-quora"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 4; --r: 2; --c: 4; --color: #009090">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-instagram"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 4; --r: 4; --c: 4; --color: #ff0000">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-instagram"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 5; --r: 1; --c: 1; --color: #90ff00">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-facebook"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 5; --r: 5; --c: 1; --color: #900090">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-quora"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 5; --r: 1; --c: 5; --color: #009090">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-facebook"></i
                    ></span>
                  </div>
                  <div pixel style="--l: 5; --r: 5; --c: 5; --color: #ff0000">
                    <span class="d-flex justify-content-center pt-1"
                      ><i class="fab fa-instagram"></i
                    ></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <h2 class="mb-3 mt-5 text-center">
            Empowering teenagers to stay safe online
          </h2>
        </div>
      </div>
    </div>

    <!-- popup message -->

    <div class="container flex-md-row md:d-flex">
      <div>
        <img
          src="images/Social-Media-Effects-on-Teens-Relationships-.jpeg"
          alt="Social Media Background"
          class="img-fluid"
        />
      </div>

      <div>
        <p class="mt-3">
          Social media platforms like Instagram, Snapchat, and TikTok have the
          ability to foster an environment where teens are repeatedly exposed to
          unhealthy images and themes, such as a glamorization of drug use,
          unhealthy relationships, and a deterioration of their body image.
          Additionally, there’s mounting evidence of a connection between
          depression, social media, and teens. Teenagers who are extremely
          active on social media are reporting cases of depression at a
          significantly higher rate than their peers who are not using
          Instagram, Snapchat, and TikTok as frequently. While social media is
          likely not causing depression, online relationships and a fear of
          missing out (FOMO) could be marginalizing already vulnerable people
          and creating a precarious vacuum of loneliness and despair. These are
          the social media effects on teens that are most worrying.
        </p>
      </div>
    </div>

    <!-- <section class="stay-safe bg-light py-5">
      <div class="container">
        <h2 class="text-center mb-4">How to Stay Safe Online</h2>

          <ul class="">
            <li>Get the latest anti-virus and firewall software</li>
            <p>
              Download updates regularly to make sure you’re protected against
              any new online threats.
            </p>

            <li>Update your internet browser</li>
            <p>
              The latest versions have built-in protection against fake websites
              and viruses.
            </p>

            <li>Create a strong and easy-to-remember password</li>
            <p>
              Passwords that combine letters and numbers are generally harder to
              guess.
            </p>

            <li>
              Use a different password to the one you use for other services
            </li>
            <p>
              You should have a unique password for your HSBC Online Banking.
            </p>

            <li>Change your password on a regular basis</li>
            <p>It's a good idea to change your password every month.</p>

            <li>Never share your password</li>
            <p>
              No HSBC employee will ever ask you for your password. If you
              receive a call or email from someone claiming to be from HSBC,
              ignore it and contact us immediately.
            </p>

            <li>Don't let your browser remember your log on details</li>
            <p>
              It's much safer to re-enter your details every time you log on,
              even if it takes slightly longer.
            </p>

            <li>Look after your paper statements</li>
            <p>
              Fraudsters can use information on paper statements to steal
              someone’s identity. You should always destroy your paper
              statements before throwing them away.
            </p>

            <li>Learn to spot fake emails and websites</li>
            <p>
              Criminals use them to con people into giving away passwords and
              bank details – the technical word is ‘phishing’.
            </p>

            <li>Avoid online fraud and con tricks</li>
            <p>
              To protect yourself and your money on the internet, look out for
              deals that look too good to be true.
            </p>
          </ul>

      </div>
    </section> -->

    <!-- footer section -->
    <section class="social-risks">
      <h2 class="text-center mb-4">Social Media Risks to Teenagers</h2>
      <ul>
        <li style="--accent-color: #41516c">
          <div class="date">Cyberbullying</div>
          <div class="descr mt-4">
            Cyberbullying involves using electronic communication to bully
            someone, typically by sending messages of an intimidating or
            threatening nature.
          </div>
        </li>
        <li style="--accent-color: #fbca3e">
          <div class="date">Online Predators</div>
          <div class="descr mt-4">
            Online predators are individuals who use social media platforms to
            build relationships with teenagers for the purpose of exploiting
            them sexually, emotionally, or financially.
          </div>
        </li>
        <li style="--accent-color: #e24a68">
          <div class="date">Privacy Concerns</div>
          <div class="descr mt-4">
            Teenagers may unknowingly share personal information online, which
            can be accessed by strangers or used for malicious purposes.
          </div>
        </li>
        <li style="--accent-color: #1b5f8c">
          <div class="date">Mental Health Issues</div>
          <div class="descr mt-4">
            Excessive use of social media can contribute to feelings of anxiety,
            depression, loneliness, and low self-esteem among teenagers.
          </div>
        </li>
        <li style="--accent-color: #4cadad">
          <div class="date">Body Image and Self-Esteem</div>
          <div class="descr mt-4">
            Teenagers often compare themselves to others on social media,
            leading to body image issues and a decline in self-esteem.
          </div>
        </li>
      </ul>
    </section>

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
