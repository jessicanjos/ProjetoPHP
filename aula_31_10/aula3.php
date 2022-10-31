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
		<input type="submit" name="ENVIAR">
		<br><br>
		<a href="#" onclick="document.cadastro.reset()">LIMPAR</a>

	</form>
	<button onclick="window.location.href='http://google.com.br'">Google</button>
	<button onclick="window.location.reload()">Atualizar a página</button>
	<button onclick="window.location.print()"></button>
	<button onclick="window.location.history.back()">Voltar</button>
</body>
</html>