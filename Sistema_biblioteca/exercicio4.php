<?php

class Livro {
  private $titulo;
  private $autor;
  private $anoPublicacao;
  private $disponivel;
  protected $leitorAtual; // Novo atributo

  public function __construct($titulo, $autor, $anoPublicacao) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->anoPublicacao = $anoPublicacao;
    $this->disponivel = true; // Por padrão, o livro está disponível
    $this->leitorAtual = null; // Inicialmente, nenhum leitor pegou o livro
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

  // Métodos para controlar o empréstimo (atualizados)
  public function emprestar($nomeLeitor) { // Agora recebe o nome do leitor
    if ($this->disponivel) {
      $this->disponivel = false;
      $this->leitorAtual = $nomeLeitor; // Define o leitor atual
      echo nl2br ("Livro '" . $this->titulo . "' emprestado para " . $nomeLeitor . " com sucesso.\n");
    } else {
      echo nl2br ("Livro '" . $this->titulo . "' já está emprestado.\n");
    }
  }

  public function devolver() {
    if (!$this->disponivel) {
      $this->disponivel = true;
      $this->leitorAtual = null; // Apaga o nome do leitor atual
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

  public function quemPegou() { // Novo método
    if ($this->leitorAtual) {
      return "O livro '" . $this->titulo . "' está emprestado para " . $this->leitorAtual . ".\n";
    } else {
      return "O livro '" . $this->titulo . "' não está emprestado para ninguém no momento.\n";
    }
  }

  // Método bônus (já existente)
  public function exibirInformacoes() {
    echo nl2br ("Título: " . $this->titulo . "\n");
    echo nl2br ("Autor: " . $this->autor . "\n");
    echo nl2br ("Ano de Publicação: " . $this->anoPublicacao . "\n");
    echo nl2br ("Disponível: " . ($this->disponivel ? "Sim" : "Não") . "\n");
    if ($this->leitorAtual) {
      echo nl2br ("Emprestado para: " . $this->leitorAtual . "\n");
    }
  }
}

// Cenário
$livro1 = new Livro("O Hobbit", "J.R.R. Tolkien", 1937);

echo nl2br($livro1->estaDisponivel()); // O livro 'O Hobbit' está disponível para empréstimo.
echo nl2br($livro1->quemPegou()); // O livro 'O Hobbit' não está emprestado para ninguém no momento.
$livro1->emprestar("Ana Paula"); // Livro 'O Hobbit' emprestado para Ana Paula com sucesso.
echo nl2br($livro1->estaDisponivel()); // O livro 'O Hobbit' não está disponível para empréstimo.
echo nl2br($livro1->quemPegou()); // O livro 'O Hobbit' está emprestado para Ana Paula.
$livro1->devolver(); // Livro 'O Hobbit' devolvido com sucesso.
echo nl2br($livro1->estaDisponivel()); // O livro 'O Hobbit' está disponível para empréstimo.
echo nl2br($livro1->quemPegou()); // O livro 'O Hobbit' não está emprestado para ninguém no momento.

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