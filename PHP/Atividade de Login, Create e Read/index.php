<?php
    session_start();
    
    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
        header('Location: dashboard.php');
    }
    if(isset($_SESSION['erro'])){
        echo '<p style="color:red">' . $_SESSION['erro'] . '</p><br>';
        session_unset();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #a8e063, #56ab2f); /* Gradiente verde */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .container h1 {
            color: #4CAF50; /* Verde mais escuro */
            margin-bottom: 20px;
        }
        .container label {
            display: block;
            margin-top: 10px;
            color: #333;
        }
        .container input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .container input[type="submit"] {
            margin-top: 20px;
            background: #4CAF50; /* Botão verde */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .container input[type="submit"]:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistema de Login</h1>
        <form action="dashboard.php" method="POST">
            <label for="name">Login:</label>
            <input id="name" type="text" name="login" required>
            <label for="senha">Senha:</label>
            <input id="senha" type="text" name="senha" required>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>
