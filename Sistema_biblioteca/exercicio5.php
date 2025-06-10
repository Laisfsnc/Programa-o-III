<?php
class Livro {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
}

class Leitor {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}

class Biblioteca {
    public $nomeBiblioteca;
    private $livros;
    private $leitores;

    public function __construct($nomeBiblioteca) {
        $this->nomeBiblioteca = $nomeBiblioteca;
        $this->livros = array();
        $this->leitores = array();
    }

    public function adicionarLivro(Livro $livro) {
        array_push($this->livros, $livro);
    }

    public function adicionarLeitor(Leitor $leitor) {
        array_push($this->leitores, $leitor);
    }

    public function listarLivros() {
        echo nl2br ("Livros da  " . $this->nomeBiblioteca . ":\n");
        foreach ($this->livros as $livro) {
            echo nl2br ("Título: " . $livro->getTitulo() . ", Autor: " . $livro->getAutor() . "\n");
        }
    }

    public function listarLeitores() {
        echo nl2br ("Leitores da  " . $this->nomeBiblioteca . ":\n");
        foreach ($this->leitores as $leitor) {
            echo nl2br ("Nome: " . $leitor->getNome() . ", Idade: " . $leitor->getIdade() . "\n");
        }
    }
}

// Cenário
$biblioteca = new Biblioteca("Biblioteca Municipal");

$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien");
$livro2 = new Livro("O Alquimista", "Paulo Coelho");
$livro3 = new Livro("Dom Quixote", "Miguel de Cervantes");

$leitor1 = new Leitor("João", 25);
$leitor2 = new Leitor("Maria", 30);

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);

$biblioteca->adicionarLeitor($leitor1);
$biblioteca->adicionarLeitor($leitor2);

$biblioteca->listarLivros();
$biblioteca->listarLeitores();
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