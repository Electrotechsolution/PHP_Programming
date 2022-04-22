<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Handling in PHP || $_SERVER </title>
</head>
<body>
    <!-- <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
    Enter Name :</br>
    <input type="text" name="name" required></br></br>
    Enter Email :</br>
    <input type="text" name="email" required></br></br>
    <input type="submit" value="Submit" name="submit">
    </form> -->
    

    <form action="process.php" method="GET">
    Enter Name :</br>
    <input type="text" name="name" required></br></br>
    Enter Email :</br>
    <input type="text" name="email" required></br></br>
    <input type="submit" value="Submit" name="submit">
    </form>

    <?php
        echo"<pre>";
        print_r($_REQUEST);
        echo "</pre>";
        if ($_REQUEST){
           $_data =  print_r($_REQUEST);
        echo  $_REQUEST['name'] . "</br>";
        echo $_REQUEST['email'] . " </br>";
    }
    ?>
</body>
</html>