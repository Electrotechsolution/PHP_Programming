<?php
Session_start();

function myfunction(){
    $add = 12+10;
    echo $add;
}

$fnc = new myfunction();
// $_SESSION("fnc") = $fnc;

?>