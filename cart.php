<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="gb2312">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cart Page</title>
    <div class="header__navbar">
        <img class="logo" src="logo.png">
        <a id="tableID">桌号 Table Number</a>
        <a class='shoppingCartIcon' href="cart.php" target=”_blank”><i class="fa fa-shopping-cart fa-lg"></i></a>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/mgalante/jquery.redirect@master/jquery.redirect.js"></script>

</head>

<body>
    <div id="cart">
    </div>
    <button type="post" name="submitOrder" id="submitOrder" class="submitOrder">
        <p id="submitOrderText">下单 Place the Order</p>
        <p id="submitOrderPrice">$0</p>
    </button>
    <script src="appForCart.js"></script>
</body>

<footer>
</footer>

</html>