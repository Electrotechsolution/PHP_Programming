<?php
// $file = fopen("read.txt", "r+");

// fwrite($file, "Electro-Tech");
// echo fread($file, 300);

// $file = fopen("read.txt", "w+");
// fwrite($file, "Electro-Tech");
// echo fread($file, 10);

$file = fopen("read.txt", "a+");
fwrite($file, "\nElectro-Tech");
?>