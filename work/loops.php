<?php  
$x = 1;
 
while($x <= 10) {
  echo "The number is: $x <br>";
  $x++;
} 
?>  





<?php 
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 0);
?>




<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>  




<?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
//  echo "$value <br>";
}
?> 




<html>
<head>
	<style>
	#d1{
border: 2px solid blue;
margin: 5px;

	}
</style>
</head>
<body>
	<?php
  $color = array("red", "green", "blue", "yellow"); 
	for($i=0; $i<=3; $i++){
		echo  "<div id=d1> $color[$i]  </div>";
	}
	?>
</body>
</html>


<?php  
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>