<?php
session_start();
require_once "config/database.php";


if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];


$user = $usersCollection->findOne(["email" => $email]);

if ($user) {
    $fullname = $user['fullname'];
    $email = $user['email'];
} else {
    $fullname = "User";
    $email = "Not found";
}

?>

<h2>Welcome <?php echo $fullname; ?>!!!</h2>