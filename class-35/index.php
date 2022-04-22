<?php
    $file = "read.txt";
    
    // if(file_exists($file)){
    //     echo readfile("read.txt");
    // }else{
    //     echo " File Con't  Exists";
    // }

    if(file_exists($file)){
            echo readfile("new_read.txt");
            copy($file, "new_read.php");
    }else{
        echo " File Con't  Exists";
    }

?>
