<?php 
//Criando uma conexão com o bando de dados

$con = mysqli_connect("localhost","etecia","123456");

//Checando conexão

if (mysqli_connect_error()){

	echo "Erro ao conectar com a base de dados".mysqli_connect_error();
}

else{
	$sql = "CREATE DATABASE db_2HPW2";
	if(mysqli_query($con, $sql)){

		echo "<br/>Base de Dados criada com sucesso!";
	}
	else{

		echo "<br/>Erro: ".mysqli_error($con);
	}

	//mysqli_close($con);
}

 ?>