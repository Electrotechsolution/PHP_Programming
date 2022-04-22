<?php

if(isset($_FILES['photos'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    echo $file_name = $_FILES['photos']['name'];
    echo $file_size = $_FILES['photos']['size'];
    echo $tmp_name = $_FILES['photos']['tmp_name'];
    echo $file_type = $_FILES['photos']['type'];

    if(move_uploaded_file($tmp_name,"up-img/" . $file_name)){
        echo "Successfully Uploaded!";
    }
    else{
        echo "Faild Uploaded File!";
    }
}
?>