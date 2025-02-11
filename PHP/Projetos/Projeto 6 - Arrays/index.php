<?php


/*Parte 01 - Crie um array simples de frutas contendo pelo menos cinco itens.
    Exiba todos os elementos usando um foreach . */
$frutas = array ("Melão", "Uva", "Laranja", "Acerola", "Banana");

    echo "<h4>Exercício 01:</h4>";
    foreach($frutas as $sabor ){
        echo "Fruta: " . $sabor . "<br>";
    }

    echo "<br>" . "<br>" . "<br>";

/* Parte 02 - Adicione um novo elemento ao array.
    Exiba o array atualizado. */

    echo "<h4>Exercício 02:</h4>";
    array_push($frutas, "Pera"); //Adiciona no fim
    foreach($frutas as $sabor ){
        echo "Fruta: " . $sabor . "<br>";
    }

    echo "<br>" . "<br>" . "<br>";

/* Parte 03 - Ordene o array em ordem alfabética.
    Exiba o array ordenado.*/

    echo "<h4>Exercício 03:</h4>";
    sort ($frutas);

    foreach($frutas as $sabor){
        echo "Fruta: " . $sabor . "<br>";
    }
    
    echo "<br>" . "<br>" . "<br>";

    /* Parte 04 - Transforme as frutas em um array associativo com informações adicionais. */

    echo "<h4>Exercício 04:</h4>";
    $frutasAssociativo = array(
        "Melão" => array("preco" => 3.50, "estoque" => 20), 
        "Uva" => array("preco" => 5.00, "estoque" => 50),
        "Laranja" => array("preco" => 2.00, "estoque" => 100),
        "Acerola" => array("preco" => 4.00, "estoque" => 30),
        "Banana" => array("preco" => 1.50, "estoque" => 80),
        "Pera" => array("preco" => 6.00, "estoque" => 25) // Adicionado anteriormente
    );

    echo "<ul>";
    foreach ($frutasAssociativo as $nome => $detalhes) {
        echo "<li>";
        echo "Fruta: " . $nome . "<br>";
        echo "Preço: R$ " . number_format($detalhes["preco"], 2, ',', '.') . "<br>";
        echo "Estoque: " . $detalhes["estoque"] . " unidades<br>";
        echo "</li><br>";
    }
    echo "</ul>";

    echo "<br>" . "<br>" ;

    /* Parte 05 - Atualize o preço de um produto e exiba novamente as informações. */

echo "<h4>Exercício 05:</h4>";

// Atualizar o preço de uma fruta (exemplo: Uva)
$frutaAtt = "Uva";
$novoPreco = 5.50;


    $frutasAssociativo[$frutaAtt]["preco"] = $novoPreco;
    echo "Preço da fruta '$frutaAtt' atualizado para: R$ " . number_format($novoPreco, 2, ',', '.') . "<br><br>";

ksort($frutasAssociativo);

// Exibir o array atualizado
echo "<ul>";
foreach ($frutasAssociativo as $nome => $detalhes) {
    echo "<li>";
    echo "Fruta: " . $nome . "<br>";
    echo "Preço: R$ " . number_format($detalhes["preco"], 2, ',', '.') . "<br>";
    echo "Estoque: " . $detalhes["estoque"] . " unidades<br>";
    echo "</li><br>";
}
echo "</ul>"; 

echo "<br>" . "<br>";

/* Parte 06 - Calcule a venda de 5 unidades do produto do array.
    Valor total = preco * unidades */
    echo "<h4>Exercício 06:</h4>";

    // Número de unidades
    $quantidade = 5;
    
    // Percorrer a lista de frutas
    echo "<ul>";
    foreach ($frutasAssociativo as $nome => $detalhes) {
        if ($nome === "Uva") {
            $precoUnitario = $detalhes["preco"];
            $valorTotal = $precoUnitario * $quantidade;
            $estoqueAtualizado = $detalhes["estoque"] - $quantidade;
            echo "Fruta: " . $nome . "<br>";
            echo "Preço: R$ " . number_format($detalhes["preco"], 2, ',', '.') . "<br>";
            echo "Preço da venda de 5 Uvas: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
            echo "Estoque depois das vendas: " . $estoqueAtualizado . " unidades<br>";
        }
        else{
            echo "<li>";
            echo "Fruta: " . $nome . "<br>";
            echo "Preço: R$ " . number_format($detalhes["preco"], 2, ',', '.') . "<br>";
            echo "Estoque: " . $detalhes["estoque"] . " unidades<br>";
            echo "</li><br>";

        }
    }

    echo "</ul>";

    echo "<br><br><br>";

    /*Parte 07 - Juntar dois arrays
        Crie dois arrays:
        Um contendo os nomes de produtos: ["Teclado", "Mouse", "Monitor"] .
        Outro contendo os preços desses produtos: [150.00, 80.00, 1200.00] .
        Combine os dois arrays em um array associativo, onde o nome do
        produto seja a chave e o preço o valor.
        Exiba o array resultante.*/ 


    echo "<h4>Exercício 07:</h4>";


    $times = array("Palmeiras", "Botafogo", "Internacional" ,"Fortaleza", "Flamengo", "São Paulo", "Cruzeiro", "Bahia");
    $posição = array("1° colocado: ", "2° colocado: ", "3° colocado: ", "4° colocado: ", "5° colocado: ", "6° colocado: ",
     "7° colocado: ", "8° colocado: ");

    $tblf = array_combine($times, $posição);
    print_r ($tblf);
    
    echo "<br><br><br>";

    /*Parte 08 - Verifique se um elemento existe
    Crie um array de cores: ["vermelho", "azul", "verde", "amarelo", "preto"] .

    Atividade - Uso de Array 2

    Verifique se a cor "verde" está presente no array.
    Exiba uma mensagem informando o resultado.*/

    echo "<h4>Exercício 08:</h4>";
    $cores = array("vermelho", "azul", "verde", "amarelo", "preto");
    if(in_array("verde", $cores)){
        echo "A cor verde foi encontrada";
    } else{
        echo "A cor verde não foi encontrada ";
    }

    echo "<br><br><br>";

    /* Parte 09 - Soma e média de valores
    Crie um array de números inteiros e:
    Calcule a soma de todos os números.*/

    $numeros = array(10, 20, 30, 40, 50);

    echo "<h4>Exercício 09 - Soma e Média de Valores</h4>";
    
    // Calcular a soma de todos os números
    $soma = array_sum($numeros);
    
    // Exibir a soma
    echo "Números: " . implode(", ", $numeros) . "<br>";
    echo "Soma dos números: $soma<br>";

    // Calcular média dos números
    $media = $soma / count($numeros);
    // Exibir média
    echo "Média dos números: $media<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - array</title>
</head>
<body>
    
</body>
</html>