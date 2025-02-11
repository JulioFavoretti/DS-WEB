<?php 

class ContaBancaria { 

    public $saldo;//Atributo
    public $numeroConta;
    public $titular;
    
    public function exibirSaldo() {//Metodo 
        return "O saldo é: R$" .$this->saldo;
    } 
    
    public function depositar() {//Metodo 
 
    } 
    
    public function retirar() {//Metodo 
 
    } 
    
    public function exibir() {//Metodo 
 
    } 
} 

 
$contaDuque = new contaBancaria(); // Inicio do objeto 
$contaDuque->saldo = 50; //atribuindo valor a um atributo 
$contaDuque->numeroConta = 12321421;
$contaDuque->titular = "Duque";

echo $contaDuque->exibirSaldo(); //Exibindo um atributo 

?>