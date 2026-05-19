<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "quiz_app";

$conn = mysqli_connect($host, $user, $password, $database,3307);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

session_start();
?>