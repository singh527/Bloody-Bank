<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup Page</title>
    <link rel="icon" href="../assets/img/logo.png" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color:  #ecca9f;
    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 100vh; */
}

.cont {
    background-color:  #fbf5dd;
    padding: 20px;
   margin-top :600px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 500px;
    text-align: center;
    position: absolute;
    transition: opacity 0.3s ease, transform 0.3s ease;
   
}

.hidden {
    opacity: 0;
    transform: translateY(-20px);
    pointer-events: none;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

label {
    display: block;
    margin: 10px 0 5px;
    text-align: left;
    color: #555;
}

input, select {
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

button {
    background-color: #f03737;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
}

button:hover {
    background-color:white;
    color: #f03737;
    border:1px solid #f03737 ;
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.reset-password, #show-register, #show-login {
    display: inline-block;
    margin-top: 10px;
    font-size: 14px;
    color: #007bff;
    text-decoration: none;
    cursor: pointer;
}

.reset-password:hover, #show-register:hover, #show-login:hover {
    text-decoration: underline;
}
.padding{
margin-top:1400px;
padding-top: 10px;
padding-bottom:10px;
margin-bottom:100px;
}
.header{
    height:50px;
    width:100%;
    position:fixed;
}
#signup-container h2{
    /* margin-top:-px; */
}
    
}
    </style>
</head>
<body>
<nav
      class="navbar header navbar-expand-lg navbar-light navbar sticky-top navbar-light"
      style="background-color: #fbf5dd"
    >
      <div class="container">
        
        <div class="">
          <a class="navbar-brand" href="./index.php" target="_blank">
            <img
              src="../assets/img/logo.png"
              alt="Logo"
              width="50"
              height="40"
              class="d-inline-block align-text-middle"
            /><B style="color: #f03737;">
            Bloody Bank
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

      </div>
    </nav>
    <!-- Login Page -->
    <div class="cont" id="login-container">
        <h2>Login</h2>
        <form action="registration.php" method="POST">
            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="log_submit">Login</button>
            
            <a href="#" class="reset-password">Forgot Password?</a>
        </form>
        <p>New user? <a href="#" id="show-register">Register here</a></p>
    </div>

    <!-- Signup Page -->
    <div  class="cont hidden padding" id="signup-container">
        <h2>Register</h2>
        <form action="registration.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="aadhar">Aadhar Number:</label>
            <input type="text" id="aadhar" name="aadhar" required>

            <label for="mobile-signup">Mobile Number:</label>
            <input type="text" id="mobile-signup" name="mobile" required>

            <label for="blood_signup">Blood Group:</label>
            <select id="blood-signup" name="blood" required>
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

            <label for="reg_type">Category:</label>
            <select id="reg_type" name="reg_type" required>
            <option value="" disabled selected>Select your category</option>
                <option value="donar">Donar</option>
                <option value="receiver">Receiver</option>
                <option value="both">Both</option>


            </select>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
            <option value="" disabled selected>Select your Gender</option>

                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="password-signup">Create Password:</label>
            <input type="password" id="password-signup" name="password" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm_password" required>

            <label for="email">Email (Optional):</label>
            <input type="email" id="email" name="email">

            <button type="submit" name="reg_submit">Register</button>
        </form>
        <p>Already have an account? <a href="./login.php" id="show-login">Login here</a></p>
    </div>
    
    <script src="script.js"></script>
</body>
</html>
