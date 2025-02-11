<?php

class Veiculo {

    //Atributos:
    public $marca;
    public $cor;

    protected $seguro;

    private $renavam;

    //Metodo:
    public function ligar(){

    }
}

//Instalando meus objetos

$polo = new Veiculo(); 
$polo->marca = "Wolkswagem";
$polo->renavam = "2311235324";

?>