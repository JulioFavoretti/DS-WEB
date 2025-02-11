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
$CarregadorMotorola->tamanho = "2 Metros";
$CarregadorMotorola->cor = "Preto";
$CarregadorMotorola->marca = "Motorola";
$CarregadorMotorola->peso = "500 G";
$CarregadorMotorola->preco = " R$200,00";
$CarregadorMotorola->potencia = " 60 W";
?>
