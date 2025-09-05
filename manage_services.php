<?php
include 'db_connect.php';
$message = '';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM services WHERE id=?");
    $stmt->bind_param("i", $id);
    if($stmt->execute()){
        $message = "Service deleted successfully!";
    } else {
        $message = "Error deleting service!";
    }
    $stmt->close();
}

$services = $conn->query("SELECT * FROM services ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/commoncomponents.css">
    <link rel="stylesheet" href="css/manage_services.css">
</head>
<body>
<nav class="navbar navbar-expand-lg shadow-sm py-3">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="admin_dashboard.php">
            <img src="images/homepage/logo.png" alt="Logo" class="logo me-2">
            <span class="brand-name">SalonNilu Admin</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a href="admin_dashboard.php" class="nav-link">Dashboard</a>
                </li>
                
                <li class="nav-item ms-lg-3">
                    <a href="logout.php" class="btn btn-danger btn-sm px-3">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-5">
    <h2 class="text-center mb-4" style="color:#ffd700;">Manage Services</h2>

    <?php if($message != ''): ?>
        <div class="alert alert-info text-center"><?php echo $message; ?></div>
    <?php endif; ?>

    <div class="mb-3 text-end">
        <a href="add_service.php" class="btn btn-primary">Add New Service</a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover text-center align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Service Name</th>
                    <th>Price (LKR)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $services->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['category']; ?></td>
                        <td><?php echo $row['service_name']; ?></td>
                        <td><?php echo number_format($row['price'],2); ?></td>
                        <td>
                            <a href="edit_service.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="manage_services.php?delete=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
