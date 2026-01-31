
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bloody Bank</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="icon" href="../assets/img/logo.png" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="index_style.css"/>
   
  </head>
  <body style="background-color: #fbf5dd">
    <!-- Navigation Bar -->
    <nav
      class="navbar navbar-expand-lg navbar-light navbar sticky-top navbar-light"
      style="background-color: #fbf5dd"
    >
      <div class="container">
        <div class="">
          <a class="navbar-brand" href="#" target="_blank">
            <img
              src="../assets/img/logo.png"
              alt="Logo"
              width="50"
              height="40"
              class="d-inline-block align-text-middle"
            /><B style="color: #f03737;">
            Blood Bank
          </B>
          </a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class=""></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#about"
                >About Us</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#camp">Nearest Camp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#availability"
                >Check Availability</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="./request.php"
                >Request Blood</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="contact.php">Contact Us</a>
            </li>
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
              <li class="nav-item">
              <a
                class="nav-link btn btn-danger text-white"
                href="dashboard.php"
                target="_blank"
                >Dasboard/Profile</a
              >
            </li>
<?php else: ?>
  <li class="nav-item">
              <a
                class="nav-link btn btn-danger text-white"
                href="login.php"
                target="_blank"
                >Login/Register</a
              >
            </li>
<?php endif; ?>

            
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
      <h1> Welcome <?php echo htmlspecialchars( $_SESSION['user_name']); ?>!</h1>
      <h2><b>Donate Blood, Save Lives</b></h2>
    <?php else: ?>
      <h1>Donate Blood, Save Lives</h1>
    <?php endif; ?>
    
      <p>Your one donation can save up to three lives.</p>
      <a href="donate.php" target="_blank" class="btn-donate">Donate Now</a>
    </section>

    <!-- Cards Section -->
    <div class="cardcontainer">
      <a class="card1 link-dark" href="about.php#our_impect">
        <i class="fas fa-heartbeat fa-3x text-danger mb-3"></i>
        <h3>Why Donate Blood?</h3>
        <p class="small">
          Every two seconds, someone in need requires blood. Your contribution
          can make a difference.
        </p>
        <div class="go-corner" href="about.php#our_impect">
          <div class="go-arrow">→</div>
        </div>
      </a>
      <a class="card1 link-dark" href="#blood_table">
        <i class="fas fa-users fa-3x text-primary mb-3"></i>
        <h3>Who Can Donate?</h3>
        <p class="small">
          Healthy individuals aged 18-60 years with a minimum weight of 50kg can
          donate blood.
        </p>
        <div class="go-corner" href="contact.php#map">
          <div class="go-arrow">→</div>
        </div>
      </a>
      <a class="card1 link-dark" href="about.php#how-it-work">
        <i class="fas fa-hand-holding-water fa-3x text-success mb-3"></i>
        <h3>How to Donate?</h3>
        <p class="small">
          Locate your nearest camp and register online. It only takes 15 minutes
          to save lives!
        </p>
        <div class="go-corner" href="about.php#how-it-work">
          <div class="go-arrow">→</div>
        </div>
      </a>
    </div>
    <!-- About Us Section -->
    <div class="dark-color">
      <a href="about.php" target="_blank" class="link-dark"><section id="about" class="container my-5">
        <h2 class="text-center pt-4">About Our Organisation</h2>
        <div class="inline flex">
          <div class="about">
            <img
              src="../assets/img/about.jpg"
              alt="fix"
              height="300px"
              width="300px"
            />
          </div>
          <div class="about" style="margin-top: 80px">
            <p>
              We are dedicated to connecting blood donors with those in need.
              Our mission is to bridge the gap between blood donors and
              recipients,ensuring no life is lost due to a shortage of blood.
              Through awareness, voluntary blood donation, and safe practice, we
              aim to create a self-sufficient community of lifesavers.
            </p>
            <p><i>"Donate Blood, Save Lives - Be a Hero Today!"</i></p>
          </div>
        </div>
      </section></a>
    </div>
    <!-- Testimonials Section -->
    <section id="testimonials" class="container my-5">
      <h2 class="text-center mb-4">What Our Donors Say</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card p-4">
            <p>
              "Donating blood was a rewarding experience. Knowing that I saved
              lives gives me immense satisfaction."
            </p>
            <h5 class="text-end">- Ramesh Kumar</h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-4">
            <p>
              "The process was smooth, and the staff was very supportive. I
              encourage everyone to donate blood."
            </p>
            <h5 class="text-end">- Anita Sharma</h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-4">
            <p>
              "A small act of kindness can save lives. Proud to be a regular
              blood donor."
            </p>
            <h5 class="text-end">- Vikram Singh</h5>
          </div>
        </div>
      </div>
    </section>
    <div class="inline dark-color">
      <div class="about sec card">
        <!-- Nearest Camp Section -->
        <section id="camp" class="container my-5">
          <h2 class="text-center mb-4">Nearest Blood Donation Camp</h2>
          <form id="campSearchForm" class="d-flex justify-content-center">
            <input
              type="text"
              id="userLocation"
              class="form-control w-50"
              placeholder="Enter your city or zip code"
            />
            <button
              type="button"
              class="btn btn-danger ms-2"
              onclick="fetchCamps()"
            >
              Search
            </button>
          </form>
          <div id="campResults" class="mt-5">
            <!-- Results will be displayed here -->
          </div>
        </section>
      </div>
      <div class="divider"></div>
      <div class="about sec card">
        <!-- Blood Availability Section -->
        <section id="availability" class="container my-5">
          <h2 class="text-center mb-4">Check Blood Availability</h2>
          <form class="d-flex justify-content-center">
            <select class="form-select w-50">
              <option selected>Select Blood Group</option>
              <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B-</option>
              <option>O+</option>
              <option>O-</option>
              <option>AB+</option>
              <option>AB-</option>
            </select>
            <button class="btn btn-danger ms-2">Check</button>
          </form>
        </section>
      </div>
    </div>

    <!-- blood group table -->
    </section>
    <section class="blood-compatibility" id="blood_table">
    <h2 style="text-align: center; margin-top: 40px; color: #333;">Blood Compatibility Chart</h2>
    <p style="text-align: center; margin-bottom: 20px; color: #555;">
        Check which blood groups can donate to or receive from each other.
    </p>
    <div style="overflow-x: auto; margin: 0 auto; max-width: 90%;">
        <table class="table table-striped table-bordered" style="margin: 0 auto; background-color: #fff; border: 1px solid #ddd; border-radius: 8px;">
            <thead style="background-color: #ff4c4c; color: #fff;">
                <tr>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Can Donate To</th>
                    <th scope="col">Can Receive From</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>O-</td>
                    <td>All Blood Groups</td>
                    <td>O-</td>
                </tr>
                <tr>
                    <td>O+</td>
                    <td>O+, A+, B+, AB+</td>
                    <td>O-, O+</td>
                </tr>
                <tr>
                    <td>A-</td>
                    <td>A+, A-, AB+, AB-</td>
                    <td>O-, A-</td>
                </tr>
                <tr>
                    <td>A+</td>
                    <td>A+, AB+</td>
                    <td>O-, O+, A-, A+</td>
                </tr>
                <tr>
                    <td>B-</td>
                    <td>B+, B-, AB+, AB-</td>
                    <td>O-, B-</td>
                </tr>
                <tr>
                    <td>B+</td>
                    <td>B+, AB+</td>
                    <td>O-, O+, B-, B+</td>
                </tr>
                <tr>
                    <td>AB-</td>
                    <td>AB+, AB-</td>
                    <td>O-, A-, B-, AB-</td>
                </tr>
                <tr>
                    <td>AB+</td>
                    <td>AB+</td>
                    <td>All Blood Groups</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

    <!-- Be a Hero Section -->
   
  <section id="hero-donation" class="container my-5">
    <div class="hero-content">
        <h2 class="text-center">Be a Hero: Donate & Save Lives</h2>
        <p class="text-center">
            Your small contribution can make a huge difference. Choose your preferred payment method or scan the QR code below to join the cause.
        </p>

        <!-- Payment Methods -->
        <div class="payment-methods">
            <a href="https://retail.onlinesbi.sbi/retail/login.htm"><img src="../assets/img/netbanking.png" alt="Net Banking" class="payment-icon"></a>
           <a href="http://cashlessindia.gov.in/upi.html"> <img src="../assets/img/bhim.png" alt="UPI" class="payment-icon"></a>
           <a href="https://www.unionbankofindia.co.in/en/Listing/Credit-Cards"> <img src="../assets/img/card.png" alt="Credit Card" class="payment-icon"></a>
        </div>

        <!-- QR Code -->
        <div class="qr-code-section">
            <img src="../assets/img/qr.png" alt="QR Code" class="qr-code">
            <p class="scan-notice">Scan here to be a hero!</p>
        </div>
    </div>
</section>

    <!-- Footer -->
     
    <footer class="footer">
      <div class="footer-container">
        <!-- About Section -->
        <div class="footer-section about">
          <h3>About Us</h3>
          <p>
            We are a non-profit organization dedicated to saving lives by
            promoting blood donation. Join us to make a difference in someone's
            life today.
          </p>
        </div>

        <!-- Quick Links -->
        <div class="footer-section quick-links ">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="index.php" class="link-dark">Home</a></li>
            <li><a href="donate.php#book-slot" class="link-dark">Book Slot</a></li>
            <li><a href="#camp" class="link-dark">Nearest Camps</a></li>
            <li><a href="#testimonials" class="link-dark">Testimonials</a></li>
            <li><a href="contact.php" class="link-dark">Contact Us</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="footer-section contact">
          <h3>Contact Us</h3>
          <p>Email: support@blooddonationportal.com</p>
          <p>Phone: +1 234 567 890</p>
          <p>Address: 123, Donation Lane, City Center</p>
        </div>

        <!-- Social Media -->
        <div class="footer-section social">
          <h3>Follow Us</h3>
          <div class="social-links">
            <a href="#"
              ><img src="../assets/img/facebook.png" alt="Facebook"
            /></a>
            <a href="#"
              ><img src="../assets/img/twitter.png" alt="Twitter"
            /></a>
            <a href="#"
              ><img src="../assets/img/instagram.png" alt="Instagram"
            /></a>
            <a href="#"
              ><img src="../assets/img/linkedin.png" alt="LinkedIn"
            /></a>
            <a href="https://github.com/itissv" target="_blank"
              ><img src="../assets/img/github.png" alt="Github"
            /></a>
          </div>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="footer-bottom">
        <p>
          &copy; 2025 Blood Donation Portal. All Rights Reserved. | Designed
          with ❤️
        </p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
