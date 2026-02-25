<?php
require_once "config/database.php";


$fullname = trim($_POST['fullname']);
$email    = trim($_POST['email']);
$pass     = trim($_POST['password']);


$fullname = ucwords(strtolower($fullname));
$email = strtolower($email);


if (strlen($fullname) < 6) {
    die("Full Name must be at least 6 characters long!");
}


if (strlen($email) < 10) {
    die("Email must be at least 10 characters long!");
}


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



$existingUser = $usersCollection->findOne(["email" => $email]);

if ($existingUser) {
    die("Email already exists!");
}



$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);


$usersCollection->insertOne([
    "fullname" => $fullname,
    "email"    => $email,
    "password" => $hashedPassword,
    "created_at" => new MongoDB\BSON\UTCDateTime()
]);

echo "Signup successful!";
echo "<br>Welcome, $fullname";
?>