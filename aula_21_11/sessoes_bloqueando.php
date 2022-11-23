<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bloqueando páginas por sessões</title>
    <?php 

    session_start();

    $_SESSION["nome"] = $_POST["nome"];

    $_SESSION["senha"] = $_POST["senha"];

     ?>


</head>
<body>

<b> Funcionário: </b> <?php echo $_SESSION["nome"] ?>, logado com sucesso.<br/>

<b> Data de conexão: </b> <?php echo date("d/m/Y") ?> <br>

<b> Hora de conexão: </b> <?php echo date("H:i:s") ?> <br>

<a href="sessoes_verifica_sessao.php"> Área de administrador </a>

</body>
</html>