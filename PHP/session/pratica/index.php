<?php
session_start();

// Verifica se o usuário já está logado e redireciona para o dashboard
if (isset($_SESSION['login']) && isset($_SESSION['senha'])) {
    header('Location: dashboard.php');
    exit;
}

// Erro de login
$error = '';
if (isset($_POST['login']) && isset($_POST['senha'])) {
    $loginCerto = '.';
    $senhaCerto = '.' ;

    // Verifica login e senha
    if ($_POST['login'] == $loginCerto && $_POST['senha'] == $senhaCerto) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['senha'] = $_POST['senha'];
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Login ou senha incorretos. Tente novamente.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        
        <!-- Exibe mensagem de erro se houver -->
        <?php if (!empty($error)) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        
        <form action="index.php" method="POST">
            <label>Login: </label>
            <input type="text" name="login" required>
            <br>
            <label>Senha: </label>
            <input type="text" name="senha" required>
            <br>
            <input type="submit" value="Entrar">
        </form>
    </div>
    <a href="cookie.php">Verificar cookies</a>
</body>
</html>
