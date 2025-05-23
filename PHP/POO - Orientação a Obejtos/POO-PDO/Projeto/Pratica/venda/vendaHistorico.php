<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System</title>
    <link rel="shortcut icon" type="imagex/png" href="../assets/img/ico.svg">
    <link rel="stylesheet" href="../assets/style/style.css">

</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="../index.php" class="meumenu" title="Home">Home</a></li>
            <li><a href="../cliente.php" class="meumenu" title="Clientes">Clientes</a></li>
            <li><a href="../produto.php" class="meumenu" title="Produtos">Produtos</a></li>
            <li><a href="venda.php" class="meumenu meumenu-active" title="Vendas">Vendas</a></li>
        </ul>
    </div>
    <div class="container">
        <hr>
        <h2>Histórico de Vendas</h2>
        <table id='clientes'>
            <tr>
                <th>Nº da Venda:</th>
                <th>Data da Venda:</th>
                <th>Cliente:</th>
            </tr>
<?php  
    include '../conexao.php';

    //Select para pegar os dados da venda
    $dados = $db->query("SELECT * FROM vendas");
    $todos = $dados->fetchAll(PDO::FETCH_ASSOC);
    foreach($todos as $linha){
        extract($linha);
        //Select para pegar os dados do cliente
        $stmt = $db->prepare("SELECT * FROM clientes WHERE id = :idCliente");
        $stmt->bindParam(":idCliente", $idCliente);
        $stmt->execute();
        $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "<table id='clientes'>";
        echo "<tr>";
            echo "<th>".$id."</th>";
            $data = new DateTime($dataVenda);
            echo "<th>".$data->format('d/m/Y H:i:s')."</th>";
            echo "<th>".$cliente['nome']."</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>Produto</th>";
            echo "<th>Quantidade</th>";
            echo "<th>Preço Unitário</th>";
        echo "</tr>";
        //Select para pegar os dados dos produtos vendidos
        $stmt = $db->prepare("SELECT * FROM produtosvendidos WHERE idVenda = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $produtosVendidos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($produtosVendidos as $produtoVendido){
            //Select para pegar os dados dos produtos
            $stmt = $db->prepare("SELECT * FROM produto WHERE id = :idProduto");
            $stmt->bindParam(":idProduto", $produtoVendido['idProduto']);
            $stmt->execute();
            $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($produtos as $produto) {
                echo "<tr>";
                    echo "<td>" . $produto['nome'] ."</td>";
                    echo "<td>". $produtoVendido['quantidade'] . "</td>";
                    echo "<td>". $produtoVendido['preco']."</td>";
                echo "</tr>";
            }

        }
        echo "</table>";
        echo "<br>";
    }

        echo "</table>";
        echo "<br>";   
    ?>
</div>

</body>
<script src="../assets/js/venda.js"></script>
<script src="https://kit.fontawesome.com/8403ba6cce.js" crossorigin="anonymous"></script>
</html>