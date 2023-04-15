<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <!-- <?php
        if (isset($_SESSION['username'])) {
            echo "";
        }
    ?> -->
</head>

<body>
    <section class="Signup">
        <h2>Signup</h2>
        <div class="Signup-form">
            <form action="/includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Username...">
                <input type="number" name="phone" placeholder="Phone Number...">
                <input type="password" name="pwd" placeholder="Password...">
                <input type="password" name="pwdrepeat" placeholder="Password...">
                <input type="text" name="identity" placeholder="Identity...">
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>

        <?php  
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'emptyinput') {
                    echo '<p>Fill in all fields</p>';
                } else if ($_GET['error'] == 'invalidusername') {
                    echo '<p>Choose a proper username</p>';
                } else if ($_GET['error'] == 'invalidphone') {
                    echo '<p>Choose a proper phone</p>';
                } else if ($_GET['error'] == 'passwordnomatch') {
                    echo '<p>Passwords don\'t match</p>';
                } else if ($_GET['error'] == 'stmtfailed') {
                    echo '<p>Something went wrong, please try again!</p>';
                } else if ($_GET['error'] == 'usernametaken') {
                    echo '<p>Username already taken</p>';
                } else if ($_GET['error'] == 'none') {
                    echo '<p>You have signed up!</p>';
                }
            }
        ?>
    </section>
</body>