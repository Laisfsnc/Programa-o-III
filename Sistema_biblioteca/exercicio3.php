<?php

class Leitor {
  private $nome;
  private $email;
  private $telefone;

  public function __construct($nome, $email, $telefone) {
    $this->nome = $nome;
    $this->email = $email;
    $this->telefone = $telefone;
  }

  // Métodos Getters
  public function getNome() {
    return $this->nome;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getTelefone() {
    return $this->telefone;
  }

  // Métodos Setters
  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function setTelefone($telefone) {
    $this->telefone = $telefone;
  }

  public function exibirLeitor() {
    echo nl2br ("Nome: " . $this->nome . "\n");
    echo nl2br ("Email: " . $this->email . "\n");
    echo nl2br ("Telefone: " . $this->telefone . "\n");
  }
}

// Cenário
$leitor1 = new Leitor("Maria Silva", "maria.silva@exemplo.com", "11 99999-8888");

echo nl2br ("Dados do Leitor:\n");
$leitor1->exibirLeitor();

echo nl2br ("\nAlterando o email:\n");
$leitor1->setEmail("maria.s@outroemail.com");

echo nl2br ("\nDados do Leitor atualizados:\n");
$leitor1->exibirLeitor();

echo nl2br  ("\nObtendo o nome individualmente:\n");
echo nl2br ("Nome: " . $leitor1->getNome() . "\n");

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