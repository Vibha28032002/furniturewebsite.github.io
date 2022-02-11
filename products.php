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


    

    

    <!-- Products Section -->
    <section class="products mt-5 my-5 py-5" style="margin-top: 100px !important; margin-bottom:100px !important;" id="products">
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

        <div class="credits">created by <span>vibha</span> |all rights reserved</div>
    </section>
    
    
</body>
</html>