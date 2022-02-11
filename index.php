<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    
    

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <header>
        <input type="checkbox" name="" id="toggler">

        <label for="toggler" class="fas fa-bars"></label>
        <a href="index.php" class="logo">Store<span>.</span></a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="products.php">Products</a>
            <a href="contact.php">Contact</a>
        </nav>

        <nav class="icons">
            <a href="cart.php" class="fa fa-shopping-cart"></a>
        </nav>
    </header>

    <!-- home section -->
    <section class="Home" id="Home">
        <div class="content">
            <h3>High Quality Products</h3>
            <span>Natural & Elegant</span>
            <p>Hello customers.
            </p>
            <a href="products.php" class="main-btn">Shop Now</a>
        </div>
    </section>

    <!-- about section -->
    <section class="About" id="About">
        <h1 class="heading">
            <span>About </span> us
        </h1>
        <div class="main-row">
        <div class="video-container">
            <video src="video.mp4" loop autoplay muted></video>
            <h3>Best Products</h3>
        </div>
        <div class="content">
            <h3>Why Choose us</h3>
            <p>We are here to provide you with the exceptional customer service whenever you need us...before,during and after the sale. We're dedicated to giving you the best quality products and service possible each and every time.
                
            </p>
            <p>Your satisfaction is always our goal.</p>
            <a href="about.php" class="main-btn">learn more</a>
        </div>
        </div>
    </section>


    <!-- Icons Section -->
    <section class="icons-container" id="features">

        <div class="icons">
            <i class="fas fa-shopping-cart"></i>
            <div class="info">
                <h3>Free delivery</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-tags"></i>
            <div class="info">
                <h3>15 days return</h3>
                <span>moneyback guarantee</span>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-gifts"></i>
            <div class="info">
                <h3>Gifts</h3>
                <span>gifts for loved ones</span>
            </div>
        </div>

        <div class="icons">
            <i class="fab fa-paypal"></i>
            <div class="info">
                <h3>secure payment</h3>
                <span>protected by paypal</span>
            </div>
        </div>

    </section>


    <!-- Products Section -->
    <section class="products" id="products">
        <h1 class="heading">Latest<span> Products</span></h1>

        <div class="box-container">



        <?php include("get_products.php"); ?>

        <?php foreach($products as $product){ ?>

            <div class="box">
                
                <div class="image">
                    <img src="<?php  echo "assets/imgs/".$product['product_image']; ?>" alt="">
                    <div class="form">
                        <form action="cart.php" method="POST">
                            <input type="hidden" name="product_id" value="<?php  echo $product['product_id']; ?>">
                            <input type="hidden" name="product_name" value="<?php  echo $product['product_name'];?>">
                            <input type="hidden" name="product_image" value="<?php  echo $product['product_image'];?>">
                            <input type="hidden" name="product_price" value="<?php  echo ($product['product_price'] * ( (100 - $product['product_special_offer'])/ 100) );?>">
                            <input type="hidden" name="product_special_offer" value="<?php  echo $product['product_special_offer'];?>">
                            <input type="hidden" name="product_quantity" value="1"/>
                            <input type="submit" class="cart-btn" value="add to cart" name="add_to_cart">
                        </form>
                    </div>
                </div>
                <span class="discount"><?php echo $product['product_special_offer']; ?> OFF</span>
                <div class="content">
                    <h3><?php echo $product['product_name'] ?></h3>
                    <div class="price">$<?php echo ($product['product_price'] * ( (100 - $product['product_special_offer'])/ 100) ); ?> <span>$<?php echo $product['product_price'] ;?></span></div>
                </div>
            </div>
        <?php }?>


            

            

            


        </div>
    </section>


    <!-- Reviews -->
    <section class="review" id="review">
        <h1 class="heading">Customers <span>Reviews</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Awesome Products, I liked those products so much</p>
                <div class="user">
                    <img src="cust1.jpg" alt="">
                    <div class="user-info">
                        <h3>Maria</h3>
                        <span>Happy Customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Their variety of products, range and comparatively cheaper price. Service provided was also good.</p>
                <div class="user">
                    <img src="cust2.jpg" alt="">
                    <div class="user-info">
                        <h3>Kevin</h3>
                        <span>Happy Customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>The services provided by the officials was smooth and satisfactory.</p>
                <div class="user">
                    <img src="cust3.jpg" alt="">
                    <div class="user-info">
                        <h3>John</h3>
                        <span>Happy Customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>
        </div>
    </section>


    <!-- Contact us section -->
    <section class="contact" id="contact">
        <h1 class="heading"><span>Contact</span> Us</h1>
        <div class="main-row">
            <div class="contact-info">
                <h3>Contact number: +91 9876556788</h3>
                <p>Customer service <span>customer@gmail.com</span></p>
                <p>returns and refunds <span>returns@gmail.com</span></p>
                <p>inquires: <span>inquires@gmail.com</span></p>
            </div>
        </div>
    </section>


    <!-- Footer section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="#features">Features</a>
                <a href="products.php">Products</a>
                <a href="contact.php">Contact</a>
                <a href="#review">Review</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="cart.php">Cart</a>
                <a href="products.php">Products</a>
                
            </div>

            <div class="box">
                <h3>Locations</h3>
                <p>Australia</p>
                <p>US</p>
                <p>Germany</p>
                <a href="#">Special Offers</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <p>+123 456 7890</p>
                <p>info@email.com</p>
            </div>


        </div>

        <div class="credits">created by <span>Team</span> |all rights reserved</div>
    </section>
    
    
</body>
</html>