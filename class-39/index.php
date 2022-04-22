<?php
    // $file = "read.txt";
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
//     $folder = "ele ctrotech_tut";
//     if(file_exists($folder)){
//        rmdir("electrotech_tut");
//        echo "Remove Dir  is Successfully";
//    }else{
//        echo "Remove Dir  is Faild";
//    }

/**************************** file size Dir in PHP ************************** */
    
//     if(file_exists($file)){
//        echo filesize($file);
//    }else{
//        echo "File Siz  is Faild";
//    }

/**************************** file type  in PHP ************************** */
// $file = "read.txt";
// if(file_exists($file)){
//     echo filetype($file);
// }else{
//     echo "File Type  is Faild";
// }

/**************************** folder type  in PHP ************************** */
// $file = "read.txt";
// $folder = "electrotech_tut";
// if(file_exists($folder)){
//     echo filetype($folder);
// }else{
//     echo "Folder Type  is Faild";
// }

/**************************** filepath  in PHP ************************** */
// $file = "read.txt";
// // $folder = "electrotech_tut";
// if(file_exists($file)){
//     echo realpath($file);
// }else{
//     echo "File Realpath  is Faild";
// }
/**************************** fileinfo  in PHP ************************** */
// $file = "read.txt";
// // $folder = "electrotech_tut";
// if(file_exists($file)){
//     echo "<pre>";
//     print_r(pathinfo($file));
//     echo "</pre>";
// }else{
//     echo "File Realpath  is Faild";
// }

/**************************** Base name  in PHP ************************** */

// $file = "read.txt";
// $folder = "electrotech_tut";
// if(file_exists($folder)){
//    echo basename($folder);
// }else{
//     echo "File Base Name  is Faild";
// }

/**************************** Dir name  in PHP ************************** */
// $file = "read.txt";
$folder = "electrotech_tut";
if(file_exists($folder)){

   echo dirname($folder);
}else{
    echo "File Dir Name  is Faild";
}
?>
