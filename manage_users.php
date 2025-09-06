<?php
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit;
}
include 'db_connect.php';
$message = '';

if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    $message = "User deleted successfully.";
}

$result = $conn->query("SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Users</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/commoncomponents.css" rel="stylesheet">
<link href="css/manage_users.css" rel="stylesheet">
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

<div class="container booking-container">
    <h2>Manage Users</h2>
    <?php if($message) echo "<div class='alert alert-success'>$message</div>"; ?>
    <div class="text-end mb-3">
        <a href="add_user.php" class="btn btn-primary btn-sm">Add New User</a>

    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['username']) ?></td>
                    <td><?= $row['role'] ?></td>
                    <td>
                        <a href="edit_user.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="manage_users.php?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
