<?php
include 'config.php';

if(isset($_SESSION['admin_logged_in'])) {
    header("Location: admin.php");
    exit();
}

if(isset($_POST['admin_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === 'admin' && $password === 'admin@123') {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
    <div class="nav-container">
        <h1 class="nav-brand">Admin Login</h1>
        <a href="index.php" class="admin-link">Back to Main</a>
    </div>
</nav>
<div class="container">
    <div class="card">
        <h2>Admin Authentication</h2>
        <?php if(isset($error)) { echo "<div class='error'>$error</div>"; } ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="admin_login">Login as Admin</button>
        </form>
    </div>
</div>
</body>
</html>