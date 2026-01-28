<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> FitCulture | Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div class="logo">Fit<span>Culture</span></div>
    <nav>
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="contact.html">Contact</a>
    </nav>
</header>

<div class="login-container">
    <h2>Welcome Back</h2>
    <p>Please login to your account</p>

    <form action="loginprocess.php" method="POST">
        <div class="input-box">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit" class="login-btn">Login</button>

        <div class="links">
            <a href="forgot.html">Forgot Password?</a>
            <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
        </div>
    </form>
</div>

</body>
</html>
