<?php
// $int = "hello";
// $min = 10;
// $max = 20;

// $ary = array("options"=> array("min_num"=>$min, "max_num"=>$max));

// // print_r ($ary['options']);

// if(filter_var($int, FILTER_VALIDATE_INT, $ary)){
   
//    if($int > $max && $int > $min) {
//        echo  "This Number is Max!";
//    }
//    elseif($int < $min && $int < $max){
//     echo  "This Number is Min!";
//    }
//     elseif($int == $max){
//         echo  "This Number is equal to max";
//     }
//     else {
//         echo "This Number is equal to min";
//     }
// }
// else {
//     echo "This Not an integer!";
// }

$string = "<p>Hello Electrotech Solution</p> <45 6C 65 63 74 72 6F 74 65 63 68>";

$var = filter_var($string, FILTER_SANITIZE_STRING);
 echo $var;

?>