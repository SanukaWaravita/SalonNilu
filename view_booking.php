<?php
session_start();
include 'db_connect.php'; 

// Check if user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Handle booking deletion
if(isset($_GET['delete_id'])){
    $delete_id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM booking WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $delete_id);

    if($stmt->execute()){
        $success_message = "Booking deleted successfully.";

        // Check if table is empty, then reset AUTO_INCREMENT
        $check_empty = $conn->query("SELECT COUNT(*) AS count FROM booking");
        $row = $check_empty->fetch_assoc();
        if($row['count'] == 0){
            $conn->query("ALTER TABLE booking AUTO_INCREMENT = 1");
        }

    } else {
        $error_message = "Error deleting booking.";
    }
    $stmt->close();

    header("Location: view_booking.php");
    exit();
}

// Get booking data from database
$sql = "
    SELECT b.*, s.service_name 
    FROM booking b
    LEFT JOIN services s ON b.service_id = s.id
    ORDER BY b.booking_date DESC, b.booking_time DESC
";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bookings - SalonNilu</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/commoncomponents.css">
    <link rel="stylesheet" href="css/view_booking.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="admin_dashboard.php">
                <img src="images/homepage/logo.png" alt="Logo" class="logo me-2">
                <span class="brand-name">SalonNilu Admin</span>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a href="admin_dashboard.php" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="view_booking.php" class="nav-link active">View Bookings</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="logout.php" class="btn btn-danger btn-sm px-3">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container bookings-container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-4" style="color: #FFD700;">Customer Bookings</h2>

                <?php if(isset($success_message)): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $success_message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>

                <?php if(isset($error_message)): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $error_message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>

                <div class="table-responsive">
                    <?php if($result->num_rows > 0): ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Service</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo htmlspecialchars($row['firstname'] . ' ' . $row['lastname']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                <td><?php echo htmlspecialchars($row['service_name']); ?></td>
                                <td><?php echo $row['booking_date']; ?></td>
                                <td><?php echo $row['booking_time']; ?></td>
                                <td>
                                    <a href="view_booking.php?delete_id=<?php echo $row['id']; ?>" 
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('Are you sure you want to delete this booking?')">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <?php else: ?>
                    <div class="text-center py-4">
                        <h4 style="color: #FFD700;">No bookings found</h4>
                        <p class="text-light">No customers have made bookings yet.</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
