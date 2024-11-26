

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        

        <h1>Calculadora</h1> <br><br>

        <label for="primeiro"> Primeiro Valor: </label>
        <input required  type="number" id="primeiro" name="num1" max ="9999"><br><br>

        <label for="segundo">Segundo Valor:</label>
        <input required type="number" max="9999" name="num2" id="segundo"><br><br>

        <label for="operacao">Operação:</label>
        <select required name="operacao" id="operacao"><br>
            <option id="opcs" value="">Selecione</option>
            <option id="opcs" value="mais">Adição</option>
            <option id="opcs" value="menos">Subtração</option>
            <option id="opcs" value="vezes">Multiplicação</option>
            <option id="opcs" value="divisao">Divisão</option>
        </select>
        <br><br>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operacao = $_POST["operacao"];
            $result = "";

            // Verifica a operação e realiza o cálculo
            if ($operacao == "mais") {
                $result = $num1 + $num2;
            } elseif ($operacao == "menos") {
                $result = $num1 - $num2;
            } elseif ($operacao == "vezes") {
                $result = $num1 * $num2;
            } elseif ($operacao == "divisao") {
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Erro: Divisão por zero";
                }
            } else {
                $result = "Operação inválida";
            }

            echo "<h2>Resultado: $result</h2>";
        }
    ?>
        

        <input type="submit" value="calcular    ">
        <input type="reset" value="Limpe" >

    </form>    



</body>
</html>

     


