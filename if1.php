<?php

for($i=1; $i<=100; $i++){
	if(checkIfEven($i)){
		echo $i . "-> " . "Even " . "<br>";
	} else {
		echo $i . "-> " . "Odd " . "<br>";
	}
	
	
	
}
function checkIfEven($n){
	return $n % 2 ==0;
}
?>