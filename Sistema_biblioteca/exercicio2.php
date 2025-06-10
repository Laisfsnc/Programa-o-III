<?php

class Livro {
  private $titulo;
  private $autor;
  private $anoPublicacao;
  private $disponivel;

  public function __construct($titulo, $autor, $anoPublicacao) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->anoPublicacao = $anoPublicacao;
    $this->disponivel = true; // Por padrão, o livro está disponível
  }

  // Métodos Getters
  public function getTitulo() {
    return $this->titulo;
  }

  public function getAutor() {
    return $this->autor;
  }

  public function getAnoPublicacao() {
    return $this->anoPublicacao;
  }

  public function getDisponivel() {
    return $this->disponivel;
  }

  // Métodos Setters
  public function setTitulo($titulo) {
    $this->titulo = $titulo;
  }

  public function setAutor($autor) {
    $this->autor = $autor;
  }

  public function setAnoPublicacao($anoPublicacao) {
    $this->anoPublicacao = $anoPublicacao;
  }

  // Métodos para controlar o empréstimo
  public function emprestar() {
    if ($this->disponivel) {
      $this->disponivel = false;
      echo nl2br ("Livro '" . $this->titulo . "' emprestado com sucesso.\n");
    } else {
      echo nl2br ("Livro '" . $this->titulo . "' já está emprestado.\n");
    }
  }

  public function devolver() {
    if (!$this->disponivel) {
      $this->disponivel = true;
      echo nl2br ("Livro '" . $this->titulo . "' devolvido com sucesso.\n");
    } else {
      echo nl2br ("Livro '" . $this->titulo . "' já está disponível.\n");
    }
  }

  public function estaDisponivel() {
    if ($this->disponivel) {
      return "O livro '" . $this->titulo . "' está disponível para empréstimo.\n";
    } else {
      return "O livro '" . $this->titulo . "' não está disponível para empréstimo.\n";
    }
  }

  // Método bônus (já existente)
  public function exibirInformacoes() {
    echo nl2br ("Título: " . $this->titulo . "\n");
    echo nl2br ("Autor: " . $this->autor . "\n");
    echo nl2br ("Ano de Publicação: " . $this->anoPublicacao . "\n");
    echo nl2br ("Disponível: " . ($this->disponivel ? "Sim" : "Não") . "\n");
  }
}

// Cenário
$livro1 = new Livro("O Hobbit", "J.R.R. Tolkien", 1937);
$livro2 = new Livro("1984", "George Orwell", 1949);

echo nl2br ($livro1->estaDisponivel()); // O livro 'O Hobbit' está disponível para empréstimo.
$livro1->emprestar(); // Livro 'O Hobbit' emprestado com sucesso.
echo nl2br ($livro1->estaDisponivel()); // O livro 'O Hobbit' não está disponível para empréstimo.
$livro1->emprestar(); // Livro 'O Hobbit' já está emprestado.
$livro1->devolver(); // Livro 'O Hobbit' devolvido com sucesso.
echo nl2br ($livro1->estaDisponivel()); // O livro 'O Hobbit' está disponível para empréstimo.
$livro1->devolver(); // Livro 'O Hobbit' já está disponível.

echo "\n";

echo nl2br  ($livro2->estaDisponivel()); // O livro '1984' está disponível para empréstimo.
$livro2->emprestar(); // Livro '1984' emprestado com sucesso.
echo nl2br ($livro2->estaDisponivel()); // O livro '1984' não está disponível para empréstimo.

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