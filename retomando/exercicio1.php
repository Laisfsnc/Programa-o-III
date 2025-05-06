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
        echo "Nome: " . $this->nome . ", Preço: " . $this->preco . ", Quantidade: " . $this->qtd . "<br>";
    }
}

// Começando o container centralizado e com fonte maior
echo '<div style="text-align: center; font-size: 20px; font-family: Arial, sans-serif; margin-top: 50px;">';

// Exemplo de uso
$produto = new Produto("Caneta Esferográfica Preta", 10.99, 5);
$produto->exibeInformacoes();

echo '</div>';

?>