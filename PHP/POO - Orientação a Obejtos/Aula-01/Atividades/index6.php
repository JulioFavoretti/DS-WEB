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
        return "O saldo do titular é: R$" .$this->Saldo. ",00";     
    }
    public function Saque(){
       
    }
    public function Deposito(){
       
    }    
}

//Instalando meus objetos
//Objeto1
$Conta1 = new ContaBancaria(); 
$Conta1->Saldo = 460;
$Conta1->NumeroConta = 34900086;
$Conta1->NomeTitular = "Julio Cesar Baptista Favoretti";
echo $Conta1->exibirNome();
echo $Conta1->exibirSaldo();
echo $Conta1->exibirConta();

//Objeto2
$Conta2 = new ContaBancaria(); 
$Conta2->Saldo = 1360;
$Conta2->NumeroConta = 34900087;
$Conta2->NomeTitular = "Gabriel Lopes de Jesus";
echo $Conta2->exibirNome();
echo $Conta2->exibirSaldo();
echo $Conta2->exibirConta();

//Objeto3
$Conta3 = new ContaBancaria(); 
$Conta3->Saldo = 2543;
$Conta3->NumeroConta = 34900088;
$Conta3->NomeTitular = "Rafael Lopes Cuan";
echo $Conta3->exibirNome();
echo $Conta3->exibirSaldo();
echo $Conta3->exibirConta();

?>
