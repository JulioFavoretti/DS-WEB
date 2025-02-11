<?php

class ContaBancaria {

    //Atributos:
    public $Saldo;
    public $NumeroConta;
    public $NomeTitular;
    
    //Metodo:
    public function exibirNome(){
        return "O nome do tirular é: " .$this->NomeTitular;     
    }
    public function exibirConta(){
        return "A conta do titular é: " .$this->NumeroConta;     
    }
    public function exibirSaldo(){
        return "O saldo do titular é: " .$this->Saldo;     
    }
    public function Saque(){
       
    }
    public function Deposito(){
       
    }    
}

//Instalando meus objetos
//Objeto1
$Conta1 = new ContaBancaria(); 
$Conta1->Saldo = "R$460,00";
$Conta1->NumeroConta = "34900086";
$Conta1->NomeTitular = "Julio Cesar Baptista Favoretti";

//Objeto2
$Conta2 = new ContaBancaria(); 
$Conta2->Saldo = " R$1360,00";
$Conta2->NumeroConta = "34900087";
$Conta2->NomeTitular = "Gabriel Lopes de Jesus";

//Objeto3
$Conta3 = new ContaBancaria(); 
$Conta3->Saldo = " R$2543,00";
$Conta3->NumeroConta = "34900088";
$Conta3->NomeTitular = "Rafael Lopes Cuan";

?>
