<?php
require_once 'Item.php';
session_start();
// $_SESSION['itemList'];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['update'])){
        $positive = 0;
        for ($i = 0; $i < count($_SESSION['itemList']); $i++){
            if ($_SESSION['itemList'][$i]->getQty() > 0) {
                $_SESSION['itemList'][$i]->changeQty($_POST['item'. ($i + 1)]);
            }
        }

    } elseif (isset($_POST['remove'])) {
        if (isset($_POST['check1'])){
            $_SESSION['itemList'][0]->changeQty(0);
        }
        if (isset($_POST['check2'])){
            $_SESSION['itemList'][1]->changeQty(0);
        } 
        
        if (isset($_POST['check3'])){
            $_SESSION['itemList'][2]->changeQty(0);
        }
    }

}



$items = $_SESSION['itemList'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        .cart-container {
            width: 80%;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding: 20px;
        }
        .cart-header, .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .cart-header {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .cart-item {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        .cart-item img {
            max-width: 100px;
        }
        .cart-item p {
            margin: 0;
        }
        .cart-item .description {
            flex: 2;
            padding: 0 10px;
        }
        .cart-item .price, .cart-item .qty, .cart-item .total {
            flex: 1;
            text-align: center;
        }
        .cart-item .qty input {
            width: 50px;
            text-align: center;
        }
        .update-btn, .remove-btn {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        #checkout {
            position: relative;
            left: 70%;
            background-color: brown;
            color: white;
            font-family: calibri;
            text-decoration: none;
            padding: 15px;
            padding-top: 5px;
            padding-bottom: 8px;
        }

        label {
            font-size: 20px;
            font-family: monaco;
            font-weight: 900;
        }
    </style>
</head>
<body>

<div class="cart-container">
    <h1>Shopping Cart</h1>
    <div class="cart-header">
        <div>Remove</div>
        <div>Image</div>
        <div class="description">Product Description</div>
        <div class="price">Price</div>
        <div class="qty">Qty</div>
        <div class="total">Total</div>
    </div>

    <?php
    echo "<form method = 'post' id = 'items'>";
    for ($i = 0; $i < count($items); $i++){
        if ($items[$i]->getQty() > 0) {
            echo "<div class='cart-item'>
                    <div><input type='checkbox' name = 'check".($i + 1)."'></div>
                    <div><img src='".$items[$i]->getImg()."' alt='".$items[$i]->getName()."'></div>
                    <div class='description'>
                        <p><strong>".$items[$i]->getName()."</strong></p>
                        <p>".$items[$i]->getDesc()."</p>
                        <p>Availability: <span style='color:green;'>Online</span> <span style='color:blue;'>Immediate Pick-up</span></p>
                    </div>
                    <div class='price'>$".$items[$i]->getPrice()."</div>
                    <div class='qty'><input type='number' name = 'item".($i + 1)."' value='".$items[$i]->getQty()."'></div>
                    <div class='total'>$".$items[$i]->getQty() * $items[$i]->getPrice()."</div>
                </div>";
        }
    }
    echo "</form>";
    ?>

    <!-- Template -->
    <!-- <div class="cart-item">
        <div><input type="checkbox"></div>
        <div><img src="assets/img/bronton.jpg" alt="Electric Bike Model 2"></div>
        <div class="description">
            <p><strong>[EB2-750W-52V-32MPH] Electric Bike Model 2</strong></p>
            <p>750W Motor, 52V Battery, Range: 60 miles, Top Speed: 32 mph</p>
            <p>Availability: <span style="color:green;">Online</span> <span style="color:blue;">Immediate Pick-up</span></p>
        </div>
        <div class="price">$1,499.00</div>
        <div class="qty"><input type="number" value="1"></div>
        <div class="total">$1,499.00</div>
    </div> -->

    <button class="update-btn" form = 'items' name = 'update'>UPDATE QTY</button>
    <button class="remove-btn" form = 'items' name = 'remove'>REMOVE</button>

    <!-- checkout button -->
</div>
    <br>
    <br>
    <a id = 'checkout' href = 'checkout.php'>CHECKOUT NOW &nbsp&nbsp&nbsp<label>>>></label></a>


</body>
</html>
