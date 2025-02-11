





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario pc</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="">
    <h1>Formulário</h1>
    <br>       

    <!-- Name -->
    <label  for="name">Aluno: </label>
    <input  id="name" required type="text" autofocus >

    <!-- Nmr chamada -->
    <label  for="cmd">Número da Chamada: </label>
    <input  type="number" required id="cmd" max="32">

    <!-- RM -->
    <label for="rm">RM: </label>
    <input class="iD" type="number" required id="rm" max="9999">


    <!-- Patrimônio Máquina -->
    <label for="pm">Patrimônio Máquina: </label>
    <input type="number" required id="pm" max="9999999">
    

    <!-- Nmr maq -->
    <label for="nm">Número da Máquina: </label>
    <input class="nmrmq" type="number" required id="nm" max="32">
    

    <!-- Foto do PC -->
    <label for="file">Foto do PC: </label>
    <input type="file" required id="file" >
   
    <!-- ST (Service Tag) -->
    <label for="serv">ServiceTag: </label>
    <input type="text" required id="serv" maxlength="8" >
    

    <input  type="submit" value="Cadastrar" class="cadas" id="enviar">
    <input  type="reset" value="Limpar" class="lim" id="limp">       

    </form>
    <h1</h1>
    
</body>
</html>