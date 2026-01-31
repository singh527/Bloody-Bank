<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php'); // Redirect to login if not authenticated
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
    <title>Blood Donation - Book Slot</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="../assets/img/logo.png" />
    <style>
        /* General Styles */
/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color:#fbf5dd;
}

header {
    /* background-color: #fbf5dd; */
    padding: 10px 20px;
    color:#ff4c4c ;
    position: sticky;
    top: 0;
    z-index: 1000;
}

header .nav-links {
    display: flex;
    justify-content: space-around;
    list-style: none;
    padding: 0;
    margin: 0;
}

header .nav-links a {
    color: #4a4e50;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

header .nav-links a:hover {
    color: #ff4c4c;
}

.hero {
    text-align: center;
    background-color: #ecca9f;;
    color: black;
    padding: 50px 20px;
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 20px;
    /* color: #ff4c4c;   */
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 30px;
}

.hero .btn-donate {
    background-color:#ff4c4c ;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: all 0.3s ease;
}

.hero .btn-donate:hover {
    background-color: white;
    color: #ff4c4c;
    border: 1px solid #ff4c4c;
}

.why-donate {
    text-align: center;
    padding: 40px 20px;
    background-color: #fff;
}

.why-donate h2 {
    margin-bottom: 20px;
    color: #333;
}

.why-donate p {
    font-size: 1rem;
    line-height: 1.6;
    color: #555;
}

.stats {
    display: flex;
    justify-content: space-around;
    background-color: #ecca9f;
    padding: 40px 20px;
    flex-wrap: wrap;
}

.stats .stat {
    text-align: center;
    flex: 1;
    margin: 10px;
}

.stats h3 {
    font-size: 2rem;
    color: #ff4c4c;
}

.stats p {
    font-size: 1rem;
    color: #555;
}

.book-slot {
    padding: 40px 20px;
    background-color: #fbf5dd;
    text-align: center;
}

.book-slot h2 {
    margin-bottom: 20px;
    color: #333;
}

.book-slot form {
    margin: 0 auto;
    width: 100%;
    max-width: 400px;
    text-align: left;
    background: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

input, select, textarea, button {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
    font-family: inherit;
}

button {
    background-color: #ff4c4c;
    color: white;
    font-weight: bold;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
}

button:hover {
    background-color: #ff6666;
}

footer {
    text-align: center;
    padding: 10px 20px;
    background-color:#ecca9f;
    color:black;
    font-size: 0.9rem;
}

footer p {
    margin: 0;
}
.col{
    background-color: #ecca9f;
}
.col1{
    background-color: #fbf5dd;
}


    </style>
</head>
<body>
    <header class="col1">
        <nav>
            <ul class="nav-links ">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="index.php#camp">Nearest Camps</a></li>
                <li><a href="#book-slot">Donate Now</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero col">
        <h1>Donate Blood, Save Lives</h1>
        <p>Every drop of blood counts! Your donation can save up to three lives.</p>
        <a href="#book-slot" class="btn-donate">Book Your Slot</a>
    </section>

    <section class="why-donate col1">
        <h2>Why Donate Blood?</h2>
        <p>Blood donation is one of the most noble acts of humanity. It helps save lives during surgeries, accidents, and medical emergencies. By donating blood, you contribute to the well-being of society and make a difference in someone's life.</p>
    </section>

    <section class="stats">
        <div class="stat">
           
            <i class="fas fa-users fa-3x text-primary mb-3"></i>
            <h3>3 Lives Saved</h3>
            <p>Every blood donation saves up to 3 lives.</p>
        </div>
        <div class="stat">
            <i class="fas fa-heartbeat fa-3x text-danger mb-3"></i>
            <h3>15 Minutes</h3>
            <p>Blood donation takes only 15 minutes of your time.</p>
        </div>
        <div class="stat">
            <i class="fas fa-hand-holding-water fa-3x text-success mb-3"></i>
            <h3>1 in 7</h3>
            <p>1 in 7 hospital patients need blood.</p>
        </div>
    </section>

    <section id="book-slot" class="book-slot">
        <h2>Book Your Slot</h2>
        <form action="#" method="POST" id="book-slot-form">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" placeholder="Enter your address" rows="3" required></textarea>

            <label for="blood-group">Blood Group:</label>
            <select id="blood-group" name="blood-group" required>
                <option value="" disabled selected>Select your blood group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="time">Preferred Time:</label>
            <input type="time" id="time" name="time" required>

            <button type="submit" id="submit-button">Book Slot</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Blood Donation Portal | All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
