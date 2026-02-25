<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitCulture | SignUp</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="logo">Fit<span>Culture</span></div>
    <nav>
        <a href="index.html">Home</a>
        <a href="login.html">Login</a>
        <a href="about.html">About</a>
    </nav>
</header>

<div class="login-container">
    <h2>Create Account</h2>
    <p>Please fill in the details to create your account</p>
    <hr class="divider">

    <form action="signupprocess.php" method="POST">
        <div class="input-box">
            <input type="text" name="fullname" placeholder="Full Name" required>
        </div>

        <div class="input-box">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit" class="login-btn">Sign Up</button>

        <div class="links">
            <p>Already have an account? <a href="login.html">Login</a></p>
        </div>
    </form>
</div>

</body>
</html>
