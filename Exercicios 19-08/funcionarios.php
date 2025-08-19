<?php
// Classe Funcionario
class Funcionario {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function addAumento($valor) {
        $this->salario += $valor;
    }

    public function ganhoAnual() {
        return $this->salario * 12;
    }

    public function exibeDados() {
        echo "<p>Nome: " . $this->nome . "</p>";
        echo "<p>Salário: R$ " . number_format($this->salario, 2, ',', '.') . "</p>";
    }
}

// Classe Assistente que herda de Funcionario
class Assistente extends Funcionario {
    private $matricula;

    public function __construct($nome, $salario, $matricula) {
        parent::__construct($nome, $salario);
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "<p>Matrícula: " . $this->matricula . "</p>";
    }
}

// Classe Tecnico que herda de Assistente
class Tecnico extends Assistente {
    private $bonus;

    public function __construct($nome, $salario, $matricula, $bonus) {
        parent::__construct($nome, $salario, $matricula);
        $this->bonus = $bonus;
    }

    public function ganhoAnual() {
        return parent::ganhoAnual() + $this->bonus;
    }
}

// Classe Administrativo que herda de Assistente
class Administrativo extends Assistente {
    private $turno; // "dia" ou "noite"
    private $adicionalNoturno;

    public function __construct($nome, $salario, $matricula, $turno, $adicionalNoturno) {
        parent::__construct($nome, $salario, $matricula);
        $this->turno = $turno;
        $this->adicionalNoturno = $adicionalNoturno;
    }

    public function ganhoAnual() {
        return parent::ganhoAnual() + ($this->adicionalNoturno * 12);
    }
}

// Exemplo de uso:
echo "<h2>Demonstração das Classes</h2>";

$funcionario = new Funcionario("João Silva", 3000);
echo "<h3>Funcionário:</h3>";
$funcionario->exibeDados();

$assistente = new Assistente("Maria Souza", 2500, "MAT123");
echo "<h3>Assistente:</h3>";
$assistente->exibeDados();

$tecnico = new Tecnico("Carlos Lima", 3500, "TEC456", 2000);
echo "<h3>Técnico:</h3>";
$tecnico->exibeDados();
echo "<p>Ganho Anual: R$ " . number_format($tecnico->ganhoAnual(), 2, ',', '.') . "</p>";

$administrativo = new Administrativo("Ana Costa", 2800, "ADM789", "noite", 300);
echo "<h3>Administrativo:</h3>";
$administrativo->exibeDados();
echo "<p>Ganho Anual: R$ " . number_format($administrativo->ganhoAnual(), 2, ',', '.') . "</p>";
?>
