<?php
class ContaBancaria {
    private $titular;
    private $saldo;

    // Construtor
    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    // Método para depositar
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            return true;
        }
        return false;
    }

    // Método para sacar
    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    // Getters
    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

// Exemplo de uso:
$conta = new ContaBancaria("João Silva", 1000);

echo "Titular: " . $conta->getTitular() . "<br>";
echo "Saldo inicial: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "<br>";

$conta->depositar(500);
echo "Saldo após depósito: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "<br>";

$conta->sacar(200);
echo "Saldo após saque: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "<br>";

// Tentativas inválidas
if (!$conta->sacar(2000)) {
    echo "Saque de R$ 2.000,00 não permitido (saldo insuficiente)<br>";
}

if (!$conta->depositar(-100)) {
    echo "Depósito de valor negativo não permitido<br>";
}
?>
