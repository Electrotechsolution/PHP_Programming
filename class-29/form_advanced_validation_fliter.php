<?php
$int = 20;
$min = 5;
$max = 20;

$ary = array("options"=> array("min_num"=>$min, "max_num"=>$max));

// print_r ($ary['options']);

if(filter_var($int, FILTER_VALIDATE_INT, $ary)){
   
   if($int < $max) {
       echo  "This Number is Min!";
   }
   elseif($int >= $min ){
    echo  "This Number is Max!";
   }
    elseif($int == $max || $int == $min){
        echo  "This Number is equal!";
    }
}
else {
    echo "This Not an integer!";
}
?>