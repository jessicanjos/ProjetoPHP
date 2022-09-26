<?php 
$operador=1;
$num1=10;
$num2=20;
$result;
$opera="";

switch ($operador){
	case 1: $result=somaValor($num1, $num2);
	$opera="soma";
	break;

	case 2: $result=subValor($num1, $num2);
	$opera="subtração";
	break;

	case 2: $result=divValor($num1, $num2);
	$opera="divisão";
	break;

	case 2: $result=multValor($num1, $num2);
	$opera="multiplicação";
	break;

	case 2: $result=restoValor($num1, $num2);
	$opera="resto";
	break;
}


function somaValor ($num1,$num2){
	return ($num1+$num2);
}
function subValor ($num1,$num2){
	return ($num1-$num2);
}
function divValor ($num1,$num2){
	return ($num1+$num2);
}
function multValor ($num1,$num2){
	return ($num1+$num2);
}
function restoValor ($num1,$num2){
	return ($num1+$num2);
} 
echo "O resultado da ".$opera ." é ".$result;
?>