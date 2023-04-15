<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf8mb4">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>

<body>
    <?php
    session_start();
    if(isset($_SESSION['login'])){
        $login = $_SESSION['login'];
    } else{
        $login = 0;
    }
    
    header("refresh: 2");
    include '/home/fmbmdhge/public_html/baijialaotang.epizy.com/includes/dbh.inc.php';
    $sql = "SELECT * FROM cartItems WHERE orderStatus = 0 OR orderStatus = 1";
    $result = mysqli_query($conn, $sql);
    $data = array();

    if ($result->num_rows > 0) {
        foreach ($result as $row) {
            $data[] = $row;
        }
    }

    $orders = array();
    $sql2 = "SELECT DISTINCT(orderID) FROM cartItems WHERE orderStatus = 0 OR orderStatus = 1";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2->num_rows > 0) {
        foreach ($result2 as $order) {
            array_push($orders, $order['orderID']);
        }
    }
    ?>

    <h1 id='adminH1'>堂食订单</h1>
    <div id="admin"></div>

    <script src='https://code.jquery.com/jquery-3.6.1.min.js'></script>
    <script src="https://cdn.jsdelivr.net/gh/mgalante/jquery.redirect@master/jquery.redirect.js"></script>
    <script>
        var data = jQuery.parseJSON('<?php echo json_encode($data) ?>');
        var orders = jQuery.parseJSON('<?php echo json_encode($orders) ?>');
        if (data.length == 0) {
            $('#adminH1').html('暂无订单');
        }
        var login = jQuery.parseJSON('<?php echo json_encode($login) ?>');

        // audio display
        function playAudio() {
            document.getElementById("audio").play();
        }
    </script>
    <script src='appForAdmin.js'></script>
    <audio src="notification.mp3" id="audio" controls style = "display: none;"></audio>
    <?php
    if (isset($_SERVER['HTTP_REFERER'])) {
        if ((isset($_POST['status'])) and (isset($_POST['orderID']))) {
            $sql = $conn->prepare("UPDATE cartItems SET orderStatus = ? WHERE orderID = ?");
            $sql->bind_param("ss", $_POST['status'], $_POST['orderID']);
            $sql->execute();
        }
        foreach ($data as $row) {
            if ($row['newOrder'] == 0) {
                echo "<script> playAudio(); </script>";
                $sql = $conn->prepare("UPDATE cartItems SET newOrder = ?");
                $var = 1;
                $sql->bind_param("s", $var);
                $sql->execute();
                break;
            }
        }
    }
    ?>

</body>
<footer>
</footer>

</html>