
<?php


//* Exemplo de uso de is_array*//
include_once('arrays.php');
$variaveltexto = 'arthur';
if(is_array($variaveltexto)){
    echo "É uma array";
}else{
    echo "Não é uma array";
}

/* Exemplos de array_unshift() e array_push */
array_unshift($estado, "Rio grande do Sul"); //Adiciona no incio
array_push($estado, "Paraná"); //Adiciona no fim

foreach($estado as $estadoLinha){
    echo  "Estado: " . $estadoLinha . "<br>";

 echo "<br>" . "<br>" . "<br>";

}
/* Exemplos de array_shift() e array_pop */
$removido = array_shift($estado); // remove do inicio
echo $removido . "<br>";

$removido = array_pop($estado); //Remove do final
echo $removido;

/* Exemplo de uso in_array */ 
if(in_array("São Paulo", $estado)){
    echo "Estado encontrado";
}

/* Exemplo de uso do array_key_exists() */
if(array_key_exists('SP', $estadoChaves)){
    echo "Chave encontrada";
}


?>