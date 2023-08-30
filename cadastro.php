
<?php
    if(isset($_POST['submit_cadastro'])){ 
        /* usar o nome=submit. ex submit: name ="submit-2" logo POST['submit-2']*/
        include_once('config.php');
        $conta = $_POST['conta'];
        $senha = $_POST['password'];


        $result_verifica_conta = $conexao->prepare("SELECT * FROM contas WHERE conta = ?");
        $result_verifica_conta->bind_param("s",$conta);
        $result_verifica_conta->execute();
        // Obtendo o resultado
        $result = $result_verifica_conta->get_result();

        $criar_conta = $conexao->prepare("INSERT INTO contas(conta,senha) values('$conta','$senha')");

        // Verificando se encontramos alguma conta com esse nome
        if (!$result->num_rows > 0) {
            $criar_conta->execute();
            $criar_conta->close();
            $result_verifica_conta->close();
            header("location: conta_finalizada.php");
            
        }

        // Finalizando o statement
        $criar_conta->close();
        $result_verifica_conta->close();

/*

        $result = mysqli_query($conexao, "INSERT INTO contas(conta,senha) VALUES('$conta','$senha')");

*/ 

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
        <p class="inicio_texto">Crie sua conta</p>
        <a class="btn" id="btn_inicio" href="index.php">Inicio</a>
    </div>
    <div class='conteudo-form'>
        <form action="cadastro.php" method="post">
            <label for="conta">Conta</label><br>
            <input type="text" name="conta" id="conta_id"><br><br>
            <label for="password">Senha</label><br>
            <input type="password" name="password" id="password_id"><br><br>
            <label for="password_confirm">Confirmar Senha</label><br>
            <input type="password" name="password_confir" id="password_confir_id"><br>
            <span id="error_message" style="color: red;"></span><br>
            
            <br><input class='btn' type="submit" id="submit_id" value='Finalizar' name="submit_cadastro"></input>
    
        </form>
    </div>
</body>

<script src="./script-cadastro.js"></script>
</html>