<?php
// Configuração do banco de dados
$db = new PDO("mysql:host=localhost;dbname=pdo", "root", "");

// Verifica se os dados foram enviados pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["nome"]) && !empty($_POST["email"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        // Prepara a query
        $statement = $db->prepare("INSERT INTO clientes (nome, email) VALUES (?, ?)");
        
        // Executa com os valores informados no formulário
        $statement->execute(array($nome, $email));

        header("Location: index.php");

    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
?>
