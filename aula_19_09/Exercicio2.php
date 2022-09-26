<?php 
	$valor1 = 13;
	$valor2 = 10;
	$valor3 = 5;
	$valor4 = 2;
 
 	function soma10($valor1, $valor2){
 		return($valor1%$valor2);
 	}
 	function soma5($valor1, $valor3){
 		return($valor1%$valor3);
 	}
 	function soma2($valor1, $valor4){
 		return($valor1%$valor4);
 	}

 	$r= soma10($valor1,$valor2);
 	$r1 = soma5($valor1,$valor3);
 	$r2 = soma2($valor1,$valor4);

 	if ($r==0){
 		echo "O numero ".$valor1." é divisivel por ".$valor2;
 	}
 	elseif ($r1==0){
 		echo "O numero ".$valor1." é divisivel por ".$valor3;
 	}
 	elseif ($r2==0){
 		echo "O numero ".$valor1." é divisivel por ".$valor4;
 	}
 	else {
 		echo "O numero ".$valor1." não é divisível por 10, 5 ou 2" ;
 	}
 ?>