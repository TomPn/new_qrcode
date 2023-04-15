var tableID = sessionStorage.getItem("enteredTableID");
var dishName = JSON.parse(sessionStorage.getItem("dishName"));
var dishPrice = JSON.parse(sessionStorage.getItem("dishPrice"));
var price = parseFloat(dishPrice.substring(1));

$('#tableID').html(tableID);
$('title').html(tableID);
$("#dishToOrderName").html(dishName);
$('#addToCartPrice').html("$"+price); 

var checkboxs = $('input[type=checkbox]');
checkboxs.each(function(){
    $(this).on('click',changed);
})


var notes = "加";

$('.addToCart').on("click",addToCartClicked);



function addToCartClicked(){
    const isTextSelected = window.getSelection().toString();
    
    if (sessionStorage.getItem('itemList') == null) {
        const items =[];
        sessionStorage.setItem('itemList',JSON.stringify(items));
    }
    var addNotes = "；特殊备注："+$('input[type=text]').val();
    if(addNotes == "；特殊备注："){
        addNotes = "";
    }
    const item = {"name": dishName, "price": price, "quantity": 1, "notes": notes.slice(0,-2)+addNotes, "totalPrice": price};
    // item[0] = {dishName};
    // item[1] = price;
    // item[2] = 1;
    // item[3] = notes;
    // item[4] = item[1] * item[2];
    
    var items = JSON.parse(sessionStorage.getItem('itemList'));
    items.push(item);
    sessionStorage.setItem('itemList',JSON.stringify(items));
    if (!isTextSelected) { 
        window.location.href='A1.php';
    }
}



function changed(){ 
    var toppingName = this.parentElement.parentElement.parentElement.getElementsByClassName("toppingName")[0].innerHTML;
    var toppingPrice = this.parentElement.parentElement.parentElement.getElementsByClassName("toppingPrice")[0].innerHTML;
    toppingPrice = parseFloat(toppingPrice.substring(1));
    if(this.checked){ 
        notes = notes.concat(toppingName);
        notes = notes.concat(", ");
        price = price + toppingPrice;

    } else{ 
        notes = notes.replace(toppingName.concat(", "),"");
        price = price - toppingPrice;
    } 
    price = Number((price).toFixed(2));
    document.getElementById('addToCartPrice').innerHTML = "$"+price;
    document.cookie="currentPrice=$".concat(JSON.stringify(price));
}