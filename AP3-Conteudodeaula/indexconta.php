<?php

class ContaBancaria {
  public $titular;
  protected $saldo;
  private $senha;

  public function __construct($titular, $saldoInicial, $senha) {
    $this->titular = $titular;
    $this->saldo = $saldoInicial;
    $this->senha = $senha;
  }

  public function depositar($valor) {
    if ($valor > 0) {
      $this->saldo += $valor;
      echo nl2br ("Depósito de R\$" . number_format($valor, 2, ',', '.') . " realizado com sucesso.\n");
    } else {
      echo "Valor de depósito inválido.\n";
    }
  }

  public function sacar($valor, $senha) {
    if ($senha === $this->senha) {
      if ($valor > 0 && $valor <= $this->saldo) {
        $this->saldo -= $valor;
        echo nl2br ("Saque de R\$" . number_format($valor, 2, ',', '.') . " realizado com sucesso.\n");
      } else {
        echo "Saldo insuficiente ou valor de saque inválido.\n";
      }
    } else {
      echo nl2br ("Senha incorreta.\n");
    }
  }

  public function verSaldo($senha) {
    if ($senha === $this->senha) {
      echo nl2br ("Saldo atual: R\$" . number_format($this->saldo, 2, ',', '.') . "\n");
    } else {
      echo nl2br ("Senha incorreta.\n");
    }
  }
}

// Criando uma instância da conta bancária
$conta = new ContaBancaria("João Silva", 1000.00, "123456");

// Simulações
echo nl2br ("Titular: " . $conta->titular . "\n");

// Depósito
$conta->depositar(500.00); 

// Saque com senha correta
$conta->sacar(200.00, "123456");

// Saque com senha incorreta
$conta->sacar(100.00, "654321");

// Ver saldo com senha correta
$conta->verSaldo("123456");

// Ver saldo com senha incorreta
$conta->verSaldo("000000");

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
  

