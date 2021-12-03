
<?php
session_start();
if (isset($_SESSION['userID'])){
    header("Location: home.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./assets/style_index.css">
</head>

<body>
    <!-- <img src="./assets/wave.svg" alt="wave background" class="body-bg"> -->
    <img src="./assets/wave.svg">
    <div class="bucket">
        <p>Login For Continue </p>
        <br>
        <form action="./login.php" method="post" class="login">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Pasword..." class="login-field">
            <input type="submit" name="login" value="Login" class="login-btn-submit">
        </form>
    </div>
</body>

</html>