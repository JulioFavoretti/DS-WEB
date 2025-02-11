<?php

class CarregadorUSB {

    //Atributos:
    public $tamanho;
    public $cor;
    public $marca;
    public $peso;
    public $preo;
    public $potencia;
    
    //Metodo:
    public function exibirMarca(){
        return "A marca do carregador é: " .$this->marca;     
    }
    public function Carregar(){
       
    }
    public function Conectar(){
       
    }
    public function TransferirDados(){

    }
    
}

//Instalando meus objetos

$CarregadorMotorola = new CarregadorUSB(); 
$CarregadorMotorola->tamanho = 2; //metros
$CarregadorMotorola->cor = "Preto";
$CarregadorMotorola->marca = "Motorola";
$CarregadorMotorola->peso = 500; // gramas
$CarregadorMotorola->preco = 200; //reais
$CarregadorMotorola->potencia = 60; //Wolts
echo $CarregadorMotorola->exibirMarca;
?>
