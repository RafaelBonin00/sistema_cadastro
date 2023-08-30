
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class='inicio'>
        <p class="inicio_texto">Conta criar com sucesso.</p>
        <a class="btn" id="btn_inicio" href="index.php">Inicio</a>
    </div>
    <div class='conteudo'>
        <form action="login_sucesso.php">
            <label for="conta">Conta:</label>
            <input type="text" name="conta" id="conta_id"><br>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password_id"><br>
            <br>
            <button class='btn' type="submit" id="submit_id">Entrar</button>
        </form>

    
       

    </div> 
</body>
</html>