<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="gb2312">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Order Page</title>
    <div class="header__navbar">
        <img class="logo" src="logo.png" onclick="window.location.href='A1.php'">
        <a id="tableID">桌号 Table Number</a>
        <a class='shoppingCartIcon' href="cart.php" target=”_blank”><i class="fa fa-shopping-cart fa-lg"></i></a>
    </div>
</head>

<body>
    <?php
    $dishPrice = $_COOKIE['price'];
    if ($dishPrice > 8) { ?>
        <div class="allToppings">
            <div class="dishToOrder" id="dishToOrderName"></div>
            <div class="addMeat">
                <h3 class="toppingsTitle">加肉 Meat</h3>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">牛肉 Beef</p>
                        <p class="toppingPrice">$4.19</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+牛肉"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">羊肉 Lamb</p>
                        <p class="toppingPrice">$4.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+羊肉"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">鸭丝 Shredded Duck</p>
                        <p class="toppingPrice">$3.19</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+鸭丝"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">排骨 Pork Rib</p>
                        <p class="toppingPrice">$3.19</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+排骨"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">肥肠 Pork Intestine</p>
                        <p class="toppingPrice">$3.19</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+肥肠"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">肉燥 Minced Pork</p>
                        <p class="toppingPrice">$3.19</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+肉燥"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">大虾 (4pcs) Shrimp (4pcs)</p>
                        <p class="toppingPrice">$3.99</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+大虾"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">小炖肉 Braised Pork</p>
                        <p class="toppingPrice">$3.19</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+小炖肉"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">鸡丝 Sliced Chicken</p>
                        <p class="toppingPrice">$3.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+鸡丝"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">鸡块 Chicken</p>
                        <p class="toppingPrice">$3.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+鸡块"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">牛丸 Beef Ball</p>
                        <p class="toppingPrice">$2.99</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+牛丸"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">鱼丸 Fish Ball</p>
                        <p class="toppingPrice">$2.99</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+鱼丸"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">羊杂 Lamb Belly</p>
                        <p class="toppingPrice">$5.99</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+羊杂"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">青口 (3pcs) Mussel (3pcs)</p>
                        <p class="toppingPrice">$5.99</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+青口"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">鱼肉 Fish</p>
                        <p class="toppingPrice">$3.19</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+鱼肉"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">（改）肉夹馍</p>
                        <p class="toppingPrice">$2.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+（改）肉夹馍"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
            </div>
            <div class="addVege">
                <h3 class="toppingsTitle">加菜 Vegetable</h3>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">青菜 Veg</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+青菜"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">海带 Kelp</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+海带"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">豆干 Dried Bean Curd</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+豆干"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">青瓜 Cucumber</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+青瓜"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">糖蒜 Sweet Garlic</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+糖蒜"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">皇子菇 King Oyster Mushroom</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+皇子菇"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">豆芽 Bean Sprouts</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+木耳丝"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">木耳丝 Black Fungus Silk</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+黄花菜"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">黄花菜 Daylily</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+黄花菜"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
            </div>
            <div class="addCarb">
                <h3 class="toppingsTitle">加面 Grain</h3>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">面 Ramen</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+面"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">土豆粉</p>
                        <p class="toppingPrice">$2.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+土豆粉"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">米线</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+米线"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">粉丝</p>
                        <p class="toppingPrice">$2.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+粉丝"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">多泡馍</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+多泡馍"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
            </div>
            <div class="addEgg">
                <h3 class="toppingsTitle">加蛋 Egg</h3>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">煎蛋 Fried Egg</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+煎蛋"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">卤蛋 Spiced Corned Egg</p>
                        <p class="toppingPrice">$1.59</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+卤蛋"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
            </div>
            <div class="addSoup">
                <h3 class="toppingsTitle">加汤 Soup</h3>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">高汤 Soup</p>
                        <p class="toppingPrice">$1.99</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+高汤"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">（改）浓骨汤 Change to Bone Soupe</p>
                        <p class="toppingPrice">$1.99</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+（改）浓骨汤"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
            </div>
            <div class="addSeasoning">
                <h3 class="toppingsTitle">加调料 Seasoning</h3>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">盐 Salt</p>
                        <p class="toppingPrice">$0.00</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+盐"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">辣椒 Chili</p>
                        <p class="toppingPrice">$0.00</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+辣椒"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">香菜 Chinese Parsley</p>
                        <p class="toppingPrice">$0.00</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+香菜"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">葱 Scallion</p>
                        <p class="toppingPrice">$0.00</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+葱"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">芝麻 Sesame</p>
                        <p class="toppingPrice">$0.00</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+芝麻"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">鸡精 Chicken Powder</p>
                        <p class="toppingPrice">$0.00</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+鸡精"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">味精 MSG</p>
                        <p class="toppingPrice">$0.00</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+味精"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
                <div class="topping">
                    <div class="toppingText">
                        <p class="toppingName">胡椒 Pepper</p>
                        <p class="toppingPrice">$0.00</p>
                    </div>
                    <div class="toppingCheckbox">
                        <label> <input type="checkbox" name="toppings[]" value="+胡椒"> <span class="checkmark"></span> </label>
                    </div>
                    <div class="toppingLine"></div>
                </div>
            </div>
            <div class="addNotes">
                <h3 class="toppingsTitle">备注 Notes</h3>
                <div class="topping">
                    <input type='text' id='additionalNotes'><br>
                </div>
                <div class="bottom"></div>
            </div>
        </div>
    
    <?php } ?>
    
    <button class="addToCart" onclick="location.href = 'A1.php'">
        <p class=" addToCartText">加入购物车 Add To Cart</p>
        <p id="addToCartPrice">$20.99</p>
    </button>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="appForOrder.js"></script>
</body>
<footer>
</footer>

</form>


</html>