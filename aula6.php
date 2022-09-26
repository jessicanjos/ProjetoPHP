<?php 
	$ano = 2020; //variável local no script

	//implementação de uma função 
	function exibir($parametro){
		//variavel como parâmetro 
		$parametro = $parametro + 4;
		return $parametro;
	}
	echo "Estamos em " .$ano " e daqui a 4 anos estaremos em " .exibir($ano);
	}
 ?>