<?php
session_start(); 

$conn = new mysqli("127.0.0.1", "root", "", "userdb", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = trim($_POST['email']);
$pass  = trim($_POST['password']);


$email = strtolower($email);


if (strlen($email) < 10) {
    die("Email must be at least 10 characters long!");
}

if (strlen($pass) < 6) {
    die("Password must be at least 6 characters long!");
}


$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if (!$result) {
    die("Database Error: " . $conn->error);
}

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    
    if (strcmp($row['pass'], $pass) == 0) {

       
        $_SESSION['email'] = $row['email'];
        $_SESSION['fullname'] = $row['fullname'];

        echo "Login Successful! <br>";
        print "Welcome " . $row['fullname'];

        header("Location: profile.php");
        exit();

    } else {
        die("<h2>Incorrect Password ❌</h2>");
    }

} else {
    die("<h2>User not found ❌</h2>");
}

$conn->close();
?>
