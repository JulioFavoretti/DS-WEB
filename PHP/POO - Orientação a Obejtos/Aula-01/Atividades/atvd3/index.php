<?php

class Roupa {

    //Atributos:
    public $tamanho;
    public $cor;
    public $material;
    public $peças;
    public $preco;
    
    //Metodo:
    public function exibirTamanho(){
        return "O tamanho da roupa é: " .$this->tamanho;
    }
    public function Vestir(){
       
    }
    public function Cobrir(){

    }
    public function Esquentar(){

    }
    
}

//Instalando meus objetos

$Moletom = new Roupa(); 
$Moletom->tamanho = "GG";
$Moletom->cor = "Branco";
$Moletom->material = "Algodão";
$Moletom->peças = 120; //Unidades
$Moletom->preco = 220; //Reais
echo $Moletom->exibirTamanho();
?>
