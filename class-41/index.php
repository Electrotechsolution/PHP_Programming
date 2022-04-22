<?php
/************************************** fseek function for file in php ************************************/
// The fseek function is used to retrive the data which we requird in a index number of lines.

// $file = fopen("read.txt", "r");
// echo fgets($file) . "<br>"; 
// fseek($file, 22);
// echo "<br>" . fgets($file);

/************************************** fpassthru function for file in php ************************************/
// The fpassthru is used to get all the information of $file.
// $file = fopen("read.txt", "r");
// echo fgets($file) . "<br>"; 
// echo "<br>" . fpassthru($file);

/************************************** rewind function for file in php ************************************/
// The rewind  
$file = fopen("read.txt", "r");
echo fgets($file) . "<br>"; 
echo "<br>" . fpassthru($file);
// rewind($file);
echo "<br>" . fpassthru($file);

?>
<?php

// $file = fopen("read.txt", "r");
// echo fread($file, 100);


// $file = fopen("read.txt", "r");
// echo fgets($file);

// $file = fopen("read.txt", "r");
// echo fgets($file);
// echo ftell($file);


// $file = fopen("read.txt", "r");
// // echo fgets($file);
// fseek($file, 40);
// echo  "<br>" . fgets($file);

// $file = fopen("read.txt", "r");
// echo fgets($file);
// echo  "<br>" . fpassthru($file);

$file = fopen("read.txt", "r");
echo fgets($file);
echo  "<br>" . fpassthru($file);
rewind($file);
echo  "<br>" . fpassthru($file);


?>