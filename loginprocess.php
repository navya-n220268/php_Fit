<?php
session_start(); // ✅ 1. Start session first

// Database connection (port 3307)
$conn = new mysqli("127.0.0.1", "root", "", "userdb", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$pass = $_POST['password'];

// Check user in database
$sql = "SELECT * FROM users WHERE email='$email' AND pass='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // ✅ 2. Fetch user data
    $row = $result->fetch_assoc();

    // ✅ 3. Store session variables
    $_SESSION['email'] = $row['email'];
    $_SESSION['fullname'] = $row['fullname']; // if fullname column exists

    // ✅ 4. Redirect to profile page
    header("Location: profile.php");

} else {
    echo "<h2>Invalid Email or Password ❌</h2>";
}

$conn->close();
?>
