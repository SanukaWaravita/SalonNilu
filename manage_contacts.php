<?php
session_start();
// Restrict access to admins only
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: login.php");
    exit;
}
include 'db_connect.php';

// Handle message deletion
if(isset($_GET['delete_id'])){
    $id = intval($_GET['delete_id']);
    $stmt = $conn->prepare("DELETE FROM contacts WHERE id = ?");
    $stmt->bind_param("i", $id);
    if($stmt->execute()){
        $message = "Message deleted successfully.";
    } else {
        $message = "Error deleting message: " . $conn->error;
    }
    $stmt->close();
}

// Fetch all contact messages
$contacts = $conn->query("SELECT * FROM contacts ORDER BY submitted_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Contact Messages - SalonNilu</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/commoncomponents.css">
    <link rel="stylesheet" href="css/manage_services.css">
    <style>
        .table-responsive { background: #fff; border-radius: 0.5rem; padding: 1rem; }
        .message-cell { max-width: 250px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
        .message-cell:hover { white-space: normal; overflow: visible; }
    </style>
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
                <li class="nav-item ms-lg-3">
                    <a href="logout.php" class="btn btn-danger btn-sm px-3">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-5">
    <h2 class="text-center mb-4" style="color:#ffd700;">Manage Contact Messages</h2>

    <?php if(isset($message)): ?>
        <div class="alert alert-info text-center"><?php echo $message; ?></div>
    <?php endif; ?>

    <div class="table-responsive">
        <?php if ($contacts->num_rows > 0): ?>
        <table class="table table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Reason</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $contacts->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['first_name'] . ' ' . $row['last_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                    <td><?php echo ucfirst(htmlspecialchars($row['contact_reason'])); ?></td>
                    <td><?php echo htmlspecialchars($row['subject']); ?></td>
                    <td class="message-cell" title="<?php echo htmlspecialchars($row['message']); ?>"><?php echo htmlspecialchars($row['message']); ?></td>
                    <td><?php echo date('M j, Y g:i A', strtotime($row['submitted_at'])); ?></td>
                    <td>
                        <a href="manage_contacts.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this message?');">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="text-center py-5">
                <h4>No contact messages found.</h4>
                <p class="text-muted">The inbox is empty.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php $conn->close(); ?>