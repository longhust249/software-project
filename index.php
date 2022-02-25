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
    <?php
        include_once("connect.php");
        if (isset($_GET["layout"])) {
            switch ($_GET["layout"]) {
                case "login":
                    include_once("login.php");
                    break;
                case "menu":
                    include_once("menu.php");
                    break;
                case "result":
                    include_once("result.php");
                    break;
            }
        } 
        ?>
</body>
</html>