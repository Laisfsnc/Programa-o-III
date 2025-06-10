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

  public function setDisponivel($disponivel) {
    $this->disponivel = $disponivel;
  }

  // Método bônus
  public function exibirInformacoes() {
    echo nl2br ("Título: " . $this->titulo . "\n");
    echo nl2br ("Autor: " . $this->autor . "\n");
    echo nl2br ("Ano de Publicação: " . $this->anoPublicacao . "\n");
    echo nl2br ("Disponível: " . ($this->disponivel ? "Sim" : "Não") . "\n");
  }
}

// Exemplo de uso
$meuLivro = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954);

echo nl2br ("Informações iniciais:\n");
$meuLivro->exibirInformacoes();

echo nl2br ("\nAlterando o título e a disponibilidade:\n");
$meuLivro->setTitulo("O Senhor dos Anéis: A Sociedade do Anel");
$meuLivro->setDisponivel(false);

echo nl2br ("\nInformações atualizadas:\n");
$meuLivro->exibirInformacoes();

echo nl2br ("\nObtendo informações individualmente:\n");
echo nl2br ("Título: " . $meuLivro->getTitulo() . "\n");
echo nl2br ("Autor: " . $meuLivro->getAutor() . "\n");
echo nl2br ("Ano de Publicação: " . $meuLivro->getAnoPublicacao() . "\n");
echo nl2br ("Disponível: " . ($meuLivro->getDisponivel() ? "Sim" : "Não") . "\n");

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