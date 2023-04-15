<?php
if (isset($_POST['submit'])) {

    $username = $_POST['name'];
    $pwd = $_POST['pwd'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header('location: ../login.php?error=emptyinput');
        exit();
    }

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
} else {
    header("location: ../login/php");
    exit();
}
?>