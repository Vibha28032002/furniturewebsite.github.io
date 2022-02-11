<?php

session_start();
//it means that there is atleast one product 
if(isset($_POST['add_to_cart'])){

    if(isset($_SESSION['cart'])){

    $products_array_ids = array_column($_SESSION['cart'],"product_id");

    //check if product has already been added to cart
    if(!in_array($_POST['product_id'], $products_array_ids)){
        //add product to cart

        $product_id = $_POST['product_id'];

        $product_array= array(
            'product_id'=> $product_id,
            'product_name'=>$_POST['product_name'],
            'product_price'=>$_POST['product_price'],
            'product_image'=>$_POST['product_image'],
            'product_special_offer'=>$_POST['product_special_offer'],
            'product_quantity'=>$_POST['product_quantity']

        );

        $_SESSION['cart'][$product_id] = $product_array;

    }
    else{
        echo "<script>alert('product has already been added to cart')</script>";
    }

}else{
    $product_id = $_POST['product_id'];

    $product_array = array(
            'product_id'=> $product_id,
            'product_name'=>$_POST['product_name'],
            'product_price'=>$_POST['product_price'],
            'product_image'=>$_POST['product_image'],
            'product_special_offer'=>$_POST['product_special_offer'],
            'product_quantity'=>$_POST['product_quantity']

    );
    $_SESSION['cart'][$product_id] = $product_array;
}


    //calculate total cart
    calculateTotalCart();











}else if(isset($_POST['remove_btn'])){

    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);

    //calculate total cart
    calculateTotalCart();

}else if(isset($_POST['edit_quantity_btn'])){

    //update quantity

    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];

    $product = $_SESSION['cart'][$product_id];

    $product['product_quantity'] = $product_quantity;

    $_SESSION['cart'][$product_id] = $product;


    //calculate total cart
    calculateTotalCart();


}else{

}


function calculateTotalCart(){


    $total_price = 0;
    $total_quantity = 0;

    foreach($_SESSION['cart'] as $id=>$product){

        $product = $_SESSION['cart'][$id];

        $price = $product['product_price'];
        $quantity = $product['product_quantity'];

        $total_price = $total_price + ($price * $quantity);
        $total_quantity = $total_quantity + $quantity;
    
    }

    $_SESSION['total'] = $total_price;
    $_SESSION['quantity'] = $total_quantity;


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


    <!-- Cart Section -->
    <section class="cart container mt-5 my-3 py-5">
        <div class="container mt-5">
            <h2 class="font-weight-bold">Your Cart</h2>
            <hr>
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <?php if(isset($_SESSION['cart'])){ ?>

            <?php foreach($_SESSION['cart'] as $key => $value){ ?>

            <tr>
                <td>
                    <div class="product-info">
                        <img src="<?php echo 'assets/imgs/'.$value['product_image'];  ?>" alt="">
                        <div>
                            <p>Lamp</p>
                            <small><span>$</span><?php echo $value['product_price']; ?></small>
                            <br>
                            <form action="cart.php" method="POST">
                                <input type="hidden" name ="product_id" value="<?php echo $value['product_id']; ?>">
                                <input type="submit" class="remove-bt" name="remove_btn" value="drop">
                            </form>
                        </div>
                    </div>
                </td>


                <td>
                    <form method="POST" action="cart.php">
                        <input type="number" name= "product_quantity" value="<?php echo $value['product_quantity'];?>">
                        <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                        <input type="submit" class="edit-btn" name="edit_quantity_btn" value="edit">
                    </form>
                </td>


                <td>
                    <span class="product-price">$<?php echo $value['product_price'] * $value['product_quantity'];?></span>
                </td>


            </tr>

            <?php } ?>
            <?php } ?>
            
        </table>

        <div class="cart-total">
            <table>
                <tr>
                    <td>Total</td>
                    <?php if(isset($_SESSION['cart'])){ ?>
                    <td><?php echo "$".$_SESSION['total']; ?></td>
                    <?php } ?>
                </tr>
            </table>
        </div>

        <div class="checkout-container">
            <form action="checkout.php" method="GET">
                <input type="submit" class="btn checkout-btn" value="Checkout">
            </form>
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