<?php

class Produto
{
    public $nome;
    public $preco;
    public $qtd;

    public function exibeInformacoes(){
        echo "Nome: " . $this->nome . ", Preço: " . $this->preco . ", Quantidade: " . $this->qtd . "<br>";
    }
}

// Instanciando o primeiro objeto Produto
$produto1 = new Produto();
$produto1->nome = "Camiseta";
$produto1->preco = 29.99;
$produto1->qtd = 15;

// Instanciando o segundo objeto Produto
$produto2 = new Produto();
$produto2->nome = "Tênis";
$produto2->preco = 99.90;
$produto2->qtd = 8;

// Começando o container centralizado e com fonte maior
echo '<div style="text-align: center; font-size: 20px; font-family: Arial, sans-serif; margin-top: 50px;">';

// Chamando o método exibeInformacoes() para cada objeto
$produto1->exibeInformacoes();
$produto2->exibeInformacoes();

echo '</div>';

?>