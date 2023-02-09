<?php 
//Criando uma conexão com o banco de dados

$con = mysqli_connect("localhost","etecia","123456","db_2h2022");

//Checando conexão

if (mysqli_connect_error()){

	echo "Erro ao conectar com a base de dados".mysqli_connect_error();
}

else{

	echo "Conexão aberta";

	mysqli_close($con);
}

 ?>
