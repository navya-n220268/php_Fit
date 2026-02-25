<?php
include "profiledata.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile | FitCulture</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="media.css">
</head>
<body>

<header class="profile-header">
    <h2>MyProfile</h2>
</header>

<nav class="navbar">
    <a href="index.html">Home</a>
    <a href="order.html">Orders</a>
    <a href="collection.html">Collection</a>
</nav>

<section class="user-box">
    <div class="icon">👤</div>
    <div>
        <h3><?php echo $fullname; ?></h3>
        <p><?php echo $email; ?></p>
    </div>
</section>

<section class="options">

    <div class="option-card">
        <span>✏️</span>
        <div>
            <h4><a href="edit.html">Edit Profile</a></h4>
            <p>Update personal details</p>
        </div>
    </div>

    <div class="option-card">
        
        <span>📦</span>
        <div>
            <h4><a href="order.html">Orders</a></h4>
            <p>Check your order status</p>
        </div>
    </div>

    <div class="option-card">
        <span>❤️</span>
        <div>
            <h4><a href="wish.html">Wishlist</a></h4>
            <p>Your saved styles</p>
        </div>
    </div>

    <div class="option-card">
        <span>🏷️</span>
        <div>
            <h4><a href="coupon.html">Coupons</a></h4>
            <p>Manage coupons & offers</p>
        </div>
    </div>

    <div class="option-card">
        <span>📍</span>
        <div>
            <h4><a href="Address.html">Saved Addresses</a></h4>
            <p>Edit delivery locations</p>
        </div>
    </div>

    <div class="option-card">
        <span>⚙️</span>
        <div>
            <h4><a href="settings.html">Settings</a></h4>
            <p>Account & preferences</p>
        </div>
    </div>

    <div class="option-card">
        <span>❓</span>
        <div>
            <h4><a href="help.html">Help</a></h4>
            <p>Help & FAQs</p>
        </div>
    </div>
    <div class="option-card logout">
        <span>🚪</span>
        <div>
            <h4><a href="logout.php">Logout</a></h4>
            <p>Sign out of your account</p>
        </div>
    </div>

    <div class="option-card">
    <span>🗑️</span>
    <div>
        <h4>
            <form action="delete.php" method="POST"
                  onsubmit="return confirm('Are you sure you want to delete your account permanently?');"
                  style="display:inline;">
                <button type="submit" 
                        style="background:none;border:none;color:black;font-size:16px;cursor:pointer;font-weight:bold;">Delete Account
                </button>
            </form>
        </h4>
        <p>Permanently remove your account</p>
    </div>
</div>


</section>

</body>
</html>
