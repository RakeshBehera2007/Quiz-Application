<?php
include 'config.php';

if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Select Quiz Category</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="card">
        <h2>Welcome, <?php echo $_SESSION['full_name']; ?> <a href="logout.php" style="float:right;">Logout</a></h2>
        <?php if($_SESSION['role'] == 'admin') { echo '<p><a href="admin_login.php">Admin Panel</a></p>'; } ?>
        
        <?php
        // Display active remarks
        $remarks_query = "SELECT remark_text FROM remarks WHERE is_active = 1 ORDER BY created_at DESC";
        $remarks_result = mysqli_query($conn, $remarks_query);
        if(mysqli_num_rows($remarks_result) > 0) {
            echo "<div class='remarks-section' style='background: rgba(255,255,255,0.9); padding: 20px; border-radius: 15px; margin-bottom: 30px; border-left: 5px solid #667eea;'>";
            echo "<h3 style='color: #000; margin-bottom: 15px;'>Important Announcements:</h3>";
            echo "<ul style='color: #000; font-size: 18px; line-height: 1.6;'>";
            while($remark = mysqli_fetch_assoc($remarks_result)) {
                echo "<li>" . htmlspecialchars($remark['remark_text']) . "</li>";
            }
            echo "</ul>";
            echo "</div>";
        }
        ?>
        
        <div class="category-section">
            <h3 style="color: #000;">Select a Quiz Category</h3>
            <div class="category-list">
                <a href="quize.php?category=Technical" class="category-btn tech">Technical</a>
                <a href="quize.php?category=General%20Knowledge" class="category-btn general">General Knowledge</a>
                <a href="quize.php?category=Science" class="category-btn science">Science</a>
                <a href="quize.php?category=History" class="category-btn history">History</a>
                <a href="quize.php?category=Math" class="category-btn math">Math</a>
                <a href="quize.php?category=C%20Programming" class="category-btn cprog">C Programming</a>
                <a href="quize.php?category=C%2B%2B%20Programming" class="category-btn cppprog">C++ Programming</a>
                <a href="quize.php?category=Java%20Programming" class="category-btn javaprog">Java Programming</a>
                <a href="quize.php?category=Python%20Programming" class="category-btn pythonprog">Python Programming</a>
                <a href="quize.php?category=JavaScript%20Programming" class="category-btn jsprog">JavaScript Programming</a>
                <a href="quize.php?category=Data%20Structures%20%26%20Algorithms" class="category-btn dsa">Data Structures & Algorithms</a>
                <a href="quize.php?category=Operating%20Systems" class="category-btn os">Operating Systems</a>
            </div>
        </div>

    </div>
</div>
</body>
</html>