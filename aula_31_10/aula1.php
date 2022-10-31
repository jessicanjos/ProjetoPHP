<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>
<body>
	<h2>Formulário</h2>
	<form name="cadastro" method="get" action="pagina_form.php">
		Nome: <input type="text" name="nome"> <br><br>
		Senha: <input type="text" name="senha"> <br><br>
		<input type="checkbox" name="termouso" value="termo">
		Aceito o termo de uso <br><br>
		<input type="radio" name="sexo" value="fem">Feminino
		<br>
		<input type="radio" name="sexo" value="masc">Masculino
		<br>
		&nbsp;&nbsp;&nbsp;
		<input type="button" name="VOLTAR">
		&nbsp;&nbsp;&nbsp;
		<input type="reset" name="LIMPAR">
		&nbsp;&nbsp;&nbsp;
		<input type="submit" name="ENVIAR">

	</form>
</body>
</html>