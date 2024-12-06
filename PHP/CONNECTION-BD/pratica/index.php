<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <style>
        .horizontal {
            display: block;
            border: 2px solid black;
            width: 650px;
            margin: auto;
            padding: 10px;
        }

        .form {
            display: inline-block;
            width: 48%;
            vertical-align: top;
        }

        .form label {
            display: inline-block;
            width: 80px; 
            text-align: right;
            margin-right: 5px;
        }

        .form input {
            width: calc(100% - 90px); /* Calc é utilizado para fazer um calculo, deixando assim os inputs alinhados. */
            box-sizing: border-box;
        }

        .records {
            display: flex; /* Usa flexbox para organizar os registros lado a lado */
            gap: 20px;
        }

        .records > div{ /* Apenas os filhos diretos são alterados, sendo assim, possivel a alteração das outras divs que estão dentro das divs dentro dessa div.*/
            width: 48%; /* Cada bloco ocupa +/- 50% do espaço com espaçamento */
        }

        .block {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }  
        #botao{
            margin-left:163px;
            width: 150px;
        }
        #botao1{
            margin-left:163px;
            width: 150px;
        }

    </style>
</head>

<body>
    <div class="horizontal">
        <div>
            <!-- Formulário para produtos -->
            <form class="form" action="produto.php" method="POST">
                <label>Nome: </label>
                <input type="text" name="nomeP">
                <br>
                <label>Valor: </label>
                <input type="number" name="valor">
                <br>
                <label>Estoque: </label>
                <input type="number" name="estoque">
                <br>
                <input id="botao1" type="submit" value="Salvar Produto">
            </form>

            <!-- Formulário para clientes -->
            <form class="form"  action="cliente.php" method="POST">
                <label>Nome: </label>
                <input type="text" name="nomeC">
                <br>
                <label>Email: </label>
                <input type="text" name="email">
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

                $sql = "SELECT * FROM produto ";
                $resultado = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($resultado) > 0) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<div class='block'>ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . " - Valor: " . $linha['valor'] . " - Estoque: " . $linha['estoque'] . "</div>";
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
                $sql = "SELECT * FROM cliente ";
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
    </div>
</body>
</html>
