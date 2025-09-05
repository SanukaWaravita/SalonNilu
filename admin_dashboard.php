<?php

session_start();


include 'db_connect.php';

if(!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// login information
$username = $_SESSION["username"];
$user_id = $_SESSION["user_id"];
$role = $_SESSION["role"];

// stats
$booking_count = 0;
$services_count = 0;

// count bookings
$sql_bookings = "SELECT COUNT(*) as count FROM booking";
$result_bookings = $conn->query($sql_bookings);
if($result_bookings) {
    $row = $result_bookings->fetch_assoc();
    $booking_count = $row['count'];
}

// Count total services
$sql_services = "SELECT COUNT(*) as count FROM services";
$result_services = $conn->query($sql_services);
if($result_services) {
    $row = $result_services->fetch_assoc();
    $services_count = $row['count'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SalonNilu</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/commoncomponents.css">
    <link rel="stylesheet" href="css/admin_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="admin_dashboard.php">
                <img src="images/homepage/logo.png" alt="Logo" class="logo me-2">
                <span class="brand-name">SalonNilu Admin</span>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <span class="nav-link text-light">Welcome, <?php echo htmlspecialchars($username); ?>! (<?php echo $role; ?>)</span>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="logout.php" class="btn btn-danger btn-sm px-3">
                            <i class="fas fa-sign-out-alt me-1"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dashboard Header -->
    <div class="dashboard-header">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Admin Dashboard</h1>
            <p class="lead">Manage your salon efficiently from one place</p>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="container mb-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-number"><?php echo $booking_count; ?></div>
                    <div class="stat-label" style="font-size: 1.5rem; font-weight: bold;">Total Bookings</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-number"><?php echo $services_count; ?></div>
                    <div class="stat-label" style="font-size: 1.5rem; font-weight: bold;">Services Offered</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-number">1</div>
                    <div class="stat-label" style="font-size: 1.5rem; font-weight: bold;">Active Admin</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Cards -->
    <div class="container mb-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fas fa-calendar-check feature-icon"></i>
                    <h4 style="font-size: 1.5rem; font-weight: bold; color:aliceblue">View Bookings</h4>
                    <p style="font-size: 1.1rem; font-weight: bold; font-style:italic">See all customer appointments and manage schedules</p>
                    <a href="view_booking.php" class="btn btn-primary mt-2">Manage</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fas fa-scissors feature-icon"></i>
                    <h4 style="font-size: 1.5rem; font-weight: bold; color:aliceblue">Manage Services</h4>
                    <p style="font-size: 1.1rem; font-weight: bold; font-style:italic">Add, edit, or remove services and prices</p>
                    <a href="manage_services.php" class="btn btn-primary mt-2">Manage</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fas fa-users feature-icon"></i>
                    <h4 style="font-size: 1.5rem; font-weight: bold; color:aliceblue">Manage Users</h4>
                    <p style="font-size: 1.1rem; font-weight: bold; font-style:italic">Add staff members or other administrators</p>
                    <a href="manage_users.php" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>