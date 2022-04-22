<?php
 
//  $weekday = 4;
//  switch($weekday){
//      case 1:
//         echo " Today is Monday";
//     break;
//     case 2:
//         echo " Today is Tuseday";
//      break;
//     case 3:
//         echo " Today is Wednesday";
//     break;
//     case 4:
//         echo " Today is Thursday";
//     break;
//     case 5:
//         echo " Today is Friday";
//     break;
//     case 6:
//         echo " Today is saturday";
//     break;
//     case 7:
//         echo " Today is Sunday";
//     break;
//     default:
//     echo "Enter the valid  number";
//  }



// switch($weekday){
//     case 1: case 2:  case 3: case 4:
//         echo " Today is Monday";
//     // break;
//     // case 2:
//     //     echo " Today is Tuseday";
//     //     break;
//     // case 3:
//     //     echo " Today is Wednesday";
//     // break;
//     // case 4:
//     //     echo " Today is Thursday";
//     break;
//     case 5:
//         echo " Today is Friday";
//     break;
//     case 6:
//         echo " Today is saturday";
//     break;
//     case 7:
//         echo " Today is Sunday";
//     break;
//     default:
//     echo "Enter the valid  number";
    // }

// $age = 15;

// switch(true){
//     case ($age >= 18 && $age <= 80):
//         echo "You are Eligible!";
//     break;
//     case ($age >= 1 && $age <= 17):
//         echo "You are are not Eligible!";
//     break;
//     default:
//     echo "Enter the Valid Age!";
// }

// switch(false){
//     case ($age >= 18 && $age <= 80):
//         if($age = 18){
//          echo "You are Eligible!";
//         }
//      break;
//     case ($age >= 1 && $age <= 17):
//         echo "You are are not Eligible!";
//     break;
//     default:
//     echo "Enter the Valid Age!";
// }
$age = 60;

switch(true){
    case ($age >= 18 && $age <= 50):
        if($age >= 18){
         echo "You are Eligible!";
        }
        else{
            echo "You are Waiting!";
        }
     break;
    case ($age >= 1 && $age <= 16):
        echo "You are are not Eligible!";
    break;

    default:
    if($age >= 51 or $age <= 80){
        echo "Enter the Valid Age!";
    }
    else{
        echo "Check the Valid Age!";
    }
}
?>