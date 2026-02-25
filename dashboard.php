<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
   exit();
} // keep this in comments for firebase


if(isset($_SESSION["github_user"])) {
    echo "<h3>GitHub User: " . $_SESSION["github_user"]["login"] . "</h3>";
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>FitCulture|Bag</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        

    </head>
    <body>
        <header>
            <h2 class="logo">Fit<span>Culture</span></h2>

            <p style="margin-left:20px;">
                Welcome, <b><?php echo $_SESSION['user']['name'] ?? "User"; ?></b>
             </p>

            <nav>
                <input type="text" placeholder="Search">
                <a href="index.php">Home</a>
                <a href="collection.php">Collection</a>
                <a href="OAuth_project/logout.php">Logout</a>  
            </nav>
        </header>

        <div class="sidebar">
            <a href="#">👤Profile</a>
            <a href="#">📦Orders</a>
            <a href="#">⚙Settings</a>
        </div>

        <section class="dashboard">
            <h2>DashBoard</h2>
            <div class="dash-cards">
                <div class="box"><a href="order.html">📦Orders</a><br><b>2</b></div>
                <div class="box"><a href="wish.html">❤️Wishlist</a><br><b>3</b></div>
                <div class="box"><a href="cart.html">🛍️Add cart</a><br><b>2</b></div>
            </div>
        </section>
    </body>

</html>