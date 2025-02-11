<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php
echo "<h4>Exercício 01:</h4>";
/*Crie um array Bidimensional para armazenar informações de vários
produtos:
Cada produto deve ter nome , preco e estoque .
Exiba o nome e o preço de todos os produtos. */


// Array associativo com informações de peças de informática
$pecasAssociativo = array(
    "Teclado" => array("preco" => 120.50, "estoque" => 10),
    "Mouse" => array("preco" => 80.00, "estoque" => 25),
    "Monitor" => array("preco" => 950.00, "estoque" => 5),
    "Gabinete" => array("preco" => 250.00, "estoque" => 8),
    "Headset" => array("preco" => 150.00, "estoque" => 20),
    "Mousepad" => array("preco" => 30.00, "estoque" => 50),
    "Cabo HDMI" => array("preco" => 20.00, "estoque" => 35),
    "Fonte" => array("preco" => 200.00, "estoque" => 15),
    "Webcam" => array("preco" => 220.00, "estoque" => 18),
    "Microfone" => array("preco" => 100.00, "estoque" => 22)
);

// Exibir informações de cada peça em formato de lista
echo "<ul>";
foreach ($pecasAssociativo as $nome => $detalhes) {
    echo "<li>";
    echo "Peça: " . $nome . "<br>";
    echo "Preço: R$ " . number_format($detalhes["preco"], 2, ',', '.') . "<br>";
    echo "Estoque: " . $detalhes["estoque"] . " unidades<br>";
    echo "</li><br>";
}
echo "</ul>";

echo "<br><br>";

echo "<h4>Exercício 02:</h4>";
/*Calcule o valor total em estoque de todos os produtos no array
Bidimensional.
Valor total = preco * estoque */
// Calcular o valor total em estoque
$totalEstoque = 0;
foreach ($pecasAssociativo as $nome => $detalhes) {
    $totalEstoque += $detalhes["preco"] * $detalhes["estoque"];
}

// Exibir o valor total em estoque
echo "O valor total em estoque de todos os produtos é: R$ " . number_format($totalEstoque, 2, ',', '.') . "<br><br>";

echo "<br><br><br>";

// Array bidimensional com informações dos alunos e suas notas
$alunos = array(
    array('nome' => 'Ana', 'matematica' => 8, 'portugues' => 7),
    array('nome' => 'Bruno', 'matematica' => 6, 'portugues' => 9),
    array('nome' => 'Carlos', 'matematica' => 7, 'portugues' => 8)
);

echo "<h4>Exercício 03:</h4>";
/*Tabela de Alunos e Notas
Crie um array bidimensional que armazene o nome de 3 alunos e suas
respectivas notas em duas disciplinas: Matemática e Português. Depois:
Exiba o nome de cada aluno e suas notas.
Calcule e exiba a média de cada aluno. */
// Exibir as informações de cada aluno
echo "<h4>Notas dos Alunos:</h4>";
foreach ($alunos as $aluno) {
    echo "Aluno: " . $aluno['nome'] . "<br>";
    echo "Nota de Matemática: " . $aluno['matematica'] . "<br>";
    echo "Nota de Português: " . $aluno['portugues'] . "<br>";

    // Calcular a média do aluno
    $media = ($aluno['matematica'] + $aluno['portugues']) / 2;
    echo "Média: " . number_format($media, 2, ',', '.') . "<br><br>";
}


?>







