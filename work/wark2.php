<?php
$a=150;$b=5000;$c=100;
if($a>$b)
{
	if($a>$c)
	{
		echo("a is the largest!");
	}
	else{
		echo("c is the largest!");
	}
}
elseif($b>$c)
{
	echo("b is the largest!");
}else
{
	echo("c is the largest!");
}
?>