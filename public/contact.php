<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Bloody Bank</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="../assets/img/logo.png" />
    <style>
/* General Page Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
}

header {
    background-color: #fbf5dd;
    color:#333;
    padding: 15px 20px;
    text-align: center;
    position: sticky;
    top: 0;
    z-index: 1000;
}
.header h1{
    margin-top:0px;
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
    color: #333;
    text-decoration: none;
    font-weight: bold;
}
header .nav-links a:hover{
    color: #ff4c4c;
}

header .nav-links a.active {
    text-decoration: underline;
}

.hero {
    background-color:  #ecca9f;
    color: black;
    text-align: center;
    padding: 50px 20px;
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 10px;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 20px;
    color: #333;
}

/* Contact Form Section */
.contact-form {
    padding: 40px 20px;
    text-align: center;
}

.contact-form h2 {
    color: #ff4c4c;
    margin-bottom: 20px;
}

.contact-form form {
    max-width: 500px;
    margin: 0 auto;
    text-align: left;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.contact-form form label {
    display: block;
    margin-bottom: 5px;
    font-size: 1rem;
    font-weight: bold;
    color: #555;
}

.contact-form form input, 
.contact-form form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    outline: none;
    background-color: #f9f9f9;
}

.contact-form form textarea {
    resize: vertical;
}

.contact-form form button {
    background-color: #ff4c4c;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.contact-form form button:hover {
    background-color: #cc0000;
}

/* Office Info Section */
.office-info {
    background:  #ecca9f;
    padding: 40px 20px;
    text-align: center;
}

.office-info h2 {
    color:#333;
    margin-bottom: 20px;
}

.office-info .info-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    max-width: 900px;
    margin: 0 auto;
}

.office-info .info-item {
    flex: 1;
    min-width: 200px;
    margin: 10px;
    padding: 10px;
    text-align: center;
    background: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.office-info h3 {
    color: #333;
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.office-info p {
    font-size: 0.9rem;
    line-height: 1.5;
    color: #555;
}

/* Map Section */
.map {
    padding: 40px 20px;
    background: #fbf5dd;
    text-align: center;
}

.map h2 {
    color: #ff4c4c;
    margin-bottom: 20px;
}

.map-container {
    width: 100%;
    max-width: 900px;
    height: 300px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 8px;
}

/* Social Media Section */
.social-media {
    padding: 40px 20px;
    text-align: center;
    background: #ecca9f;
   
}

.social-media h2 {
    color: #333;
    margin-bottom: 20px;
}

.social-media .social-links {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.social-media .social-links img {
    width: 40px;
    height: 40px;
    transition: transform 0.3s ease;
}

.social-media .social-links img:hover {
    transform: scale(1.2);
}

/* Footer */
.footer {
    background: #fbf5dd;
    color:  #333;
    text-align: center;
    padding: 20px 10px;
    margin-top: 0px;
}

.footer p {
    margin: 0;
    font-size: 0.9rem;
}
.col{
    background-color:  #fbf5dd;
}
.info-item:hover{
  background-color: #fbf5dd;
  position: relative;
  transform: translateY(-10px);
  transition: transform 0.3s ease;
}
.donar_map{
    /* height:1 ; */
    width:100%;

}

    </style>
</head>
<body>
    <header class="header">
        <h1>Contact Us</h1>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="donate.php">Donate Blood</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>We'd Love to Hear From You!</h1>
        <p>Have questions, feedback, or need help? Contact us through the form below or via our office details.</p>
        <img src="../assets/img/donar_map.png" alt="" class="donar_map">
       
    </section>

    <section class="contact-form col">
        <h2>Contact Form</h2>
        <form action="contact.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>

            <label for="message">Your Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>

            <button type="submit" class="btn-submit" id="con_submit">Send Message</button>
        </form>
    </section>

    <section class="office-info ">
        <h2>Our Office</h2>
        <div class="info-container">
            <div class="info-item">
                <h3>Address</h3>
                <p>123, Donation Lane, City Center, Metro City</p>
            </div>
            <div class="info-item">
                <h3>Email</h3>
                <p>support@blooddonationportal.com</p>
            </div>
            <div class="info-item">
                <h3>Phone</h3>
                <p>+1 234 567 890</p>
            </div>
            <div class="info-item">
                <h3>Working Hours</h3>
                <p>Monday - Friday: 9 AM - 6 PM</p>
                <p>Saturday: 10 AM - 2 PM</p>
            </div>
        </div>
    </section>

    <section class="map" id="map">
        <h2>Find Us on the Map</h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.464013854676!2d77.46719987409628!3d28.67576318211875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf18a012b899f%3A0x5877fd5186901cdc!2sGovernment%20Polytechnic%20Ghaziabad!5e0!3m2!1sen!2sin!4v1737737826549!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="social-media">
        <h2>Follow Us</h2>
        <div class="social-links">
            <a href="#"><img src="../assets/img/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="../assets/img/twitter.png" alt="Twitter"></a>
            <a href="#"><img src="../assets/img/instagram.png" alt="Instagram"></a>
            <a href="#"><img src="../assets/img/linkedin.png" alt="LinkedIn"></a>
            <a href="#"><img src="../assets/img/github.png" alt="Github"></a>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Blood Donation Portal. All Rights Reserved. | Together, We Save Lives.</p>
    </footer>
</body>
</html>
