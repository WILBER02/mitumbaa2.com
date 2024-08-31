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
    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" href="styles.css">
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
                    <li><a href="buyer">Account</a></li>
                </ul>
            </nav>

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
    </div>

    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort by Price</option>
                <option>Sort by Popularity</option>
                <option>Sort by Rating</option>
                <option>Sort by Sale</option>
            </select>
        </div>

    <!-- Products Section -->

    <div class="products">
     <div class="row">
    
     <div class="product col-4" data-name="Product 1" data-price="1000" data-image="img/1f.jpg">
            <img src="img/1f.jpg" alt="Product 1 Image">
            <h2>Lady's jacket</h2>
            <p>Price: Ksh 450</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

        <div class="product col-4" data-name="Product 2" data-price="1000" data-image="img/10f.jpg">
            <img src="img/10f.jpg" alt="Product 2 Image">
            <h2>Black jacket</h2>
            <p>Price: Ksh 800</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

<div class="product col-4" id="shoes" data-name="Product 3" data-price="1000" data-image="img/z1.jpg">
            <img src="img/z1.jpg" alt="Product 3 Image">
            <h2>J4 shoes</h2>
            <p>Price: Ksh 400</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

            <div class="product col-4" data-name="Product 1" data-price="1000" data-image="img/1f.jpg">
                    <img src="img/1f.jpg" alt="Product 1 Image">
                    <h2>Lady's jacket</h2>
                    <p>Price: Ksh 450</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                </div>
<div class="row">
                <div class="product col-4" data-name="Product 1" data-price="1000" data-image="img/d3.jpg">
                <img src="img/d3.jpg" alt="Product 1 Image">
                <h2>Jordan Shoes</h2>
                <p>Price: Ksh 1200</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>

        <div class="product col-4" data-name="Product 2" data-price="1000" data-image="img/img5.jpg">
                <img src="img/img5.jpeg" alt="Product 2 Image">
                <h2>Light Blue Shirt</h2>
                <p>Price: Ksh 400</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        
        <div class="product col-4" data-name="Product 3" data-price="1000" data-image="img/1f.jpg">
                <img src="img/g.jpeg" alt="Product 3 Image">
                <h2>Jeans</h2>
                <p>Price: Ksh 500</p>
                <button class="add-to-cart">Add to Cart</button>
        </div>
        
        <div class="product col-4" data-name="Product 1" data-price="1000" data-image="img/1f.jpg">
                <img src="img/1f.jpg" alt="Product 1 Image">
                <h2>Lady's jacket</h2>
                <p>Price: Ksh 450</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            </div>
    </div>
    </div>
    

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594</span>
        </div>
    </div>
    </div>

    <!--footer--->
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
    <script src="script.js"></script>
    </body>
    </html>
