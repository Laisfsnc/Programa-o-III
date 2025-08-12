<?php
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo "Andou";
    }

    public function parar() {
        echo "Parou";
    }
}

class Carro extends Veiculo {
    public $tipoCombustivel;

    public function mostrarCombustivel() {
        echo "Tipo de combustível: " . $this->tipoCombustivel;
    }

    public function ligarLimpador() {
        echo "Limpador ligado";
    }
}

class CarroEletrico extends Carro {
    public function carregarBateria() {
        echo "Bateria carregada";
    }
}

class Moto extends Veiculo {
    public function andar() {
        echo "Moto está em movimento";
    }

    public function darGrau() {
        echo "Deu grau!";
    }
}

class Caminhao extends Veiculo {
    public function carregarcarga() {
        echo "Carga carregada com sucesso!"; 
    }
}

// Instanciando e testando um CarroEletrico
$tesla = new CarroEletrico();
$tesla->modelo = "Tesla Model S";
$tesla->cor = "Preto";
$tesla->ano = 2023;
$tesla->tipoCombustivel = "Elétrico";

echo "<h3>Carro Elétrico:</h3>";
echo "Modelo: " . $tesla->modelo . "<br>";
echo "Cor: " . $tesla->cor . "<br>";
echo "Ano: " . $tesla->ano . "<br>";
$tesla->mostrarCombustivel();
echo "<br>";
$tesla->andar();
echo "<br>";
$tesla->parar();
echo "<br>";
$tesla->ligarLimpador();
echo "<br>";
$tesla->carregarBateria();

echo "<hr>";

// Mantendo as instâncias anteriores (2 carros e 2 motos) como estava no código anterior
$carro1 = new Carro();
$carro1->modelo = "Gol";
$carro1->cor = "Vermelho";
$carro1->ano = 2018;
$carro1->tipoCombustivel = "Flex";
echo "<h3>Carro 1:</h3>";
$carro1->andar();
echo "<br>";
$carro1->ligarLimpador();
echo "<br>";
$carro1->mostrarCombustivel();

echo "<hr>";

$carro2 = new Carro();
$carro2->modelo = "Fusca";
$carro2->cor = "Azul";
$carro2->ano = 1980;
$carro2->tipoCombustivel = "Gasolina";
echo "<h3>Carro 2:</h3>";
$carro2->parar();
echo "<br>";
$carro2->mostrarCombustivel();

echo "<hr>";

$moto1 = new Moto();
$moto1->modelo = "Honda Biz";
$moto1->cor = "Preta";
$moto1->ano = 2020;
echo "<h3>Moto 1:</h3>";
$moto1->andar();
echo "<br>";
$moto1->darGrau();

echo "<hr>";

$moto2 = new Moto();
$moto2->modelo = "Yamaha Factor";
$moto2->cor = "Vermelha";
$moto2->ano = 2015;
echo "<h3>Moto 2:</h3>";
$moto2->parar();
echo "<br>";
$moto2->andar();
?>
