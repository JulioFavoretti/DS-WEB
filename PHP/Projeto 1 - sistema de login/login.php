
<?php
$nome = $_GET["nome"];
$senha = $_GET ["senha"];
$usuarioCorreto = "aluno";
$senhaCorreta = "sesi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do login</title>
</head>


<body>
<?php
if ($nome === $usuarioCorreto && $senha === $senhaCorreta) {
    echo "<h3>Logado com sucesso!</h3>";
} else {
    echo "<h3>Usuário ou senha incorretos!</h3>";
}


?>
<form action="index.php">
<input  type="submit" id value = "voltar">


</form>
</body>
</html>