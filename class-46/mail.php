<?php

// PHP : How to Send Email

// mail(to, subject, message, headers)

$to = "sk4809656@gmail.com";
$subject = "Hello Electro-Tech Solution";
$message = "Hello Electro-Tech Solution to learn Simple Codeing and IOT";
$from = "electrotech6306@gmail.com";
$headers = "From: $from";
mail($to, $subject, $message, $headers);
if (mail) {
    # code...
    echo "Mail Send Successfully";
}else {
    
    echo "Mail Send Faild";
}

?>