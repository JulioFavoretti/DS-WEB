<?php
include_once("connection.php");

$nomeC = $_POST['nomeC'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//Inicio da inserção dos dados do Banco
$sql = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nomeC','$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
    header('Location: index.php');
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}

?>