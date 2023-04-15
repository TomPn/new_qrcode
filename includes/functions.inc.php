<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<?php

function emptyInputSignup($username,$phone,$pwd,$pwdRepeat) {
    $result;
    if (empty($username) || empty($phone) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}


function invalidPhone($phone) {
    $result;
    if (!preg_match("/^[0-9]{10}+$/", $phone)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd != $pwdRepeat) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function usernameExists($conn, $username, $phone) {
    $sql = "SELECT * FROM users WHERE usersName = ? OR usersPhone = ?;";
    $stmt = mysqli_stmt_init($conn); //create a prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $phone);

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $phone, $password, $identity) {
    $sql = "INSERT INTO users (usersName,usersPhone,usersPassword,usersIdentity) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn); //create a prepared statement
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $phone, $hashedPwd, $identity);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username,$pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $nameExist = usernameExists($conn, $username, $username);
    if ($nameExist === false) {
        header('location: ../login.php?error=wrongUserName');
        exit();
    }

    $pwdHashed = $nameExist['usersPassword'];
    $checkPassword = password_verify($pwd, $pwdHashed);
    if ($checkPassword === false) {
        header('location: ../login.php?error=wrongPassword');
        return null;
        exit();
    } 
    else if ($checkPassword === true) {
        session_start();
        $_SESSION['userid'] = $nameExist['usersId'];
        $_SESSION['username'] = $nameExist['usersName'];
        $_SESSION['login'] = 1;
        if ($nameExist['usersIdentity'] === 'admin') {
            header("location: ../adminPage.php");
            exit();
        }
        header("location: ../guestPage.php");
        exit();
    }
}


function getOrderID($conn, $tableNum) {
    $sql = "SELECT MAX(orderID) FROM cartItems;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../cart.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);
    
    $orderID = 0;
    $row = mysqli_fetch_assoc($resultData);
    if ($row["MAX(orderID)"]) {
        $orderID = $row["MAX(orderID)"] + 1;
    } else {
        $orderID = 1;
    }
    
    mysqli_stmt_close($stmt);
    return $orderID;
}

function createOrderEntry($conn, $names, $table) {
    $tableNum = $table;
    $orderID = getOrderID($conn, $tableNum);
    $orderDate = date("Y/m/d");
    $orderPrice = 0;
    $orderStatus = 0;
    
    // calculate the entire order's price
    forEach ($names as $name) {
        $orderPrice += $name['totalPrice'];
    }

    // insert data into the database
    forEach ($names as $name) {
        $dishName = $name['name'];
        $dishPrice = $name['price'];
        $dishQuantity = $name['quantity'];
        $dishNotes = $name['notes'];
        $dishTotalPrice = $name['totalPrice'];
        $sql = "INSERT INTO cartItems (tableID, orderID, orderDate, orderPrice, orderStatus, dishName, notes, dishPrice, dishQuant, dishTotalPrice, newOrder) VALUES ('$tableNum', '$orderID', '$orderDate', '$orderPrice', '$orderStatus', '$dishName', '$dishNotes', '$dishPrice', '$dishQuantity', '$dishTotalPrice', '0');";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../cart.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}