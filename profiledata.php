<?php
session_start();

// Database connection
$conn = new mysqli("127.0.0.1", "root", "", "userdb", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get logged-in user email from session
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];

// Fetch user data from database
$sql = "SELECT fullname, email FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullname = $row['fullname'];
    $email = $row['email'];
} else {
    $fullname = "User";
    $email = "Not found";
}

$conn->close();
?>
