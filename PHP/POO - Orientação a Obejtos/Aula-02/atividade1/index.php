<?php

class Pessoa {
    public $nome;
    protected $idade;

    // Método para definir a idade
    public function setIdade($valor) {
        $this->idade = $valor;
    }

    // Método para obter a idade
    public function getIdade() {
        return $this->idade;
    }
}

class Funcionario extends Pessoa {
    protected $salario; 

    // Método para definir salário
    public function setSalario($valor) {
        $this->salario = $valor;
    }

    // Método para obter salário
    public function getSalario() {
        return $this->salario;
    }
}

class Gerente extends Funcionario {
    public function CalcularBonus() {
        $bonus = $this->salario * (20 / 100);
        return "Este é o bônus de " . $this->nome . ": R$" . $bonus . ",00" . "<br>" 
        . $this->nome . " tem " . $this->getIdade() . " anos de idade.<br><br><br>";
    }
}

class Desenvolvedor extends Funcionario {
    public function CalcularBonus() {
        $bonus = $this->salario * (10 / 100);
        return "Este é o bônus de " . $this->nome . ": R$" . $bonus . ",00" . "<br>" 
        . $this->nome . " tem " . $this->getIdade() . " anos de idade.<br><br><br>";
    }
}

// Criando objeto Gerente
$julin = new Gerente();
echo get_class($julin).":". "<br>";

$julin->nome = "Julio Crendas";

// Usando métodos para definir os valores corretamente
$julin->setSalario(12000);
$julin->setIdade(32); 

echo $julin->CalcularBonus();

// Criando objeto Desenvolvedor
$Cleiton = new Desenvolvedor();
echo get_class($Cleiton).":" . "<br>";
$Cleiton->nome = "Cleiton Silva"; // Corrigido nome duplicado


// Usando métodos para definir os valores corretamente
$Cleiton->setSalario(6500);
$Cleiton->setIdade(43); 

echo $Cleiton->CalcularBonus();

?>
