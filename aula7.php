<?php 
	$ano = 2020; //variável local no script

	//implementação de uma função 
	function exibir(){
		GLOBAL $ano; //definição da variável 
		$ano++;//Mesma coisa que ano + 1
		return $ano;
	}
	echo "<br/> Ano:  " .$ano;
	echo "<br/> Ano:  " .exibir();
	echo "<br/> Ano:  " .exibir();
	echo "<br/> Ano:  " .$ano;
	
 ?>