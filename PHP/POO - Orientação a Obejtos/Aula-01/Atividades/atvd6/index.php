<?php

class ContaBancaria {

    //Atributos:
    public $Saldo;
    public $NumeroConta;
    public $NomeTitular;
    
    //Metodo:
    public function exibirNome(){
        return "O nome do titular é: " .$this->NomeTitular."<br>";    
    }
    public function exibirConta(){
        return "A conta do titular é: " .$this->NumeroConta. "<br>";     
    }
    public function exibirSaldo(){
        return "O saldo do titular é: R$" .$this->Saldo. ",00". "<br>";     
        
    }
    
    public function Deposito($deposito){
        $this->Saldo += $deposito;
        return "Este é o novo saldo com deposito: " .$this->Saldo."<br><br><br>";
    } 
    public function Saque($saque){
        $this->Saldo -= $saque;
        return "Este é o novo saldo com saque: " .$this->Saldo. "<br>";
    }  
}

//Instalando meus objetos
//Objeto1
echo '<div style="border: 2px solid black; padding: 10px; ">';
$Conta1 = new ContaBancaria(); 
$Conta1->Saldo = 460;
$Conta1->NumeroConta = 34900086;
$Conta1->NomeTitular = "Julio Cesar Baptista Favoretti";
echo $Conta1->exibirNome();
echo $Conta1->exibirConta();
echo $Conta1->exibirSaldo();
echo $Conta1->Saque(14);
echo $Conta1->Deposito(400);
echo "</div>";

echo '<div style="border: 2px solid black; padding: 10px; ">';
//Objeto2
$Conta2 = new ContaBancaria(); 
$Conta2->Saldo = 1360;
$Conta2->NumeroConta = 34900087;
$Conta2->NomeTitular = "Gabriel Lopes de Jesus";
echo $Conta2->exibirNome();
echo $Conta2->exibirConta();
echo $Conta2->exibirSaldo();
echo $Conta2->Saque(200);
echo $Conta2->Deposito(1000);
echo "</div>";

echo '<div style="border: 2px solid black; padding: 10px; ">';
//Objeto3
$Conta3 = new ContaBancaria(); 
$Conta3->Saldo = 2543;
$Conta3->NumeroConta = 34900088;
$Conta3->NomeTitular = "Rafael Lopes Cuan";
echo $Conta3->exibirNome();
echo $Conta3->exibirConta();
echo $Conta3->exibirSaldo();
echo $Conta3->Saque(5);
echo $Conta3->Deposito(0);
echo "</div>";

?>
