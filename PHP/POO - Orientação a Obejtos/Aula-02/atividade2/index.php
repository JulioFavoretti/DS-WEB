<?php
abstract class Animal {

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }

}

class Cachorro extends Animal {

    public function falar(){
        return "Late";
    }

}

class Gato extends Animal {

    public function falar(){
        return "Mia";
    }

}

class Passaro extends Animal {

    public function falar(){
        return "Canta";
    }

    public function mover(){
        return "Voa e " . parent::mover();
    }

}

$pluto = new Cachorro();

echo get_class($pluto).":". "<br>";
echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "-------------------------<br/>";

$garfield = new Gato();

echo get_class($garfield).":". "<br>";
echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "-------------------------<br/>";

$piupiu = new Passaro();

echo get_class($piupiu).":". "<br>";
echo $piupiu->falar() . "<br/>";
echo $piupiu->mover() . "<br/>";

?>