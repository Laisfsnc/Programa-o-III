<?php
abstract class Veiculo {
    protected $modelo;
    protected $ano;

    abstract public function mover();{

    }

}

class Carro extends Veiculo {
   
    public function mover() {
        echo "<p>Carro está andando</p>";
    }
}


class Bicicleta extends Veiculo {
    
    public function mover() {
        echo "<p>Bicicleta está andando</p>";
    }

    
}
                                                                                           
$carro1 = new Carro();
$carro1->modelo = "Fiat";
$carro1->ano = "2020";
$carro1->mover();

$bicicleta1 = new Bicicleta();
$bicicleta1->modelo = "Yamaha";
$bicicleta1->ano = "2021";
$bicicleta1->mover();
?>






