var items = JSON.parse(sessionStorage.getItem('itemList'));
var orderTotalPrice = 0;


$('title').html(sessionStorage.getItem("enteredTableID"));
$('#tableID').html(sessionStorage.getItem("enteredTableID"));
$('.logo').on('click',function(){window.location.href = 'A1.php';});

items.forEach(item => {
    // create a wrapper for each dish addded
    var wrapper = document.createElement('div');
    wrapper.setAttribute('class', 'orderDish');
    document.getElementById('cart').appendChild(wrapper);

    // div for dish name
    var thedishName = document.createElement('div');
    thedishName.setAttribute('class', 'dishName');
    thedishName.innerHTML = item.name;
    wrapper.appendChild(thedishName);

    // div for notes
    var toppings = document.createElement('div');
    toppings.setAttribute('class', 'toppings');
    toppings.innerHTML = item.notes;
    wrapper.appendChild(toppings);

    // div for price
    var thedishPrice = document.createElement('div');
    thedishPrice.setAttribute('class', 'price');
    item.totalPrice = Number((item.totalPrice).toFixed(2));
    thedishPrice.innerHTML = "$".concat(item.totalPrice);
    wrapper.appendChild(thedishPrice);

    // create a button for quantity minus activities
    var buttonMinus = document.createElement("Button");
    var textForButtonMinus = document.createTextNode("-");
    buttonMinus.appendChild(textForButtonMinus);
    buttonMinus.setAttribute('class', 'orderDishMinus');
    wrapper.appendChild(buttonMinus);
    buttonMinus.addEventListener("click", function() {minusQuantity(item.name, item.price, item.notes)});

    // div for quantity
    var quantity = document.createElement('div');
    quantity.setAttribute('class', 'orderDishQuantity');
    quantity.innerHTML = item.quantity;
    wrapper.appendChild(quantity);

    // create a button for quantity plus activities
    var buttonPlus = document.createElement("Button");
    var textForButtonPlus = document.createTextNode("+");
    buttonPlus.appendChild(textForButtonPlus);
    buttonPlus.setAttribute('class', 'orderDishPlus');
    wrapper.appendChild(buttonPlus);
    buttonPlus.addEventListener("click", function() {plusQuantity(item.name, item.price, item.notes)});

    // accumulation of the total price for the order
    orderTotalPrice += item.totalPrice;
})

$('<div/>',{
    class:"bottom"
}).appendTo('#cart');

orderTotalPrice = Number((orderTotalPrice).toFixed(2));
document.getElementById('submitOrderPrice').innerHTML = '$'.concat(orderTotalPrice);

function deleteDish(dishName, dishPrice, dishToppings){
    var items = JSON.parse(sessionStorage.getItem('itemList'));
    items.forEach(item => {
        if (item.name == dishName && item.price == dishPrice && item.notes == dishToppings) {
            const itemToDelete = [item];
            const newItems = items.filter( originalItem => !itemToDelete.includes(originalItem));
            sessionStorage.setItem('itemList',JSON.stringify(newItems));
        }
    });
}

function minusQuantity(dishName, dishPrice, dishToppings) {
    var items = JSON.parse(sessionStorage.getItem('itemList'));
    items.forEach(item => {
        if (item.name == dishName && item.price == dishPrice && item.notes == dishToppings) {
            item.quantity -= 1;
            item.totalPrice -= dishPrice;
            if (item.quantity == 0) {
                deleteDish(dishName, dishPrice, dishToppings);
                window.location.href='cart.php';
                exit();
            }
            window.location.href='cart.php';
        }
    });
    sessionStorage.setItem('itemList',JSON.stringify(items));
}

function plusQuantity(dishName, dishPrice, dishToppings) {
    var items = JSON.parse(sessionStorage.getItem('itemList'));
    items.forEach(item => {
        if (item.name == dishName && item.price == dishPrice && item.notes == dishToppings) {
            item.quantity += 1;
            item.totalPrice += dishPrice;
            window.location.href='cart.php';
        }
    });
    sessionStorage.setItem('itemList',JSON.stringify(items));
}

var OrderSubmit = document.getElementById('submitOrder');



if(sessionStorage.getItem('order?') != null){
    $('#submitOrder').unbind();
    $('.orderDishPlus').unbind();
    $('.orderDishMinus').unbind();
    $("#submitOrderText").html('已下单 The Order Has Been Placed');
    $('<div/>',{
        class:'afterOrderText',
        text:"如需加单，请关闭页面，重新扫码点单 Please close the browser and rescan the QR code to make another order",
        style:"margin-bottom:10%; margin-left: auto; margin-right: auto; text-align: center; z-index:1000;"
    }).appendTo("body");
    $("#submitOrder").css('background-color:#DCDCDC');
} else{
    OrderSubmit.addEventListener("click", function() {
    var items = JSON.parse(sessionStorage.getItem('itemList'));
    sessionStorage.setItem('order?',1);
    $.redirect('includes/cart.inc.php', {dishes: items, tableID: sessionStorage.enteredTableID});
});
}


