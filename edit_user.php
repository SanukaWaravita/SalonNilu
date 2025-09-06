<?php
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit;
}
include 'db_connect.php';
$message = '';

$id = intval($_GET['id']);
$result = $conn->query("SELECT * FROM users WHERE id=$id");
if($result->num_rows != 1){
    header("Location: manage_users.php");
    exit;
}
$user = $result->fetch_assoc();

if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $role = $_POST['role'];
    if(!empty($_POST['password'])){
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET username=?, password=?, role=? WHERE id=?");
        $stmt->bind_param("sssi",$username,$password,$role,$id);
    } else {
        $stmt = $conn->prepare("UPDATE users SET username=?, role=? WHERE id=?");
        $stmt->bind_param("ssi",$username,$role,$id);
    }
    if($stmt->execute()){
        $message = "User updated successfully.";
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
<title>Edit User</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/manage_users.css" rel="stylesheet">
</head>
<body>
<div class="container booking-container">
    <h2>Edit User</h2>
    <?php if($message) echo "<div class='alert alert-success'>$message</div>"; ?>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password (leave blank to keep current)</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label class="form-label">Role</label>
            <select class="form-control" name="role" required>
                <option value="admin" <?= $user['role']=='admin'?'selected':'' ?>>Admin</option>
                <option value="staff" <?= $user['role']=='staff'?'selected':'' ?>>Staff</option>
                <option value="customer" <?= $user['role']=='customer'?'selected':'' ?>>Customer</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update User</button>
        <a href="manage_users.php" class="btn btn-outline-light">Cancel</a>
    </form>
</div>
</body>
</html>
