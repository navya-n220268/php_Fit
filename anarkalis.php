<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitCulture|Anarkali Suits</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    


     <style>
        .popup{
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            border: 2px solid #666;
            background: rgba(0, 0, 0, 0.6);
            width: 100%;
            height: 100%;
        }
        .popup-box{
            background:#fff;
            width: 60%;
            margin: 6% auto;
            padding: 20px;
            position: relative;
            border-radius: 10px;
        }

        .popup:target{
            display: block;
        }
        iframe{
            width: 100%;
            height: 300px;
            border:none;
        }
    </style>
</head>
<body>

     <header>
    <h2 class="logo">Fit<span>Culture</span></h2>
    <nav>
        <input type="text" placeholder="Search">
        <a href="index.html">Home</a>
        <a href="dashboard.html">Bag</a>
        <a href="index.html">Logout</a>
    </nav>
</header>

    <div class="sidebar" >
            <a href="profile.html">👤Profile</a>
            <a href="order.html">📦Orders</a>
            <a href="settings.html">⚙Settings</a>
        </div>

    <section class="Products">
        <div class="product-grid">
            
                <div class="card">
                    <img src="images/a1.jpeg" alt="anarkali1" width="200px" height="240px">
                    <h4>Embroidered Anarkali Suit</h4>
                    <h5>₹3,500</h5>
                    <a href="cart.html" class="cart-btn">Add to Cart</a>
                    <a href="#sizechart"  style="padding: 10px 15px; background: palevioletred; color: white; text-decoration: none; border-radius: 5px; font-size: 15px;">View Size Chart</a>
                 </div>

                <div class="card">
                    <img src="images/a2.jpeg" alt="anarkali2">
                    <h4>Floral Anarkali Suit</h4>
                    <h5>₹4,000</h5>
                    <a href="cart.html" class="cart-btn">Add to Cart</a>
                    <a href="#sizechart" style="padding: 10px 15px; background: palevioletred; color: white; text-decoration: none; border-radius: 5px; font-size: 15px;">View Size Chart</a>
                 </div>

                <div class="card">
                    <img src="images/a3.jpeg" alt="anarkali3">
                    <h4>Party Wear Anarkali Suit</h4>
                    <h5>₹5,500</h5>
                    <a href="cart.html" class="cart-btn">Add to Cart</a>
                    <a href="#sizechart" style="padding: 10px 15px; background: palevioletred; color: white; text-decoration: none; border-radius: 5px; font-size: 15px;">View Size Chart</a>
                </div>

                <div class="card">
                    <img src="images/a4.jpeg" alt="anarkali4">
                    <h4>Designer Anarkali Suit</h4>
                    <h5>₹6,200</h5>
                    <a href="cart.html" class="cart-btn">Add to Cart</a>
                    <a href="#sizechart" style="padding: 10px 15px; background: palevioletred; color: white; text-decoration: none; border-radius: 5px; font-size: 15px;">View Size Chart</a>
                </div>
        
        </div>
    </section>

    <div id="sizechart" class="popup">
        <div class="popup-box">
            <a href="#" style="position:absolute; top: 10px; right:15px; font-size: 22px; text-decoration: none;">✖</a>

            <iframe src="sizechart.html"></iframe>
        </div>
    </div>
</html>