<?php 
	$ano = 2020; //variável local no script

	//implementação de uma função 
	function exibir(){
		STATIC $ano; //definição da variável estatica 
		$ano++;//Mesma coisa que ano + 1
		echo "<br/>" .$ano;
	}

	echo exibir();
	echo exibir();
	echo exibir();
		
 ?>