<?php

// Classe mãe - Animal
class Animal {
    protected $nome;
    protected $raca;

    // Construtor da classe Animal
    public function __construct($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    // Método para caminhar
    public function caminha() {
        return "{$this->nome} está caminhando.";
    }
}

// Classe Cachorro que herda de Animal
class Cachorro extends Animal {
    
    // Método para latir
    public function late() {
        return "{$this->nome} está latindo.";
    }
}

// Classe Gato que herda de Animal
class Gato extends Animal {
    
    // Método para miar
    public function mia() {
        return "{$this->nome} está miando.";
    }
}

// Exemplo de uso
$cachorro = new Cachorro("Rex", "Labrador");
echo $cachorro->caminha(); // Rex está caminhando.
echo $cachorro->late();    // Rex está latindo.

$gato = new Gato("Miau", "Siamês");
echo $gato->caminha(); // Miau está caminhando.
echo $gato->mia();     // Miau está miando.

?>
