<?php
session_start();
require_once "config/database.php";


if (!isset($_SESSION['email'])) {
    die("Unauthorized access!");
}

$email = $_SESSION['email'];


$result = $usersCollection->deleteOne(["email" => $email]);

if ($result->getDeletedCount() > 0) {

    
    session_destroy();

    echo "<h2>User deleted successfully </h2>";
    echo "<a href='signup.html'>Signup Again</a>";

} else {
    echo "<h2>User not found </h2>";
}
?>