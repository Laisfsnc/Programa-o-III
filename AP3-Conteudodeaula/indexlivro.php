<?php

class Livro {
  public $titulo;
  public $autor;
  private $preco;
  protected $estoque;

  public function __construct($titulo, $autor, $preco, $estoque) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->preco = $preco;
    $this->estoque = $estoque;
  }

  public function getPreco() {
    return $this->preco;
  }

  public function setPreco($valor) {
    $this->preco = $valor;
  }

  protected function adicionarEstoque($quantidade) {
    $this->estoque += $quantidade;
  }

  public function getEstoque() {
    return $this->estoque;
  }
}

class LivroFisico extends Livro {
  public function aumentarEstoque($quantidade) {
    $this->adicionarEstoque($quantidade);
  }
}

// Exemplos de uso:
$livro = new Livro("Dom Casmurro", "Machado de Assis", 29.90, 10);
echo nl2br ("Título: " . $livro->titulo . "\n");
echo nl2br ("Autor: " . $livro->autor . "\n");
echo nl2br ("Preço: " . $livro->getPreco() . "\n");
echo nl2br ("Estoque: " . $livro->getEstoque() . "\n");

$livro->setPreco(34.90);
echo nl2br ("Novo preço: " . $livro->getPreco() . "\n");

$livroFisico = new LivroFisico("O Cortiço", "Aluísio Azevedo", 39.90, 5);
echo nl2br ("Estoque inicial de O Cortiço: " . $livroFisico->getEstoque() . "\n");
$livroFisico->aumentarEstoque(5);
echo nl2br ("Estoque de O Cortiço após aumentar: " . $livroFisico->getEstoque() . "\n");

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Livros</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

    :root {
      --color-bg: #ffffff;
      --color-text: #6b7280;
      --font-family: 'Poppins', sans-serif;
    }

    body {
      margin: 0;
      min-height: 100vh;
      background-color: var(--color-bg);
      font-family: var(--font-family);
      color: var(--color-text);
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      text-align: center;
    }

    main {
      max-width: 600px;
      width: 100%;
    }

    h1 {
      font-weight: 700;
      font-size: 48px;
      margin-bottom: 1rem;
      color: #111827;
    }

    p {
      margin: 0.75rem 0;
      font-weight: 600;
      font-size: 18px;
      line-height: 1.4;
    }
  </style>
</head>
<body>
