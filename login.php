<?php

session_start();

if(isset($_SESSION["user_id"])){
    header("Location: admin_dashboard.php");
    exit();
}

$error_message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db_connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);

    $sql = "SELECT id, username, password, role FROM users WHERE username = '$username'";

    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $user = $result->fetch_assoc();

        if($password == $user['password']){
            $_SESSION["user_id"] = $user['id'];
            $_SESSION["username"] = $user['username'];
            $_SESSION["role"] = $user['role'];

            header("Location: admin_dashboard.php");
            exit();
        }
        else{
            $error_message = "Invalid username or password.";
        }
    }
    else{
        $error_message = "Invalid username or password.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-container p-4 my-5 shadow">
                    <h2 class="text-center mb-4">Login</h2>

                    <?php
                    if(!empty($error_message)):
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error_message; ?>
                        </div>

                    <?php
                    endif;
                    ?>

                <form action="login.php" method="post">

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-login"><i class="fas fa-sign-in-alt me-2"></i>Login</button>

                </form>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>