<?php
/**************************** For Read File **************************/
// This fread  function read file with mentions (200) size.

// $file = fopen("read.txt", "r");
// echo fread($file, 200);

/**************************** For Read File Full Size **************************/
// This fread & filesize function read full file size.

// $file = fopen("read.txt", "r");
// echo fread($file, filesize("read.txt"));

/**************************** For single line **************************/
// This fgets function only read for single line.

// $file = fopen("read.txt", "r");
// echo fgets($file) . "<br>"; 
// echo fgets($file);

/**************************** For total char **************************/
// This ftell function read and count the toatal number of char in a reading file.

$file = fopen("read.txt", "r");
echo fgets($file) . "<br>"; 
echo ftell($file);
?>