<?php

session_start();

if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
    header("location: index.php");
}

// /including the database connection file
// include_once("config.php");

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


    <!-- checkout -->
    <section class="my-5 py-5 checkout">
        <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Check Out</h2>
        <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="checkout-form" onsubmit="return validation()"  action="place_order.php" method="POST">
                <div class="form-group checkout-small-element">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="name" required>
                    <span id="username" class="text-danger font-weight-bold"></span>
                    
                    
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="checkout-email" name="email" placeholder="email address" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Phone</label>
                    <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="phone number" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">City</label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="city" required>
                </div>

                <div class="form-group checkout-large-element">
                    <label for="">Address</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="address" required>
                </div>

                <div class="form-group checkout-btn-container">
                   <p>Total amount: <?php echo "$".$_SESSION['total']; ?></p>
                    <input type="submit" class="btn" id="checkout-btn" name="checkout_btn" value="Checkout">
                </div>
            </form>
        </div>  
    </section>

    <script type="text/javascript">
        function validation(){
            var user = document.getElementById('checkout-name').value;

            if(checkout-name == ""){
                document.getElementById('username').innerHTML="**Please fill the username";
                return false;
            }
        }
    </script>


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