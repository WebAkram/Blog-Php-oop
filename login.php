<?php
require_once 'config.php';
session_start();
if (isset($_POST["loginbtn"])) {
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $database->login($email, $password);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login form</title>
    <link rel="stylesheet" href="./css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form">
                <label for="user-email" style="padding-top:13px">
                    &nbsp;Email
                </label>
                <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
                <div class="form-border"></div>
                <label for="user-password" style="padding-top:22px">&nbsp;Password
                </label>
                <input id="user-password" class="form-content" type="password" name="pass" required />
                <div class="form-border"></div>
                <a href="#">
                    <legend id="forgot-pass">Forgot password?</legend>
                </a>
                <button id="login-btn" type="submit" name="loginbtn" value="LOGIN">LOGIN</button>
                <a href="Signup.php" id="signup">Don't have account yet?</a>
            </form>
        </div>
    </div>
</body>

</html>