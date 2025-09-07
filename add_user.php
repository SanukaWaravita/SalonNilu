<?php
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit;
}
include 'db_connect.php';
$message = '';

if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $role = $_POST['role'];

    $stmt = $conn->prepare("INSERT INTO users (username,password,role) VALUES (?,?,?)");
    $stmt->bind_param("sss", $username, $password, $role);
    if($stmt->execute()){
        $message = "User added successfully.";
    } else {
        $message = "Error: " . $conn->error;
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add User</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/manage_users.css" rel="stylesheet">
</head>
<body>
<div class="container booking-container">
    <h2>Add New User</h2>
    <?php if($message) echo "<div class='alert alert-success'>$message</div>"; ?>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Role</label>
            <select class="form-control" name="role" required>
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
                <option value="customer">Customer</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add User</button>
        <a href="manage_users.php" class="btn btn-outline-light">Cancel</a>
    </form>
</div>
</body>
</html>
