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
    <link rel="stylesheet" href="style.css">
    <style>
        /* General Page Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
    color: #333;
    background-color: #fbf5dd;
}

header {
    background-color: #fbf5dd;
    color: black;
    padding: 15px 20px;
    text-align: center;
    position: sticky;
    top: 0;
    z-index: 1000;
}

header .nav-links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 20px;
}

header .nav-links a {
    color: #ff4c4c;
    text-decoration: none;
    font-weight: bold;
}

header .nav-links a.active {
    text-decoration: underline;
}

.hero {
    background-color: #ecca9f;
    color: black;
    text-align: center;
    padding: 50px 20px;
}

.hero h1 {
    font-size: 3rem;
}

.hero p {
    font-size: 1.2rem;
}

.mission-vision .container {
    display: flex;
    justify-content: space-around;
    padding: 50px 20px;
}

.mission-vision h2 {
    color: #ff4c4c;
    text-align: center;

}
.mission-vision p{
    text-align: center;
}
.mission{
    padding-right: 40px;
}
.how-it-works{
    background-color: #ecca9f;
    text-align: center;
    padding: 40px 20px;
    
}
.how-it-works h2{
    color:#333;
    margin-bottom: 20px;
}
.how-it-works .steps {
    display: flex;
    justify-content: space-around;
    gap: 40px;
    max-width: 1000px;
    margin: 0 auto;

    flex-wrap: wrap;
}
 .how-it-works .steps-item{
    flex: 1;
    min-width: 200px;
    margin: 10px;
    padding: 10px;
    text-align: center;
    background: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
 }
 .steps-item:hover{
    background-color: #fbf5dd;
  position: relative;
  transform: translateY(-10px);
  transition: transform 0.3s ease;
 }
 .how-it-works h3 {
    color: #333;
    font-size: 1.2rem;
    margin: 10px;
}

.how-it-works p {
    font-size: 0.9rem;
    line-height: 1.5;
    color: #555;
}
 /* why donate */
 #challenge {
    background-color:  #fbf5dd;
    padding: 40px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
#challenge:hover{
    background-color: #ecca9f;
    position: relative;
  transform: translateY(-10px);
  transition: transform 0.3s ease;
}
.countdown-timer {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.timer-box {
    background: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.timer-box h3 {
    font-size: 2.5rem;
    color: #ff4b5c;
    margin: 0;
}

.timer-box p {
    margin: 5px 0 0;
    color: #555;
    font-size: 1rem;
}

.donate-btn {
    background-color: #ff4b5c;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1.2rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.donate-btn:hover {
    background-color: #e8434e;
}
/* end */
.statistics{
    background-color:#ecca9f ;
    text-align: center;

}
.statistics h2{
    font-size: 2.5rem;
    padding-top: 20px;
   
}
.statistics .stats-container {
    display: flex;
    justify-content: space-around;
    padding: 40px 20px;
    background-color: #ecca9f;
}

.stat {
    text-align: center;
    margin: 10px;
}

.stat h3{
    color: #ff4c4c;
    font-size: 2.5rem;
}
.faqs h2{
    text-align: center;
    margin: 30px;
    font-size: 2.5rem;
}
.answer{
    margin-left: 10%;
}
.faqs p strong{
    font-size: 1.5rem;
    margin: 10%;
}

.faqs .faq-item {
    margin-bottom: 20px;
}

.testimonials {
    padding: 40px 20px;
    background-color: #fff;
    text-align: center;
}
.donar_map{
    /* height:1 ; */
    width:100%;

}


    </style>
</head>
<body>
    <header class="header">
        <h1>About Us</h1>
        <nav>
            <ul class="nav-links ">
                <li><a href="index.php"class="link-dark">Home</a></li>
                <li><a href="donate.php"class="link-dark">Donate Blood</a></li>
                <li><a href="contact.php"class="link-dark">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
    <h1>Who We Are</h1>
    <p>Our mission is to ensure a constant and safe supply of blood for those in need, while promoting the importance of blood donation to save lives.</p>
        <img src="../assets/img/donar_map.png" alt="" class="donar_map">
       
       
    </section>

    <section class="mission-vision">
        <div class="container">
            <div class="mission">
                <h2>Our Mission</h2>
                <p>To bridge the gap between blood donors and those in need by providing an efficient, reliable, and user-friendly platform for blood donation.</p>
            </div>
            <div class="vision">
                <h2>Our Vision</h2>
                <p>We envision a world where no life is lost due to the unavailability of blood. Together, we can create a community of lifesavers.</p>
            </div>
        </div>
    </section>

    <section class="how-it-works" id="how-it-work">
        <h2>How It Works</h2>
        <div class="steps">
            <div class="steps-item">
                <h3>1. Register</h3>
                <i class="fa fa-id-card" aria-hidden="true"></i>
                <p>Sign up on our platform as a donor or recipient by providing basic details.</p>
            </div>
            <div class="steps-item">
              
                <h3>2. Search</h3>
                <i class="fa fa-search" aria-hidden="true"></i>
                <p>Use our search tool to find the nearest blood donation camps or available donors.</p>
            </div>
            <div class="steps-item">
                <h3>3. Donate/Request</h3>
                <i class="fa fa-user-plus" aria-hidden="true"></i>
                <p>Donate blood to save lives or request blood in times of emergencies.</p>
            </div>
        </div>
    </section>
    <section id="challenge" class="container my-5">
        <h2 class="text-center mb-4">Join the Challenge: Save Lives Today!</h2>
        <p class="text-center">Every second counts! Join our mission to collect 1,000 units of blood by the end of this month.</p>
    
        <!-- Countdown Timer -->
        <div class="countdown-timer">
            <div class="timer-box">
                <h3 id="days">00</h3>
                <p>Days</p>
            </div>
            <div class="timer-box">
                <h3 id="hours">00</h3>
                <p>Hours</p>
            </div>
            <div class="timer-box">
                <h3 id="minutes">00</h3>
                <p>Minutes</p>
            </div>
            <div class="timer-box">
                <h3 id="seconds">00</h3>
                <p>Seconds</p>
            </div>
        </div>
    
        <!-- Call-to-Action Button -->
        <div class="text-center mt-4">
            <button class="donate-btn" onclick="window.location.href='./donate.php';">Donate Now</button>
        </div>
    </section>
    

    <section class="statistics"id="our_impect" >
        <h2>Our Impact</h2>
        <div class="stats-container" >
            <div class="stat">
                <h3>10,000+</h3>
                <p>Registered Donors</p>
            </div>
            <div class="stat">
                <h3>5,000+</h3>
                <p>Lives Saved</p>
            </div>
            <div class="stat">
                <h3>1,000+</h3>
                <p>Blood Donation Camps</p>
            </div>
        </div>
    </section>

    <section class="faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <p><strong>Q1. Who can donate blood?</strong></p>
            <p class="answer">Ans: Anyone between 18 and 65 years of age, weighing at least 50kg, and in good health can donate blood.</p>
        </div>
        <div class="faq-item">
            <p><strong>Q2. How often can I donate blood?</strong></p>
            <p class="answer">Ans: You can donate blood every 12 weeks for men and every 16 weeks for women.</p>
        </div>
        <div class="faq-item">
            <p><strong>Q3. Is blood donation safe?</strong></p>
            <p class="answer">Ans: Yes! All needles and equipment used are sterile and disposed of after one use, ensuring your safety.</p>
        </div>
    </section>

  
    <section class="testimonials" style="background-color:#ecca9f;" id="feedback">
    <h2>What People Say</h2>
    <div class="cardcontainer" >
        
        <a class="card1 link-dark" href="#feedback">
            <i class="fa fa-user" aria-hidden="true"></i>
          <h3>Rajesh, Beneficiary</h3>
          <p class="small">
            "I’m grateful to this platform for helping me find a donor in a critical situation. A true lifesaver!"
          </p>
          <div class="go-corner" href="#feedback">
            <div class="go-arrow">→</div>
          </div>
        </a>
        <a class="card1 link-dark" href="#feedback">
            <i class="fa fa-user" aria-hidden="true"></i>
          <h3> Priya, Donor</h3>
          <p class="small">
            "Donating blood has never been this easy. The portal is so user-friendly!"
          </p>
          <div class="go-corner" href="#feedback">
            <div class="go-arrow">→</div>
          </div>
        </a>
        <a class="card1 link-dark" href="#feedback">
            <i class="fa fa-user" aria-hidden="true"></i>
          <h3>Ahmed, Donor</h3>
          <p class="small">
            "Thanks to this initiative, I’ve been able to contribute to saving lives in my community."
          </p>
          <div class="go-corner" href="#feedback">
            <div class="go-arrow">→</div>
          </div>
        </a>
      </div>
    </section>
    <footer class="footer" style="background-color: #fbf5dd;">
        <p>&copy; 2025 Blood Donation Portal. All Rights Reserved. | Together, We Save Lives.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
