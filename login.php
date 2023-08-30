<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (isset($_POST['submit']) && !empty(trim($_POST['conta'])) && !empty(trim($_POST['password']))) {
        include_once('config.php');
        $conta = $_POST['conta'];
        $senha = $_POST['password'];

                // Preparando a query
        $stmt = $conexao->prepare("SELECT * FROM contas WHERE conta= ? AND senha= ?");

        // Ligando os parâmetros às variáveis
        $stmt->bind_param("ss", $conta, $senha);  // "ss" significa que ambos os parâmetros são strings

        // Executando a query
        $stmt->execute();

        // Obtendo o resultado
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            header("location: login_sucesso.php");
            exit;
        }
    }
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Meu Primeiro Script PHP</title>
</head>
<body>
<div class='inicio'>
        <p class="inicio_texto">Entre em sua conta</p>
        <a class="btn" id="btn_inicio" href="index.php">Inicio</a>
    </div>
    <div class='conteudo-form'>
        <form action="login.php" method="POST">
            <label for="conta">Conta</label><br>
            <input type="text" name="conta" id="conta_id" required><br><br>
            <label for="password">Senha</label><br>
            <input type="password" name="password" id="password_id" required><br><br>

            <button class='btn' type="submit" name="submit" id="submit">Entrar</button>
        </form>
    </div>
</body>
</html>