<?php
    include "conexao.php";
    echo "<h4>Historico de compras</h4>";

    // Consulta as vendas
    $dadosV = $db->query("SELECT dataVenda, idCliente FROM vendas")->fetchAll(PDO::FETCH_ASSOC);

    // Consulta os produtos vendidos
    $dadosPV = $db->query("SELECT idProduto, preco FROM produtosvendidos")->fetchAll(PDO::FETCH_ASSOC);

    echo "<table id='vendas'>";
    echo "
        <tr>
            <th>Data</th>
            <th>Nome do Cliente</th>
            <th>Produto vendido</th>
            <th>Preço</th>
        </tr>
    ";

    // Itera sobre os dados e exibe na tabela
    foreach ($dadosV as $venda) {
        foreach ($dadosPV as $produto) {
            echo "<tr>";
            echo "<td>{$venda['dataVenda']}</td>";
            echo "<td>{$venda['idCliente']}</td>";
            echo "<td>{$produto['idProduto']}</td>";
            echo "<td>{$produto['preco']}</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
?>
