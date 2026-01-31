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
    <title>Request Blood - Blood Donation Portal</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color:   #ecca9f;
}

header {
    background-color: #ecca9f;
    color: black;
    padding: 10px 0;
    text-align: center;
}

nav a {
    margin: 0 15px;
    text-decoration: none;
    color: #333;
}
nav a:hover{
    color:#f03737;
}

nav a.active {
    font-weight: bold;
    text-decoration: underline;
}

.hero {
    background:  #fbf5dd;
    text-align: center;
    padding: 30px 10px;
}

.hero h1 {
    color: #ff4c4c;
    font-size: 2rem;
}

.request-form, .recent-requests, .how-it-works {
    padding: 20px;
    margin: 20px auto;
    width: 80%;
    max-width: 800px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.request-form form label, 
.request-form form input, 
.request-form form select, 
.request-form form textarea, 
.request-form form button {
    display: block;
    width: 100%;
    margin-bottom: 15px;
}

.request-form form button {
    background: #ff4c4c;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.request-form form button:hover {
    background: #d43f3f;
}

.recent-requests{
    background-color: #fbf5dd;
}

.recent-requests ul {
    list-style-type: none;
    padding: 0;
}

.recent-requests li {
   
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

footer {
    background: #fbf5dd;
    color: black;
    text-align: center;
    padding: 10px 0;
}
.how-it-works {
    background-color:#fbf5dd;
}


    </style>
</head>
<body>
    <header >
        <h1>Blood Donation Portal</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="donate.php">Donate Blood</a>
            <a href="contact.php">Contact Us</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Request Blood to Save Lives</h1>
            <p>If you or someone you know needs blood, submit a request below. Our donors are here to help!</p>
        </section>

        <section class="request-form">
            <h2>Submit Your Request</h2>
            <form id="blood-request-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>

                <label for="contact">Contact Number:</label>
                <input type="text" id="contact" name="contact" placeholder="Enter your contact number" required>

                <label for="email">Email (Optional):</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">

                <label for="blood-group">Blood Group:</label>
                <select id="blood-group" name="blood-group" required>
                    <option value="">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>

                <label for="units">Units Required:</label>
                <input type="number" id="units" name="units" placeholder="Enter number of units" required>

                <label for="location">Hospital/Location:</label>
                <input type="text" id="location" name="location" placeholder="Enter location or hospital name" required>

                <label for="urgency">Urgency Level:</label>
                <select id="urgency" name="urgency" required>
                    <option value="Immediate">Immediate</option>
                    <option value="Within 24 Hours">Within 24 Hours</option>
                    <option value="Within 3 Days">Within 3 Days</option>
                </select>

                <label for="date">Date Required:</label>
                <input type="date" id="date" name="date" required>

                <label for="reason">Reason for Request:</label>
                <textarea id="reason" name="reason" rows="4" placeholder="Explain why blood is needed" required></textarea>

                <button type="submit" class="submit-btn">Submit Request</button>
            </form>
        </section>
    
     
        <section class="recent-requests col">
            <h2>Recent Requests</h2>
            <ul>
                <li><strong>Name:</strong> Rahul - <strong>Blood Group:</strong> O+ - <strong>Urgency:</strong> Immediate</li>
                <li><strong>Name:</strong> Priya - <strong>Blood Group:</strong> AB- - <strong>Urgency:</strong> Within 24 Hours</li>
                <li><strong>Name:</strong> Ankit - <strong>Blood Group:</strong> B+ - <strong>Urgency:</strong> Within 3 Days</li>
            </ul>
        </section>
      

        <section class="how-it-works ">
            <h2>How It Works</h2>
            <p>Submitting a request is simple:</p>
            <ol>
                <li>Fill out the request form with accurate details.</li>
                <li>Your request will be reviewed and shared with donors in your area.</li>
                <li>Donors will contact you directly to arrange the donation.</li>
            </ol>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Blood Donation Portal. All Rights Reserved.</p>
    </footer>
</body>
</html>
