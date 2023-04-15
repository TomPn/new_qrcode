<head>
    <meta charset="utf8mb4">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<?php

$serverName = "localhost";
$dbUsename = "fmbmdhge_QRCodeO";
$dbPassword = "iKanwByXMNruA";
$dbName = "fmbmdhge_QRCodeO";

$conn = mysqli_connect($serverName, $dbUsename, $dbPassword, $dbName);
mysqli_set_charset($conn, "utf8mb4");
mysqli_query($conn, "SET character_set_client=utf8mb4")or die(mysql_error());
mysqli_query($conn, "SET character_set_connection=utf8mb4")or die(mysql_error());
mysqli_query($conn, "SET character_set_results=utf8mb4")or die(mysql_error());

if (!$conn) {
    die("Conncection failed: ". mysqli_connect_error());
}
