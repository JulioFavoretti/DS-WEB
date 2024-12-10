<?php
                session_start();

                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'], $_POST['senha'])) {
                    include_once('connection.php');
                    $login = mysqli_real_escape_string($conexao, $_POST['login']);
                    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

                    $sql = "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'";
                    $resultado = mysqli_query($conexao, $sql);

                    if ($resultado && mysqli_num_rows($resultado) > 0) {
                        $linha = mysqli_fetch_assoc($resultado);
                        $_SESSION['login'] = $linha['email'];
                        $_SESSION['senha'] = $linha['senha'];
                    } else {
                        $_SESSION['erro'] = "Login ou senha inválidos.";
                        header('Location: index.php');
                        exit;
                    }
                }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #a8d5ba, #6fba82);
            color: #333;
        }

        .horizontal {
            display: block;
            background: #ffffff;
            border: 2px solid #6fba82;
            border-radius: 10px;
            width: 650px;
            margin: 50px auto;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form {
            display: inline-block;
            width: 48%;
            vertical-align: top;
            margin-bottom: 20px;
        }

        .form label {
            display: inline-block;
            width: 80px; 
            text-align: right;
            margin-right: 5px;
            font-weight: bold;
        }

        .form input {
            width: calc(100% - 90px);
            padding: 5px;
            border: 1px solid #6fba82;
            border-radius: 5px;
            box-sizing: border-box;
        }

        #botao, #botao1 {
            display: block;
            margin: 10px auto;
            width: 150px;
            padding: 10px;
            background: #6fba82;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        #botao:hover, #botao1:hover {
            background: #58a766;
        }

        .records {
            display: flex;
            gap: 20px;
        }

        .records > div {
            width: 48%;
        }

        .block {
            background: #eaf7eb;
            border: 1px solid #6fba82;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        h3 {
            color: #3a6e4f;
            border-bottom: 2px solid #6fba82;
            padding-bottom: 5px;
        }

        a button {
            background: #6fba82;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a button:hover {
            background: #58a766;
        }
    </style>
</head>
<body>
    <div class="horizontal">
        <div>
            <!-- Formulário para produtos -->
            <form class="form" action="produto.php" method="POST">
                <label for="nomeP">Nome: </label>
                <input required type="text" id="nomeP" name="nomeP">
                <br>
                <label for="Descricao">Descrição:</label>
                <input required id="Descricao" type="textarea" name="descricao">
                <br>
                <label for="valor">Valor: </label>
                <input required id="valor" type="number" step="0.01" max="1000000" min="0.01" name="Valor">
                <br>
                <input id="botao1" type="submit" value="Salvar Produto">
            </form>

            <!-- Formulário para clientes -->
            <form class="form" action="cliente.php" method="POST">
                <label for="nameC">Nome: </label>
                <input required id="nameC" type="text" name="nomeC">
                <br>
                <label for="email">Email: </label>
                <input required type="text" name="email" id="email">
                <br>
                <label for="senha">Senha:</label>
                <input required id="senha" name="senha" type="text">
                <br>
                <input id="botao" type="submit" value="Salvar Cliente">
            </form>
        </div>

        <br><br>

        <!-- Registros de produtos e clientes -->
        <div class="records">
            <!-- Registros de produtos -->
            <div>
                <h3>Produtos</h3>
                <?php
                include_once('connection.php');

                $sql = "SELECT * FROM produtos ";
                $resultado = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($resultado) > 0) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<div class='block'>Nome: " . $linha['nome'] . " - Descrição: " . $linha['descricao'] . " - Valor: R$" . $linha['preco'] . "</div>";
                    }
                } else {
                    echo "<p>Nenhum produto encontrado.</p>";
                }
                ?>
            </div>

            <!-- Registros de clientes -->
            <div>
                <h3>Clientes</h3>
                <?php
                $sql = "SELECT * FROM usuarios ";
                $resultado = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($resultado) > 0) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<div class='block'>ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . " - Email: " . $linha['email'] . "</div>";
                    }
                } else {
                    echo "<p>Nenhum cliente encontrado.</p>";
                }
                ?>
            </div>
        </div>

        <div>
            <?php

                if (isset($_SESSION['login']) && isset($_SESSION['senha'])) {
                    echo '<br>';
                    echo "<form action='cookie.php' method='POST'>
                            <input type='submit' value='Salvar Cookies'>
                          </form>";
                    echo '<a href="logout.php"><button>Logout</button></a>';
                } else {
                    header('Location: index.php');
                    exit;
                }
            ?>
        </div>
    </div>
</body>
</html>
