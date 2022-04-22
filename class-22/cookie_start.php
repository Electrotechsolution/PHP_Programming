<?php
$cookie_name = "Username";
$cookie_value = "Electrotechsolution";
setcookie($cookie_name, $cookie_value, time() + (86400), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_COOKIE</title>
</head>
<body>
    <?php
    
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie Fiald!";
    }else{
        echo $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>