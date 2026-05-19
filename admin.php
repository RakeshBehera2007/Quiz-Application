<?php
include 'config.php';

// Create remarks table if not exists
$table_query = "CREATE TABLE IF NOT EXISTS remarks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    remark_text TEXT NOT NULL,
    is_active TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
mysqli_query($conn, $table_query);

if(!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

// Handle remark updates
if(isset($_POST['update_remarks'])) {
    $remark_ids = isset($_POST['active_remarks']) ? $_POST['active_remarks'] : [];
    
    // First, set all to inactive
    mysqli_query($conn, "UPDATE remarks SET is_active = 0");
    
    // Then activate selected
    if(!empty($remark_ids)) {
        $ids = implode(',', array_map('intval', $remark_ids));
        mysqli_query($conn, "UPDATE remarks SET is_active = 1 WHERE id IN ($ids)");
    }
    
    $success = "Remarks updated successfully!";
}

// Handle adding new remark
if(isset($_POST['add_remark'])) {
    $remark_text = trim($_POST['new_remark']);
    if(!empty($remark_text)) {
        mysqli_query($conn, "INSERT INTO remarks (remark_text) VALUES ('" . mysqli_real_escape_string($conn, $remark_text) . "')");
        $success = "New remark added!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
    <div class="nav-container">
        <h1 class="nav-brand">Admin Dashboard</h1>
        <a href="logout.php" class="admin-link">Logout</a>
    </div>
</nav>
<div class="container">
    <?php if(isset($success)) { echo "<div class='success'>$success</div>"; } ?>
    
    <div class="card admin-card">
        <h2 class="admin-title">Recent Student Results</h2>
        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr class="admin-header">
                        <th>User Name</th>
                        <th>Category</th>
                        <th>Score</th>
                        <th>Correct</th>
                        <th>Wrong</th>
                        <th>Percentage</th>
                        <th>Exam Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT r.*, u.full_name FROM results r JOIN users u ON r.user_id = u.id ORDER BY r.exam_date DESC";
                    $result = mysqli_query($conn, $query);
                    $counter = 0;
                    while($row = mysqli_fetch_assoc($result)) {
                        $counter++;
                        $row_class = ($counter % 2 == 0) ? 'even' : 'odd';
                        echo "<tr class='admin-row $row_class'>";
                        echo "<td>" . htmlspecialchars($row['full_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['category']) . "</td>";
                        echo "<td><span class='score-badge'>" . $row['score'] . "/60</span></td>";
                        echo "<td><span class='correct-badge'>" . $row['correct_answers'] . "</span></td>";
                        echo "<td><span class='wrong-badge'>" . $row['wrong_answers'] . "</span></td>";
                        echo "<td><span class='percentage-badge'>" . number_format($row['percentage'], 2) . "%</span></td>";
                        echo "<td>" . date('M d, Y H:i', strtotime($row['exam_date'])) . "</td>";
                        echo "</tr>";
                    }
                    if($counter == 0) {
                        echo "<tr><td colspan='7' style='text-align:center; padding:20px;'>No results available yet</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="card admin-card">
        <h2 class="admin-title">Manage Remarks for Home Page</h2>
        
        <form method="post" style="margin-bottom: 30px;">
            <h3>Add New Remark</h3>
            <input type="text" name="new_remark" placeholder="Enter new remark text" required style="margin-bottom: 10px;">
            <button type="submit" name="add_remark" style="background: linear-gradient(45deg, #43e97b, #38f9d7);">Add Remark</button>
        </form>
        
        <form method="post">
            <h3>Select Remarks to Display on Home Page</h3>
            <?php
            $remarks_query = "SELECT * FROM remarks ORDER BY created_at DESC";
            $remarks_result = mysqli_query($conn, $remarks_query);
            while($remark = mysqli_fetch_assoc($remarks_result)) {
                $checked = $remark['is_active'] ? 'checked' : '';
                echo "<label style='display: block; margin: 10px 0; padding: 10px; background: rgba(255,255,255,0.8); border-radius: 8px;'>";
                echo "<input type='checkbox' name='active_remarks[]' value='" . $remark['id'] . "' $checked style='margin-right: 10px; transform: scale(1.2);'>";
                echo htmlspecialchars($remark['remark_text']);
                echo "</label>";
            }
            ?>
            <button type="submit" name="update_remarks" style="background: linear-gradient(45deg, #667eea, #764ba2); margin-top: 20px;">Update Selected Remarks</button>
        </form>
    </div>
</div>
</body>
</html>