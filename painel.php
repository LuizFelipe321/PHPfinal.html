<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h2>Bem-vindo,
    <?php
       session_start();
       if (!isset($_SESSION["usuario"])) {
        header("Location: login.html");
        exit;
    } else {
       echo htmlspecialchars($_SESSION['usuario_nome']);
       }
    ?>
    </h2>
    <p><a href= "logout.php">Sair</a></p>
    <br>
    <p><a href="alterasenha.html">Alterar Senha</a></p>
    
</body>
</html>