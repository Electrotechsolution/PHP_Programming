<?php
// filter_var();
// $zero = 0;
// if(filter_var($zero, FILTER_VALIDATE_INT) === 0 || !filter_var($zero, FILTER_VALIDATE_INT) === false){
//     echo "Zero is valid";
// }
// else{
//     echo "Zero is not valid ";

// $email = "info@electrotechsolution.com";
// if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
//     echo "Email is valid";
// }
// else{
//     echo "Email is not valid ";
// }


// $ip = "192.168.43.1";
// if(!filter_var($ip, FILTER_VALIDATE_IP) === false){
//     echo "IP is valid";
// }
// else{
//     echo "IP is not valid ";
// }

$url = "https://electrotechsolution.com";
if(!filter_var($url, FILTER_VALIDATE_URL) === false){
    echo "URl is valid";
}
else{
    echo "URL is not valid ";
} 
?>