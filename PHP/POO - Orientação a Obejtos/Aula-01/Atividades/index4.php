<?php

class Escorregador {

    //Atributos:
    public $tamanho;
    public $cor;
    public $material;
    public $peso;
    public $preco;
    //Metodo:
    public function exibirPeso(){
        return "O peso do escorregador é: " .$this->peso ." kilos";     
    }
    public function Subida(){
       
    }
    public function Descida(){
       
    }
    public function Escalada(){

    }
    
}

//Instalando meus objetos

$EscorregaPiscina = new Escorregador(); 
$EscorregaPiscina->tamanho = 12; //Metros
$EscorregaPiscina->cor = "Azul, Amarelo, Vermelho e Laranja";
$EscorregaPiscina->material = "Plastico, madeira, ferro.";
$EscorregaPiscina->peso = 200; //Kilos
$EscorregaPiscina->preco = 1420; //Reais
echo $EscorregaPiscina->exibirPeso;
?>
