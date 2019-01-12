<?php
$a=1;
 $b=1;
 echo "a=1" ." b=1" ."<br>";
for($i=0; $i<20; $i++){
$c=$a + $b;
echo $c . "<br>";
$a= $b;
$b= $c;
	
}
?>

