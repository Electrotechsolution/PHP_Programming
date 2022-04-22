<?php
// 1. Ex
// // $a = array(1,2,3,4,5);
//   $page = array("home", "about as","servicess","home", "about as","servicess");
//   $ary_count = count($page);
// $x = 0;
// //    echo $ary_count;
//  while($x < $ary_count){
//     //  echo  " Electrotech Solution </br>";
//     //$x = $a;
//     echo $page[$x];
    
//     $x++;
// }
// // echo $a;

// 2. Ex 
// $page = array("home", "about as","servicess","home", "about as","servicess");
// $ary_count = count($page);
// $x = 0;
// echo "<ul>";
// while($x < $ary_count){
//   echo "<li>" . $page[$x] . "</li>";
//   $x++;
// }
// echo "</ul>";

// 3. Ex
// $page = array("<a href=\"home.php\">home</a>", "<a href=\"#\">about as</a>","<a href=\"#\">servicess</a>");
// $ary_count = count($page);
// $x = 0;
// echo "<ul>";
// while($x < $ary_count){
//   echo "<li>" . $page[$x] . "</li>";
//   $x++;
// }
// echo "</ul>";

$a = 25;
do{
    echo $a . ") Electrotech Solution </br>";
    $a = $a-1;
}while($a >0)
?>