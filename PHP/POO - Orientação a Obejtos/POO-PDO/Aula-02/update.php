<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<body>
    <?php
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetchAll(PDO::FETCH_ASSOC);
    print_r($todos);
    echo "<br>";
    echo $todos["email"];
    ?>
    <div class="container">
        <div class="formulario">
            <form action="updateQuery.php" method="POST">
                    <label for="">Nome: </label>
                    <input type="text" name="nome">
                    <br>
                    <label for="">E-mail: </label>
                    <input type="text" name="email">
                    <br>
                    <input type="Submit">
            </form>
        </div>
   
            <?php
            $novoNome = "Julio Cesar";
            $email = "julio@gmail.com";
            $stmt = $db->prepare('UPDATE clientes SET nome = :nome WHERE email
            = :email');
            $stmt->execute(array(
            ':nome' => $novoNome,
            ':email' => $email
            ));

            if( $stmt->rowCount() > 0 ) {
            echo "Ocorreram ".$stmt->rowCount()." alterações na tabela.";
            } else {
            echo 'Nada foi alterado.';
            }
            ?>
        </div>