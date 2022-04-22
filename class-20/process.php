<?php
// echo"<pre>";
// print_r($_REQUEST);
// echo "</pre>";

//     echo $_REQUEST['name']. "</br></br>";
//     echo $_REQUEST['email']. "</br></br>";

//     echo"<pre>";
// print_r($_SERVER);
// echo "</pre>";

// echo $_SERVER['HTTP_HOST'] . "</br>";
// echo $_SERVER['REQUEST_URI'] . "</br>";
// echo $_SERVER['SERVER_SOFTWARE'] . "</br>";
// echo $_SERVER['HTTP_SEC_CH_UA'] . "</br>";

if ($_REQUEST){
    $_name = $_REQUEST['name'];
    $_email = $_REQUEST['email'];

    
 echo  $_name . "</br>";
 echo $_email . " </br>";

}


?>