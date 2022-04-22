<?php
// $myfile = fopen("read.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("read.txt"));
// fclose($myfile);

$myfile = fopen("read.txt", "w") or die("Unable to open file!");
$txt = "Shilpa Bhatia\n";

$filew = fwrite($myfile, $txt);
// echo fread($myfile,filesize("read.txt"));
if($filew){
    echo fread($myfile,filesize("read.txt"));
}else{
    echo "Changed Successfully This file";
}
// fclose($myfile);



?>