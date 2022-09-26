<?php 
	$valor1 = 5;
	$valor2 = 1;
 
 	function soma($valor1, $valor2){
 		return($valor1+$valor2);
 	}
 	function soma1($valor1, $valor2){
 		return($valor1+$valor2)+8;
 	}
 	function soma2($valor1, $valor2){
 		return($valor1+$valor2)-5;
 	}

 	$soma= soma($valor1,$valor2);
 	$result = soma1($valor1,$valor2);
 	$result1 = soma2($valor1,$valor2);

 	if ($soma>20){
 		echo $result;
 	}
 	else {
 		echo $result1;
 	}
 ?>