<?php

// PHP : How to Send Email

// mail(to, subject, message, headers)

$to = "sk4809656@gmail.com";
$subject = "Hello Electro-Tech Solution";
$message = "Hello Electro-Tech Solution to learn Simple Codeing and IOT";
// $from = "electrotech6306@gmail.com";
$headers = ["MIME-Version: 1.0",
            "Contant-type: text/plain; charset=utf-8",
            "From : electrotech6306@gmail.com",
            "Cc : bhatia.shilpa15@gmail.com",
            "Bcc : hellotechsantoshji@gmail.com"

            
            ];
mail($to, $subject, $message, $headers);
if (mail) {
    # code...
    echo "Mail Send Successfully";
}else {
    
    echo "Mail Send Faild";
}

?>