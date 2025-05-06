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

// Função para mostrar a média dos preços de dois produtos
function mostrarMediaPrecos($produto1, $produto2) {
    $media = ($produto1->preco + $produto2->preco) / 2;
    echo "A média dos preços dos produtos é: " . $media;
}

// Instanciando os produtos
$produto1 = new Produto();
$produto1->nome = "Camiseta";
$produto1->preco = 29.99;
$produto1->qtd = 15;

$produto2 = new Produto();
$produto2->nome = "Tênis";
$produto2->preco = 99.90;
$produto2->qtd = 8;

// Começando o container centralizado e com fonte maior
echo '<div style="text-align: center; font-size: 20px; font-family: Arial, sans-serif; margin-top: 50px;">';

// Exibindo informações dos produtos
$produto1->exibeInformacoes();
$produto2->exibeInformacoes();

// Chamando a função para mostrar a média dos preços
mostrarMediaPrecos($produto1, $produto2);

echo '</div>';

?>