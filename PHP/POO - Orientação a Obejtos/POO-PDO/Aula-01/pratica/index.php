<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <style>
        body {
            background-color: #eaeaea;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
        }
        #container {
            background-color: white;
            border: solid 2px #ccc;  /*preto*/
            padding: 40px;
            border-radius: 8px;
            width: 400px;
        }
        #formulario {
            border: solid 2px #ddd;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        #inputNome, #inputEmail {
            display: block;
            margin: 0 auto 15px;
            width: 100%;
        }
        
        #btnEnviar {
            width: 100%;
            padding: 10px;
            background-color: #555;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        #btnEnviar:hover {
            background-color: #444;
        }
        #consulta {
            margin-top: 20px;
            padding: 10px;
            background: #f5f5f5; /*Cinza claro*/
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <br><br><br><br><br>
    <div id="container">
        <?php include 'conexao.php'; ?>
        
        <h4>Inserção de Dados</h4>
        
        <div id="formulario">
            <form action="conexao.php" method="POST">
                <label class="label" for="inputNome">Nome:</label>
                <input type="text" id="inputNome" name="nome" required>
                
                <label class="label" for="inputEmail">E-mail:</label>
                <input type="email" id="inputEmail" name="email" required>
                
                <button id="btnEnviar" type="submit">Enviar</button>
            </form>
        </div>

        <div id="consulta">
            <h4>Consulta de Dados</h4>
            <?php
                $dados = $db->query("SELECT * FROM clientes");
                $todos = $dados->fetchAll(PDO::FETCH_ASSOC);
                
                foreach ($todos as $linha) {
                    echo "ID: " . $linha['id'] . " | ";
                    echo "Nome: " . $linha['nome'] . " | ";
                    echo "E-mail: " . $linha['email'];
                    echo "<br>";
                }
            ?>
        </div>
    </div>
</body>
</html>
