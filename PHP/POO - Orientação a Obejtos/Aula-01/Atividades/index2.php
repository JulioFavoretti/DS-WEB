<?php

class Torneira {

    //Atributos:
    public $marca;
    public $cor;
    public $material;
    public $potencia;
    public $preco;
    
    //Metodo:
    public function exibirMarca(){
        return "A marca da torneira é: " .$this->marca;
    }
    public function abrir(){
       
    }
    public function fechar(){

    }
    public function encherBaldes(){

    }
    public function pintar(){

    }
    
}

//Instalando meus objetos

$TorneiraGourmet = new Torneira(); 
$TorneiraGourmet->marca = "Deca";
$TorneiraGourmet->cor = "Prata e Preto";
$TorneiraGourmet->material = "aço inoxidável";

?>
