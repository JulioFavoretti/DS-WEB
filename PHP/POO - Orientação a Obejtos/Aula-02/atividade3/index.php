<?php

class Veiculo {
    public $marca;
    public $modelo;
    private $velocidade; 

    // Método para definir a velocidade
    public function setVelo($VeloCar) {
        $this->velocidade = $VeloCar; 
    }

    // Método para obter a velocidade
    public function getVelo() {
        return $this->velocidade;
    }
}

class Carro extends Veiculo {
    public function acelerar() {
        return 'Acelerador em pedais, pisar para acelerar.';
    }
}

class Moto extends Veiculo {
    public function acelerar() {
        return 'Acelerador em manopla, girá-la para acelerar.';
    }
}

// Criando objeto da classe Carro
$Audi = new Carro();
echo get_class($Audi) . ":<br>";

// Definindo valores 
$Audi->marca = "Volkswagen";
$Audi->modelo = "Audi A3";

// Usando métodos para definir os valores
$Audi->setVelo(215);

// acessando propriedades diretamente, sem parênteses
echo "Marca: " . $Audi->marca . "<br>";
echo "Modelo: " . $Audi->modelo . "<br>";
echo "O carro Audi já pegou uma velocidade máxima de: " . $Audi->getVelo() . " km/h<br>";
echo "<br><br><br>";

// Criando objeto da classe Moto
$Kawasaki = new Moto();
echo get_class($Kawasaki) . ":<br>";

// Definindo valores 
$Kawasaki->marca = "Kawasaki";
$Kawasaki->modelo = "Kawasaki Ninja 400.";

// Usando métodos para definir os valores
$Kawasaki->setVelo(210);

// acessando propriedades diretamente, sem parênteses
echo "Marca: " . $Kawasaki->marca . "<br>";
echo "Modelo: " . $Kawasaki->modelo . "<br>";
echo "A moto Kawasaki Ninja 400 já pegou uma velocidade máxima de: " . $Kawasaki->getVelo() . " km/h<br>";
?>
