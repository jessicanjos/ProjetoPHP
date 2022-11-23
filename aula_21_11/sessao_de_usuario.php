<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Página WEB - Sessão de Usuário</title>
</head>
<body>
    <?php 

        session_start();

        $_SESSION['nome'] = "Administrador";

        session_destroy();


     ?>
     <h3> Sessão de Usuário </h3>

     Bem Vindo, Sr. <?php echo $_SESSION['nome']; ?>

</body>
</html>