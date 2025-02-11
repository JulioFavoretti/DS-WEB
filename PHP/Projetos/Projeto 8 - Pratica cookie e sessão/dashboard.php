<?php
session_start();

// Verifica se a sessão está ativa
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    header('Location: index.php');
    exit;
}

// Salvar cookies
if (isset($_POST['salvar'])) {
    setcookie("login", $_SESSION['login'], time() + 7 * 24 * 60 * 60, '/');
    setcookie("senha", $_SESSION['senha'], time() + 7 * 24 * 60 * 60, '/');
    header('Location: cookie.php'); // Redireciona para a página de cookies
    exit;
} 

// Logout
if (isset($_POST['logout'])) {
    session_destroy(); // Destroi a sessão
    setcookie("login", "", time() - 3600, '/'); // Remove o cookie
    setcookie("senha", "", time() - 3600, '/'); // Remove o cookie
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo !</h1>
   

    <!-- Formulário para salvar cookies -->
    <form action="dashboard.php" method="POST">
        <input type="submit" name="salvar" value="Salvar Cookies">
    </form>

    <!-- Formulário de Logout -->
    <form action="dashboard.php" method="POST">
        <input type="submit" name="logout" value="Logout">
    </form>


    <br><br><br><br><br>
    <p>Mostrando os dados da seção:<p>
    <p><?php print_r($_SESSION)  ?></p>


</body>
</html>
