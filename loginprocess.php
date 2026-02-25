<?php
session_start();
require_once "config/database.php";

$email = trim($_POST['email']);
$pass  = trim($_POST['password']);


$email = strtolower($email);


if (strlen($email) < 10) {
    die("Email must be at least 10 characters long!");
}

if (strlen($pass) < 6) {
    die("Password must be at least 6 characters long!");
}



$user = $usersCollection->findOne(["email" => $email]);

if (!$user) {
    die("<h2>User not found </h2>");
}



if (!password_verify($pass, $user["password"])) {
    die("<h2>Incorrect Password </h2>");
}

$_SESSION['email'] = $user['email'];
$_SESSION['fullname'] = $user['fullname'];

echo "Login Successful! <br>";
echo "Welcome " . $user['fullname'];

header("Location: profile.php");
exit();
?>