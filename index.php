<?php
include 'config.php';

if(isset($_SESSION['user_id'])) {
    header("Location: categories.php");
    exit();
}

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if(password_verify($password, $user['password'])) {
            if($user['role'] == 'admin' || $user['department'] == 'CSE' || $user['department'] == NULL) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['full_name'] = $user['full_name'];
                $_SESSION['role'] = $user['role'];
                header("Location: categories.php");
                exit();
            } else {
                $error = "Access denied. Only CSE department allowed.";
            }
        } else {
            $error = "Invalid password.";
        }
    } else {
        header("Location: register.php?email=" . urlencode($email));
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
    <div class="nav-container">
        <h1 class="nav-brand">Quiz Application</h1>
        <a href="admin_login.php" class="admin-link">Admin Panel</a>
    </div>
</nav>
<div class="container">
    <div class="card">
        <h2>Quiz Login</h2>
        <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <p>New user? <a href="register.php">Register Here</a></p>
    </div>
   
</div>
</body>
</html>