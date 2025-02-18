<?php

abstract class Produto {
    public $nome;
    public $preco;
    protected $estoque; 

    abstract public function calcularDesconto();

    // Método para definir o estoque
    public function setEstoque($Estoque) {
        $this->estoque = $Estoque; 
    }

    // Método para obter o estoque
    public function getEstoque() {
        return $this->estoque;
    }
}

class Eletronico extends Produto {
    public function calcularDesconto() {
        $desconto = $this->preco * 0.1;
        $precoFinal = $this->preco - $desconto;

        // Se o estoque for menor que 5, aplicar mais 10% de desconto
        if ($this->estoque < 5) {
            $precoFinal -= $precoFinal * 0.1;
        }

        return $precoFinal;
    }
}

class Roupa extends Produto {
    public function calcularDesconto() {
        $desconto = $this->preco * 0.2;
        $precoFinal = $this->preco - $desconto;

        // Se o estoque for menor que 5, aplicar mais 10% de desconto
        if ($this->estoque < 5) {
            $precoFinal -= $precoFinal * 0.1;
        }

        return $precoFinal;
    }
}

// Criando objeto da classe Eletronico
$celular = new Eletronico();
echo "<h1>Eletrônico com mais de 5 em estoque</h1>";
echo get_class($celular) . ":<br>";

// Definindo valores 
$celular->nome = "Celular";
$celular->preco = 2000;
$celular->setEstoque(10); // Estoque maior que 5, sem desconto extra

// Exibindo informações do produto
echo "Nome: " . $celular->nome . "<br>";
echo "Preço original: R$" . $celular->preco . "<br>";
echo "O estoque do produto é: " . $celular->getEstoque() . " celulares.<br>";
echo "Preço com desconto: R$" . $celular->calcularDesconto() . "<br><br>";


// Criando objeto da classe Roupa
$Blusa = new Roupa();
echo "<h1>Roupa com mais de 5 em estoque</h1>";
echo get_class($Blusa) . ":<br>";

// Definindo valores 
$Blusa->nome = "Blusa";
$Blusa->preco = 220;
$Blusa->setEstoque(8); // Estoque maior que 5, sem desconto extra

// Exibindo informações do produto
echo "Nome: " . $Blusa->nome . "<br>";
echo "Preço original: R$" . $Blusa->preco . "<br>";
echo "O estoque do produto é: " . $Blusa->getEstoque() . " blusas.<br>";
echo "Preço com desconto: R$" . $Blusa->calcularDesconto() . "<br><br>";


// Criando objeto da classe Eletronico com estoque menor que 5
$computador = new Eletronico();
echo "<h1>Eletrônico com menos de 5 em estoque</h1>";
echo get_class($computador) . ":<br>";

// Definindo valores 
$computador->nome = "Computador";
$computador->preco = 4500;
$computador->setEstoque(4); // Estoque menor que 5, terá desconto extra

// Exibindo informações do produto
echo "Nome: " . $computador->nome . "<br>";
echo "Preço original: R$" . $computador->preco . "<br>";
echo "O estoque do produto é: " . $computador->getEstoque() . " computadores.<br>";
echo "Preço com desconto: R$" . $computador->calcularDesconto() . "<br><br>";


// Criando objeto da classe Roupa com estoque menor que 5
$Calça = new Roupa();
echo "<h1>Roupa com menos de 5 em estoque</h1>";
echo get_class($Calça) . ":<br>";

// Definindo valores 
$Calça->nome = "Calça";
$Calça->preco = 300;
$Calça->setEstoque(3); // Estoque menor que 5, terá desconto extra

// Exibindo informações do produto
echo "Nome: " . $Calça->nome . "<br>";
echo "Preço original: R$" . $Calça->preco . "<br>";
echo "O estoque do produto é: " . $Calça->getEstoque() . " calças.<br>";
echo "Preço com desconto: R$" . $Calça->calcularDesconto() . "<br>";

?>
