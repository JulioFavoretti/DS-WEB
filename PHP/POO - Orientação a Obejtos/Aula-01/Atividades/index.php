<?php

class Lapis {

    //Atributos:
    public $marca;
    public $cor;
    public $grafite;
    public $tamanho;
    public $madeira;
    public $escreve;

    //Metodo:
    public function Escrever(){
        return "Escreveu um: " .$this->escreve;
    }
    public function desenhar(){

    }
    public function rabiscar(){

    }
    public function pintar(){

    }
    
}

//Instalando meus objetos

$LapisCor = new Lapis(); 
$LapisCor->marca = "FaberCastell";
$LapisCor->cor = "AzulBebe";
$LapisCor->escreve = "poema";
echo $LapisCor->Escrever();

?>


