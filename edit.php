<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile | FitCulture</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="media.css">
</head>
<body>


<nav class="navbar">
    <a href="index.html">Home</a>
    <a href="profile.html">Profile</a>
    <a href="collection.html">Collection</a>
    <a href="edit-profile.html" class="active">Edit Profile</a>
    <a href="settings.html">Settings</a>
</nav>


<header class="page-header">
    <h2>Edit Profile</h2>
</header>


<section class="edit-profile-form">
    <div class="profile-pic">
        <img src="images/profile.jpeg" alt="Profile Picture"><br>
        <button>Change Photo</button>
    </div>

    <form>
        <label for="name">Full Name</label>
        <input type="text" id="name" value="Navya Sri">

        <label for="email">Email</label>
        <input type="email" id="email" value="navyasri@gmail.com">

        <label for="phone">Phone</label>
        <input type="text" id="phone" value="9876543210">

        <button type="submit">Save Changes</button>
    </form>
</section>

</body>
</html>
