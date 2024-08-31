<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MITUMBAA STORE</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
    <div class="header">
    <div class="container">
        <div class="navbar">
            <h1 class="Logo">MITUMBAA STORE</h1>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            </div>
            
            <!-- Cart Icon -->
    <div id="cart-icon">
        <img src="img/3.png" width="20px" height="30px"></a>
        
            <img src="img/3.png" alt="Cart" class ="menu-icon" id="cart-icon" >
        </div>
    
        <!-- Cart Section -->
        <div class="cart hidden">
            <h2>Shopping Cart</h2>
            <ul id="cart-items">
                <!-- Cart items will be added here -->
            </ul>
            <p>Total: Ksh <span id="total-price">0</span></p>
            <!--cancel and pay-->
            <div class="cart-actions">
    <button
        id="cancel-button"
        class="cart-button">Cancel
            </button>
    <button
    id="pay-button"
        class="pay-button">Pay
    </button>
    
    
            </div>
        </div>
    </div>
    </div>
<!----account page-->
<div class="account-page">
    <div class="container">
        <div class="row">
            
            <div class="col-2">
                <img src="img/f7.jpg" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Log in</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form id="LoginForm">
                        <input type="text" placeholder="Username">
                        <input type="password" placeholder="Password">
                        <button type="submit" class="btn">Log in</button>
                        <span class="forgot-password"><a href="#">Forgot Password?</a></span>
                    </form>
                    <form id="RegForm">
                        <input type="text" placeholder="Username">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Password">
                        <input type="password" placeholder="Confirm Password">
                        <button type="submit" class="btn">Register</button>
                    </form>
                </div>      
            </div>
        </div>
    </div>
</div>

<!---footer-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download the app</h3>
                <p>Download app for android and ios mobile phone</p>
                <div class="app-logo">
                    <img src="img/y.png">
                    <img src="img/z.png">
                </div>
            </div>
            <div class="footer-col-2">
                <h3>SECONDHAND STORE<h3>
                <p>Our main purpose is to utilize used clothes products to sustain fashion and minimize wastage.</p>
        </div>
       <div class ="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
    </div>
    <div class ="footer-col-3">
        <h3>Follow Us</h3>
        <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>YouTube</li>
        </ul>
</div>
</div>
<hr>
<p class="copyright">Copyright 2020 - Easy Tutorials</p>
<!--js for toggle menu-->
<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px"
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
    {
        MenuItems.style.maxHeight = "200px"
    }
    else
    {
        MenuItems.style.maxHeight = "0px"
    }
    }
</script>
<!---js for toggle form-->
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register(){
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }
    function login(){
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }
</script>
</body>
</html>