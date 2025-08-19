<?php

// Classe base "Pessoa"
class Pessoa {
    // Atributos privados
    private $nome;
    private $idade;

    // Construtor da classe
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Métodos getters
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}

// Classe "Rica" que herda de "Pessoa"
class Rica extends Pessoa {
    // Atributo privado
    private $dinheiro;

    // Construtor da classe
    public function __construct($nome, $idade, $dinheiro) {
        parent::__construct($nome, $idade);
        $this->dinheiro = $dinheiro;
    }

    // Método para fazer compras
    public function fazCompras($valor) {
        if ($valor <= $this->dinheiro) {
            $this->dinheiro -= $valor;
            echo "{$this->getNome()} fez uma compra de R$ $valor.\n";
        } else {
            echo "{$this->getNome()} não tem dinheiro suficiente.\n";
        }
    }
}

// Classe "Pobre" que herda de "Pessoa"
class Pobre extends Pessoa {
    // Método para trabalhar
    public function trabalha() {
        echo "{$this->getNome()} está trabalhando para ganhar dinheiro.\n";
    }
}

// Classe "Miseravel" que herda de "Pessoa"
class Miseravel extends Pessoa {
    // Método para mendigar
    public function mendiga() {
        echo "{$this->getNome()} está mendigando.\n";
    }
}

// Exemplo de uso:
$rica = new Rica("João", 35, 1000.00);
$rica->fazCompras(200.00);

$pobre = new Pobre("Maria", 30);
$pobre->trabalha();

$miseravel = new Miseravel("Pedro", 40);
$miseravel->mendiga();

?>
