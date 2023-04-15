<?php

if (isset($_POST["submit"])) {
    $username = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $pwd = htmlspecialchars($_POST["pwd"]);
    $pwdRepeat = htmlspecialchars($_POST["pwdrepeat"]);
    $identity = htmlspecialchars($_POST["identity"]);

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($username,$phone,$pwd,$pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUsername($username) !== false) {
        header("location: ../signup.php?error=invalidusername");
        exit();
    }

    if (invalidPhone($phone) !== false) {
        header("location: ../signup.php?error=invalidphone");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordnomatch");
        exit();
    }

    if (usernameExists($conn, $username, $phone) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $username, $phone, $pwd, $identity);

}
else {
    header("location: ../signup.php");
    exit();
}