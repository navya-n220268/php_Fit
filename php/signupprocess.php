<?php
// Database connection with port 3307
$conn = new mysqli("127.0.0.1", "root", "", "userdb", 3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Insert data into database
$sql = "INSERT INTO users (fullname, email, pass)
        VALUES ('$fullname', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Signup successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
