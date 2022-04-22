<!-- <?php
// $x = true;
// $y = false;
// echo$x;
// echo"<br>";
// echo $y;

// $a1 = true;
// $a2 = true;
// $a3 = true;
// $a4 = true;
// $a5 = true;
// $a6 = true;
// $a7 = true;


// while($x <=7){

//     echo "1";
    
// }
// $a = array( 1, 2, 3, 4, 5, 6, 7);

// for ($a = 0; $a<=7; $a++){
//     if ($a == 0){

//     }
//     else if($a == 1){
//         echo "M </br>";
//     }
//     else if($a == 2){
//         echo "T </br>";
//     }
//     else if($a == 3){
//         echo "w </br>";
//     }
//     else if($a == 4){
//         echo "Th </br>";
//     }
//     else if($a == 5){
//         echo "F </br>";
//     }
//     else if($a == 6){
//         echo "Sa </br>";
//     }
//     else if($a == 7){
//         echo "Su </br>";
//     }
//      else{
//          echo " Not Found </br>";
//      }
// }

//echo "<ul>";

// Settings
$a = array( 1, 2, 3, 4, 5, 6, 7);
//$x = 1;
for ($a = 3; $a<=3; $a++){
    
    if($a == 1){
        echo "<li><a href='#'>Home</a></li>";
    }
    else if($a == 2){
        echo "<li><a href='#'>Services</a></li>";
    }
    else if($a == 3){
        echo "<li><a href='#'>About us</a></li>";
    }
    else if($a == 4){
        echo "<li><a href='#'>Products</a></li>";
    }
    else if($a == 5){
        echo "<li><a href='#'>Careers</a></li>";
    }
    else if($a == 6){
        echo "<li><a href='#'>Contact us</a></li>";
    }
    else if($a == 7){
        echo "<li><a href='#'>Pricing</a></li>";
    }
     else{
         echo " Not Found";
     }
}
echo "</ul>";




 $a =array (0,1,3,4);
 $count_ary = count($a);
$x = 1;
while ($x < $count_ary){
    if($a = 1){
        echo "M </br>";
    }
    else  if($a == 12){
        echo "T </br>";
    }
    else if($a == 3){
        echo "w </br>";
    }
    else if($a == 4){
        echo "Th </br>";
    }
    else if($a == 5){
        echo "F </br>";
    }
    else if($a == 6){
        echo "Sa </br>";
    }
    else if($a == 7){
        echo "Su </br>";
    }
     else{
         echo " Not Found </br>";
     }

     $x++;
}
    ?>
 -->

 <?php
    $cars =array("Volvo","BMW","Toyota");
    $cars1 =array("Volvo","BMW","Toyota");

    //echo $cars[1];
    $a  = count($cars);
    for ($a= 0; $a<3; $a++){

        echo $cars[$a] . " ";
         
    }
    $a  = count($cars1);
    for ($a= 0; $a<3; $a++){

        echo $cars1[$a] . " ";
         
    }
?>

<?php
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
?>

<?php
    $x = "Hello world!"; 
    $x = null; 
    var_dump($x);
?>


<?php 
    define("GREETING","Welcome to W3Schools.com!");
    echo GREETING;
?>

<?php
     define("cars", "Alfa Romeo",   "zfghrst nst rth nyt zfh, str hsrtyyhsrt srrth, f rtt");
    echo cars;
?>




