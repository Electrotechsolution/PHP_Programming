<?php
    $file = "read.txt";
    /**************************** Readfile in PHP ************************** */
    // if(file_exists($file)){
    //     echo readfile("read.txt");
    // }else{
    //     echo " File Con't  Exists";
    // }

     /****************************  Copyfile in PHP ************************** */
    // if(file_exists($file)){
    //         echo readfile("new_read.txt");
    //         copy($file, "new_read.php");
    // }else{
    //     echo " File Con't  Exists";
    // }

 /**************************** Renamefile in PHP ************************** */
    // if(file_exists($file)){
    //     rename("new_read.php", "old_read.php");
    //     echo "Rename is Successfully";
    // }else{
    //     echo " File Con't  Exists";
    // }

     /**************************** Unlink in PHP ************************** */

    // if(file_exists($file)){
    //     unlink("old_read.php");
    //     echo "Unlink is Successfully";
    // }else{
    //     echo " File Con't  Exists";
    // }

     /**************************** Delete in PHP ************************** */

    //  if(file_exists($file)){
    //     delete("read.txt");
    //     echo "Deleted is Successfully";
    // }else{
    //     echo " File Con't  Exists";
    // }

     /**************************** Create Dir in PHP ************************** */
    //     $folder = "electrotech_tut";
    //  if(!file_exists($folder)){
    //     mkdir("electrotech_tut");
    //     echo "Created Dir  is Successfully";
    // }else{
    //     echo "Created Dir  is Faild";
    // }

    /**************************** Remove Dir in PHP ************************** */
//     $folder = "electrotech_tut";
//     if(file_exists($folder)){
//        rmdir("electrotech_tut");
//        echo "Remove Dir  is Successfully";
//    }else{
//        echo "Remove Dir  is Faild";
//    }

/**************************** file size Dir in PHP ************************** */
    
    if(file_exists($file)){
       echo filesize($file);
   }else{
       echo "File Siz  is Faild";
   }
?>
