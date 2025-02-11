

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de login</title>
</head>
<body>

<form action="login.php" method="post" >
        <h2>Sistema de Login</h2>
        <label for="nome" >Usuario:</ label><br>
        <input type="text" name="nome" id="nome" required autofocus> <br>

        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha" required placeholder="Exemplo: rfHGa@sda32" > <br> 

        <!--Botão de redirecionamento para enviar o formulario para outra pagina -->
        <input type="submit" name="enviar" value="ENVIAR"><br>

</form> 

    
</body>
</html>


