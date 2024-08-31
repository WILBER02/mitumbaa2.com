<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECONDHAND STORE</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                    <li><a href="seller">Seller</a></li>
                    <li><a href="admin">Admin</a></li>
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

<div class="row">
    <div class="col-2">
<h1>Give your Fashion<br> The best look!</h1>
<p>Fashion isn't always about the best outfit. It's about the best and trending<br>design that signifies uniqueness. Best outfit at the best time. </p>
<a href="product.php" class="btn">Explore Now &#8594;</a>
    </div>
    <div class="col-2">
<img src="img/img7.jpeg"alt="">
    </div>
</div>
    </div>
</div>
    </div>
    <!----- featured categories ----->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                <img src="img/f7.jpg">
                </div>
                <div class="col-3">
                <img src="img/6f.jpg">
                </div>
                <div class="col-3">
                    <img src="img/a6.jpg">
        </div>
            </div>
        </div>
    </div>
    <!---featured products--->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="product col-4">
            <a href="product-details.php"><img src="img/ar.jpeg"></a>
            <a href="product-details.php"><h2>Denim Short</h2></a>
                <p>Price: Ksh 450</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product col-4">
            <a href="product-details.php"><img src="img/imgf.jpeg"></a>
            <a href="product-details.php"><h2>Shirt</h2></a>
                <p>Price: Ksh 350</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
    
                <div class="product col-4">
                <img src="img/30f.jpg" alt="Product 1 Image">
                <h2>Jacket</h2>
                <p>Price: Ksh 450</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
                    <div class="product col-4">
                <img src="img/imgh.jpeg" alt="Product 1 Image">
                <h2>Airmax Shoes</h2>
                <p>Price: Ksh 800</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="product col-4">
            <a href="product-details.php"><img src="img/l.jpeg"></a>
            <a href="product-details.php"><h2>Denim Short</h2></a>
                <p>Price: Ksh 450</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product col-4">
                <img src="img/1f.jpg" alt="Product 1 Image">
                <h2>Lady's jacket</h2>
                <p>Price: Ksh 450</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
    
                <div class="product col-4">
                <img src="img/z2.jpg" alt="Product 1 Image">
                <h2>School Bag</h2>
                <p>Price: Ksh 400</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
                    <div class="product col-4">
                <img src="img/z8.jpg" alt="Product 1 Image">
                <h2>Lady's Shirt</h2>
                <p>Price: Ksh 300</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            </div>
            <div class="row">
            <div class="product col-4">
            <a href="product-details.php"><img src="img/z6.jpg"></a>
            <a href="product-details.php"><h2>Fashion Hood</h2></a>
                <p>Price: Ksh 500</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product col-4">
                <img src="img/g.jpeg" alt="Product 1 Image">
                <h2>Jeans</h2>
                <p>Price: Ksh 550</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
    
                <div class="product col-4">
                <img src="img/h.jpeg" alt="Product 1 Image">
                <h2>Jeans</h2>
                <p>Price: Ksh 600</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
                    <div class="product col-4">
                <img src="img/e4.jpeg" alt="Product 1 Image">
                <h2>Denim Coat</h2>
                <p>Price: Ksh 500</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            </div>
        
        </div>
    </div>
<!------offer---->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
               <img src="img/z1.jpg" class="offer-img">
            </div>
            <div class="col-2">
<p>Exclusively Available on MITUMBAA Store</p>
<h1>J4 shoes</h1>
<small>The high heeled shoes is mostly prefered for it's cool design and among the latest,<br> trending fashion. Made of long lasting material.</small><br>
<a href="product.php#shoes" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>
<!----testimonial----->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                 <i class="fa fa-quote-left"></i>
                <p>This is the best website for secondhand clothes ever</p>
                <div class="rating">
                <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="img/imgx.jpg">
                    <h3>Wilberforce Muhuyi</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
               <p>Old is never useless</p>
               <div class="rating">
               <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                   <img src="img/imgy.jpg">
                   <h3>Mike Kamau</h3>
           </div>
           <div class="col-3">
            <i class="fa fa-quote-left"></i>
           <p>You have to get the best out of everything</p>
           <div class="rating">
           <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
               </div>
               <img src="img/imgs.jpg">
               <h3>Gregory Jela</h3>
       </div>
        </div>
    </div>
</div>
<!----brands---->
<div class="brands">
    <div class="small_container">
        <div class="row">
            <div class="col-5">
<img src="img/8.png">
            </div>
            <div class="col-5">
<img src="img/6.png">
            </div>
            <div class="col-5">
<img src="img/b.jpeg">
            </div>
            <div class="col-5">
<img src="img/t66.jpg">
            </div>
            <div class="col-5">
<img src="img/76.jpg">
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
<p class="copyright">By - Wilberto Wilber</p>
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
</body>
</html>