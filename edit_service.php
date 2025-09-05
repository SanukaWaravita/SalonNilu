<?php
include 'db_connect.php';
$message = '';

if(!isset($_GET['id'])){
    header("Location: manage_services.php");
    exit;
}

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM services WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$service = $result->fetch_assoc();
$stmt->close();

if(isset($_POST['update'])){
    $category = $_POST['category'];
    $service_name = $_POST['service_name'];
    $price = $_POST['price'];

    if(!empty($category) && !empty($service_name) && !empty($price)){
        $stmt = $conn->prepare("UPDATE services SET category=?, service_name=?, price=? WHERE id=?");
        $stmt->bind_param("ssdi", $category, $service_name, $price, $id);
        if($stmt->execute()){
            $message = "Service updated successfully!";
        } else {
            $message = "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $message = "All fields are required!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/manage_services.css">
</head>
<body>
<div class="container py-5">
    <h2 class="text-center mb-4" style="color:#ffd700;">Edit Service</h2>

    <?php if($message != ''): ?>
        <div class="alert alert-info text-center"><?php echo $message; ?></div>
    <?php endif; ?>

    <form method="POST" class="mx-auto" style="max-width:500px;">
        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control" value="<?php echo $service['category']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Service Name</label>
            <input type="text" name="service_name" class="form-control" value="<?php echo $service['service_name']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Price (LKR)</label>
            <input type="number" step="0.01" name="price" class="form-control" value="<?php echo $service['price']; ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-primary w-100">Update Service</button>
        <a href="manage_services.php" class="btn btn-outline-light w-100 mt-2">Back to Manage Services</a>
    </form>
</div>
</body>
</html>
