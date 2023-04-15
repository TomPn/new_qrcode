<head>
    <meta charset="gb2312">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<?php

if(isset($_POST["dishes"])){

    $names = $_POST['dishes'];
    $table = $_POST['tableID'];
    include('/home/fmbmdhge/public_html/baijialaotang.epizy.com/includes/dbh.inc.php');
    include('/home/fmbmdhge/public_html/baijialaotang.epizy.com/includes/functions.inc.php');

    createOrderEntry($conn, $names, $table);

    echo "<script>
        alert('订单已上传，请耐心等待用餐 The order has been placed, please wait patiently and enjoy!');
        window.location.href='../A1.php?error=none';
        </script>";

} else {
    echo "<script>
        alert('下单出错了，请联系前台');
        window.location.href='../A1.php?error=noDish';
        </script>";
}

?>