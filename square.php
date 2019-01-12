<?php

for($i=1; $i<=10; $i++){
	$j=$i * $i;
	echo "Square of " . $i ." is " . $j . "<br>";
	if(checkIfeven($j)){
		echo $j ." is " ." even. "."<br>";
	}else
	echo $j ." is " ." odd. " ."<br>";
}

function checkIfeven($n){
	return $n % 2 ==0;
}
?>