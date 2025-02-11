<?php
include_once("connection.php");

$nomeP = $_POST['nomeP'];
$valor = $_POST['Valor'];
$descricao = $_POST['descricao'];


//Inicio da inserção dos dados do Banco
$sql = "INSERT INTO produtos(nome,descricao, preco) VALUES ('$nomeP','$descricao', '$valor' )";

if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('Location: dashboard.php');
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}

?>