<?php
class Quarto {
    private $numero;

    public function __construct($num) {
        $this->numero = $num;
    }

    public function getNumero() {
        return $this->numero;
    }
}

class Standard extends Quarto {
    public function getPreco() {
        return 300.00;
    }
}

class Deluxe extends Quarto {
    public function getPreco($hospedes) {
        if ($hospedes > 2) {
            return (300.00 * 1.2) * 1.1;
        } else {
            return 300.00 * 1.2;
        }
    }
}

class Suite extends Quarto {
    public function getPreco($dia) {
        if ($dia >= 2 && $dia <= 6) {
            return 300.00 * 1.5;
        } else {
            return (300.00 * 1.5) * 1.5;
        }
    }
}

// Testando objetos

$std = new Standard(11);
echo "Standard - Quarto " . $std->getNumero() . " Valor R$ " . $std->getPreco() . "<br>";

$duplo = new Deluxe(22);
echo "Deluxe - Quarto " . $duplo->getNumero() . " Valor R$ " . $duplo->getPreco(3) . "<br>"; // 3 hóspedes

$suite = new Suite(33);
echo "Suite - Quarto " . $suite->getNumero() . " Valor R$ " . $suite->getPreco(7) . "<br>"; // 7 dias
?>
