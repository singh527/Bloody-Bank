<?php
session_start();
// if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
//     header('Location: login.php'); // Redirect to login if not authenticated
//     exit;
// }
include 'db.php';
$user_id = $_SESSION['user_id'];
$user_query = "SELECT * FROM registration WHERE mobile = $user_id";
$user_result = $conn->query($user_query);
$user = $user_result->fetch_assoc();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blood Bank Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color:  #fbf5dd;
        }
        .sidebar {
            margin-top: 50px;
            background-color: #dc3545;
            color: white;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            overflow-y: auto;
            z-index: 1000;
            transition: transform 0.3s ease;
        }
        .sidebar-toggle {
            display: none;
        }
        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
        .dashboard-content {
            margin-left: 250px;
            padding: 20px;
        }
        .nav-link.active {
            background-color: rgba(255,255,255,0.2);
        }
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar-toggle {
                display: block;
                position: fixed;
                top: 10px;
                left: 10px;
                z-index: 1100;
            }
            .dashboard-content {
                margin-left: 0;
            }
            .sidebar.show {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <!-- nav bar -->
    <nav
    class="navbar navbar-expand-lg navbar-light navbar sticky-top navbar-light"
    style="background-color:  #ecca9f"
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
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="about.php"
              >About Us</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="index.php#camp">Nearest Camp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="index.php#availability"
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
          <li class="nav-item">
            <a
              class="nav-link btn btn-danger text-white"
              href="logout.php"
              target="_blank"
              >Log Out/Sign Out </a
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
     <!-- toggler button -->
    <button class="btn btn-danger sidebar-toggle" onclick="toggleSidebar()">
        <i class="bi bi-list"></i>
    </button>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar p-4" id="sidebar">
                <div class="text-center mb-5">
                    <img src="./assets/img/2.png" class="profile-img mb-3" alt="User Profile">
                    <h4><?php echo htmlspecialchars($user['name']); ?></h4>
                    <p class="text-light"><?php echo htmlspecialchars($user['blood']); ?>  Blood Group</p>
                </div>
                
                <div class="nav flex-column">
                    <a href="#profile" class="nav-link text-white mb-2 active" onclick="showSection('profile')">
                        <i class="bi bi-person me-2"></i> Profile
                    </a>
                    <a href="#donation" class="nav-link text-white mb-2" onclick="showSection('donation')">
                        <i class="bi bi-heart me-2"></i> Donation
                    </a>
                    <a href="#camps" class="nav-link text-white mb-2" onclick="showSection('camps')">
                        <i class="bi bi-geo-alt me-2"></i> Blood Camps
                    </a>
                    <a href="#request" class="nav-link text-white mb-2" onclick="showSection('request')">
                        <i class="bi bi-droplet me-2"></i> Blood Request
                    </a>
                    <a href="#feedback" class="nav-link text-white mb-2" onclick="showSection('feedback')">
                        <i class="bi bi-chat me-2"></i> Feedback
                    </a>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 dashboard-content">
                <div id="profile-section" class="section">
                    <h2 class="mb-4">User Dashboard</h2>
                    
                    <!-- Profile Section -->
                    <div class="card mb-4">
                        <div class="card-header bg-danger text-white">
                            Personal Information
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
                                    <p><strong>Blood Group:</strong> <?php echo htmlspecialchars($user['blood']); ?> </p>
                                    <p><strong>Contact:</strong> +91 <?php echo htmlspecialchars($user['mobile']); ?></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Total Donations:</strong> 0</p>
                                    <p><strong>Category:</strong> <?php echo htmlspecialchars($user['reg_type']); ?></p>
                                    <p><strong>Eligibility Status:</strong> <?php if($user['age']<20){ echo 'Not Eligeble';} else{ echo 'Eligeble';}?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header bg-danger text-white">
                            Personal Information
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
                                    <p><strong>Blood Group:</strong> <?php echo htmlspecialchars($user['blood']); ?> </p>
                                    <p><strong>Contact:</strong> +91 <?php echo htmlspecialchars($user['mobile']); ?></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Total Donations:</strong> 0</p>
                                    <p><strong>Category:</strong> <?php echo htmlspecialchars($user['reg_type']); ?></p>
                                    <p><strong>Eligibility Status:</strong> <?php if($user['age']<20){ echo 'Not Eligeble';} else{ echo ' Eligeble';}?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="donation-section" class="section" style="display:none;">
                    <h2>Donation History</h2>
                    <p>No donation records found.</p>
                </div>

                <div id="camps-section" class="section" style="display:none;">
                    <div class="card">
                        <div class="card-header bg-danger text-white">
                            Upcoming Blood Donation Camps
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Location</th>
                                            <th>Date</th>
                                            <th>Available Slots</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Civil Hospital, Delhi</td>
                                            <td>15 Feb 2025</td>
                                            <td>12</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary">Book Slot</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Red Cross Center, Mumbai</td>
                                            <td>22 Feb 2025</td>
                                            <td>8</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary">Book Slot</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="request-section" class="section" style="display:none;">
                    <h2>Blood Request</h2>
                    <p>No active blood requests.</p>
                </div>

                <div id="feedback-section" class="section" style="display:none;">
                    <h2>Feedback</h2>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Your Feedback</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Submit Feedback</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showSection(sectionName) {
            // Hide all sections
            document.querySelectorAll('.section').forEach(section => {
                section.style.display = 'none';
            });

            // Remove active class from all nav links
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });

            // Show selected section
            document.getElementById(`${sectionName}-section`).style.display = 'block';

            // Add active class to clicked nav link
            event.currentTarget.classList.add('active');

            // Close sidebar on mobile
            if (window.innerWidth <= 768) {
                document.getElementById('sidebar').classList.remove('show');
            }
        }

        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('show');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>