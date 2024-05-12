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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="/style.css" />
    <link rel="stylesheet" href="/css/social.css" />
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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInformation" role="button" data-bs-toggle="dropdown" aria-expanded="false">Information</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownInformation"> <!-- Corrected aria-labelledby attribute -->
                  <li><a class="dropdown-item" href="/Information.php#about-us">About Us</a></li>
                  <li><a class="dropdown-item" href="/Information.php#social-risks">Social Tips</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/Information.php#partnerships">Partnerships</a></li>
              </ul>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="/Help.php">How Parents Can Help</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Livestreaming.php">Livestreaming</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/SocialMediaApps.php"
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

    <div class="search">
      <form class="d-flex" role="search">
        <input
          class="form-control me-2"
          type="search"
          placeholder="Search"
          aria-label="Search"
        />
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>

    <h1 class="text-center">Most Popular Social Media Apps</h1>

    <!-- social media card section -->

    <section class="articles">
      <!-- For instagram -->
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="/images/instagram.png" alt="" />
          </figure>
          <div class="article-body">
            <h2>Instagram</h2>
            <p>
              Instagram is a popular platform for sharing photos and videos.
            </p>
            <b>To stay safe on Instagram:</b>
            <ul>
              <li>
                Set your account to private to control who can see your posts.
              </li>
              <li>
                Be cautious about accepting friend requests or messages from
                strangers.
              </li>
              <li>
                Avoid sharing personal information, such as your address or
                phone number, in your bio or captions.
              </li>
            </ul>
            <a href="https://www.instagram.com/" class="read-more">
              Explore Instagram
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </article>

      <!-- for facebook -->
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="/images/facebook.png" alt="" />
          </figure>
          <div class="article-body">
            <h2>Facebook</h2>
            <p>Facebook is a widely used social networking platform.</p>
            <b>Here's how to stay safe on Facebook:</b>
            <ul>
              <li>
                Review and adjust your privacy settings to control who can see
                your posts and personal information.
              </li>
              <li>
                Be selective about accepting friend requests and only add people
                you know and trust.
              </li>
              <li>
                Beware of scams and never click on provide personal information
                to unknown sources.
              </li>
            </ul>
            <a href="#" class="read-more">
              Explore Facebook
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </article>

      <!-- for snapchat -->
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="/images/snapchat.png" alt="" style="width: 150px" />
          </figure>
          <div class="article-body">
            <h2>Snapchat</h2>
            <p>
              Snapchat is known for its disappearing photo and video messages.
            </p>
            <b>To stay safe on Snapchat:</b>
            <ul>
              <li>
                Only accept friend requests from people you know in real life.
              </li>
              <li>
                Be mindful of what you share in your snaps, as they can be
                screenshot and saved by others.
              </li>
              <li>
                Report any inappropriate or harassing messages or content to
                Snapchat's support team.
              </li>
            </ul>
            <a href="#" class="read-more">
              Explore Snapchat
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </article>
    </section>

    <section class="articles">
      <!-- for tiktok -->
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="/images/tiktok.png" alt="" />
          </figure>
          <div class="article-body">
            <h2>Tiktok</h2>
            <p>TikTok is a video-sharing platform popular among teenagers.</p>
            <b>Here are some safety tips for TikTok:</b>
            <ul>
              <li>
                Set your account to private to control who can view your videos
                and send you messages.
              </li>
              <li>
                Be cautious about interacting with strangers and avoid sharing
                personal information in your profile.
              </li>
              <li>
                Use TikTok's built-in features to filter and block comments or
                messages from users you don't want to engage with.
              </li>
            </ul>
            <a href="#" class="read-more">
              Explore Tiktok
              <span class="sr-only">about this is some title</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </article>

      <!-- for whatsapp -->
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="/images/whatsApp.png" alt="" />
          </figure>
          <div class="article-body">
            <h2>WhatsApp</h2>
            <p>
              WhatsApp is a messaging app known for its end-to-end encryption.
            </p>
            <b>To stay safe on WhatsApp:</b>
            <ul>
              <li>
                Enable two-step verification to add an extra layer of security
                to your account.
              </li>
              <li>
                Be cautious about sharing personal information in group chats or
                with unknown contacts.
              </li>
              <li>
                Avoid forwarding chain messages or scams and report any
                suspicious activity to WhatsApp.
              </li>
            </ul>
            <a href="#" class="read-more">
              Explore WhatsApp
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </article>

      <!-- for twitter -->
      <article>
        <div class="article-wrapper">
          <figure>
            <img src="/images/twitter.png" alt="" />
          </figure>
          <div class="article-body">
            <h2>Twitter</h2>
            <p>
              Twitter is a microblogging platform where users share short posts
              called tweets.
            </p>
            <b>Stay safe on Twitter by:</b>
            <ul>
              <li>
                Reviewing and adjusting your privacy settings to control who can
                see your tweets and send you messages.
              </li>
              <li>
                Being cautious about clicking on links in tweets, especially
                from unknown sources.
              </li>
              <li>
                Reporting any abusive or harassing behavior to Twitter's support
                team.
              </li>
            </ul>
            <a href="#" class="read-more">
              Explore Twitter
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </article>
    </section>

    <!-- bar chart -->
    <div class="container text-center">
      <h3>Understanding Social Media Risks: A Comparative Overview</h3>
      <p>
        The following bar chart illustrates the percentage of each platform's
        risk factors based on common concerns such as privacy issues,
        cyberbullying, and exposure to inappropriate content.
      </p>
    </div>

    <section class="container d-flex justify-content-center">
      <canvas id="myChart" style="width: 100%; max-width: 600px"></canvas>
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
        <a class="text-reset fw-bold" href="#">YatiSocialCampagin.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- bar chart script -->
    <script>
      const xValues = [
        "Instagram",
        "Facebook",
        "Snapchat",
        "Tiktok",
        "WhatsApp",
        "Twitter",
      ];
      const yValues = [45, 55, 44, 34, 45, 42];
      const barColors = [
        "#cd486b",
        "#1877F2",
        "#FFFF00",
        "#000000",
        "#25d366",
        "#1DA1F2",
      ];

      new Chart("myChart", {
        type: "bar",
        data: {
          labels: xValues,
          datasets: [
            {
              backgroundColor: barColors,
              data: yValues,
            },
          ],
        },
        options: {
          legend: { display: false },
          title: {
            display: true,
            text: "Most risky apps",
          },
        },
      });
    </script>
  </body>
</html>
