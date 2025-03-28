<?php
header("Content-Type: application/json"); //Prepara o cabeçalho para responder em JSON
$json = file_get_contents('php://input'); 
$dados = json_decode($json, true);

$produtos = $dados ['produtos'];

foreach($produtos as $produto){
    echo "\n";
    echo $produto['nome'];
    echo "\n";
}

?>