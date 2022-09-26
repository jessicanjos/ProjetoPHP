<?php 

	$nome = "Armandino";//variável local no script

	//implementação de uma função

	function exibir(){
		$nome = "Josefina";//variável local na função
		echo "valor da variável dentro da função" .$nome;
}

	exibir();//chamada da função

 	echo "<br/> valor da variável fora da função" .$nome;

 ?>