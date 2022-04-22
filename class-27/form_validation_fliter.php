<?php
// filter_var();

$int = 10.9;
if(filter_var($int, FILTER_VALIDATE_INT) === true){
    echo "Integer is valid";
}
else{
    echo "Integer is not valid ";
}
?>