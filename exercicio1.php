<?php

class Produto
{
    // atributos ou propriedades
    private $nome;
    private $preco;
    private $qtd;

    // Construtor para inicializar as propriedades
    public function __construct($nome, $preco, $qtd) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->qtd = $qtd;
    }

    // Método para exibir informações
    public function exibeInformacoes() {
        echo "Nome: " . $this->nome . ", Preço: " . $this->preco . ", Quantidade: " . $this->qtd;
    }


}

// Exemplo de uso
$produto = new Produto("Caneta Esferográfica Preta", 10.99, 5);
$produto->exibeInformacoes();
