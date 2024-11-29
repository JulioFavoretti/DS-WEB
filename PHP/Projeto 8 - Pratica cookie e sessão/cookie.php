<?php
// Verifica se os cookies estão definidos
if (isset($_COOKIE['login']) && isset($_COOKIE['senha'])) {
    $login = $_COOKIE['login'];  // Apenas pega o valor do cookie
    $senha = $_COOKIE['senha'];  // Sem escapar com htmlspecialchars
} else {
    $login = "Cookie de login não definido.";
    $senha = "Cookie de senha não definido.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Informações Salvas nos Cookies</h1>
    <p><strong>Login:</strong> <?php echo $login; ?></p>
    <p><strong>Senha:</strong> <?php echo $senha; ?></p>
    <a href="dashboard.php">Voltar para o Dashboard</a>
</body>
</html>
