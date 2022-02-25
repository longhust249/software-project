<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/css/login.css">
    <link rel="stylesheet" href="./asset/css/menu.css">
    <link rel="stylesheet" href="./asset/css/modal.css">
    <link rel="stylesheet" href="./asset/css/result.css">
</head>

<body>
    <div class="login">
        <div class="login-main">
            <div class="login-title">
                LOGIN
            <a href="index.php?layout=menu"></a></div>
            <div class="input-1">
                <input class="login-input" type="Username" placeholder="Username">
            </div>
            <div class="input-2">
                <input class="login-input" type="Password" placeholder="Password">
            </div>

            <div class="login-sub">
                <form action="/action_page.php">
                    <input style="margin:0; font-size: 25px;" type="radio" id="html" name="fav_language" value="HTML">
                    <label for="html">Remember me</label><br>
                </form>
                <div class="login-sub-changepass">
                    <a href="">Forgot?</a>
                </div>
            </div>
            <button class="login-btn">LOGIN</button>
        </div>
    </div>

</body>

</html>