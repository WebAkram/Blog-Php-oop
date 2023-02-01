<?php require_once 'config.php';
session_start();
if (isset($_POST['signupbtn'])) {
    $na = $_POST['name'];
    $ema = $_POST['email'];
    $pass = $_POST['password'];
    $file = $_FILES['image'];
    $file_size = ($file['size'] / 1024) / 1024;
    $ext = pathinfo(basename($file['name']), PATHINFO_EXTENSION);
    $path = "storageimg/" . time() . "." . $ext;
    move_uploaded_file($file['tmp_name'], $path);
    $database->insert($na, $ema, $pass, $path);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/signup.css">

</head>

<body>


    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>Signup</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form">
                <label for="user-name" style="padding-top:15px">
                    &nbsp;Name
                </label>
                <input id="user-name" class="form-content" type="text" name="name" autocomplete="on" required />
                <div class="form-border"></div>
                <label for="user-email" style="padding-top:13px">
                    &nbsp;Email
                </label>
                <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
                <div class="form-border"></div>
                <label for="user-password" style="padding-top:22px">&nbsp;Password
                </label>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>
                <label for="user-profile" style="padding-top:13px">
                    &nbsp;Profile
                </label>
                <input id="user-profile" class="form-control" type="file" name="image" autocomplete="on" required />
                <a href="login.php">
                    <legend id="forgot-pass">Already have an account</legend>
                </a>
                <button id="submit-btn" type="submit" name="signupbtn" value="Signup">SIGNUP</button>
            </form>
        </div>
    </div>








</body>

</html>