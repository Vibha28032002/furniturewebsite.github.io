<?php

session_start();

if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
    header("location: index.php");
}




?>















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


    <!-- Payment -->
    <section class="my-5 py-5 checkout">
        <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Payment</h2>
        <hr class="mx-auto">
        </div>
        
        <div class="mx-auto container text-center">

        <!-- <?php if(isset($_SESSION['order_id']) && $_SESSION['order_id'] != 0
                 && isset($_SESSION['total']) && $_SESSION['total'] != 0 ) { ?>

                        <p>Total amount: <?php echo "$".$_SESSION['total']; ?></p>

            <?php } else{?>

                


                <?php } ?> -->

                
        </div>
        <div class="mx-auto container text-center">

        <!-- <p>Total amount: <?php echo "$".$_SESSION['total']; ?></p>
        
        <button onclick="myFunction()">Pay Now</button>

<script>
function myFunction() {
  location.replace("https://www.paypal.com/in/home")
}
</script> -->


<p>Total amount: <?php echo "$".$_SESSION['total']; ?></p>
<a href="https://www.paypal.com/in/home">
    <button class="main-btn">Pay Now</button>
</a>
        
            
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