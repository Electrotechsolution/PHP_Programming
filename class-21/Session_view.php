<?php
Session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SESSION</title>
</head>
<body>
    <?php
    echo $_SESSION['name'] . "</br>";
    echo $_SESSION['email'];
    ?>
</body>
</html>