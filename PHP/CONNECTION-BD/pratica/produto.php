<?php
include_once("connection.php");

$nomeP = $_POST['nomeP'];
$valor = $_POST['valor'];
$estoque = $_POST['estoque'];


//Inicio da inserção dos dados do Banco
$sql = "INSERT INTO produto(nome, valor, estoque) VALUES ('$nomeP','$valor','$estoque')";

if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('Location: index.php');
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}

?>