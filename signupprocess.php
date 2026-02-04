<?php

$conn = new mysqli("127.0.0.1", "root", "", "userdb", 3307);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$fullname = trim($_POST['fullname']);
$email    = trim($_POST['email']);
$pass     = trim($_POST['password']);


$fullname = ucwords(strtolower($fullname));

$email = strtolower($email);


if (strlen($fullname) < 6) {
    die("Full Name must be at least 5 characters long!");
}

if (strlen($email) < 10) {
    die("Email must be at least 10 characters long!");
}


//password
if (strlen($pass) < 8) {
    die("Password must be at least 8 characters long!");
}

$hasLetter = false;
$hasNumber = false;
$hasSpecial = false;

for ($i = 0; $i < strlen($pass); $i++) {
    $ch = $pass[$i];

    if (ctype_alpha($ch)) {
        $hasLetter = true;
    } elseif (ctype_digit($ch)) {
        $hasNumber = true;
    } else {
        $hasSpecial = true;
    }
}

if (!$hasLetter) {
    die("Password must contain at least one letter!");
}

if (!$hasNumber) {
    die("Password must contain at least one number!");
}

if (!$hasSpecial) {
    die("Password must contain at least one special character!");
}


$sql = "INSERT INTO users (fullname, email, pass)
        VALUES ('$fullname', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Signup successful!";
    print "<br>Welcome, $fullname";
} else {
    die("Database Insert Error: " . $conn->error);
}

$conn->close();
?>
