<?php
// Classe Livro
class Livro {
    public $titulo;
    public $autor;
    public $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            return true;
        }
        return false;
    }

    public function devolver() {
        $this->disponivel = true;
    }
}

// Classe Aluno
class Aluno {
    public $nome;
    public $matricula;
    public $livrosEmprestados = [];

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function pegarLivro($livro) {
        if ($livro->emprestar()) {
            array_push($this->livrosEmprestados, $livro);
            return true;
        }
        return false;
    }

    public function devolverLivro($livro) {
        $index = array_search($livro, $this->livrosEmprestados, true);
        if ($index !== false) {
            array_splice($this->livrosEmprestados, $index, 1);
            $livro->devolver();
            return true;
        }
        return false;
    }
}

// Criando 3 livros
$livros = [
    new Livro("Dom Casmurro", "Machado de Assis"),
    new Livro("1984", "George Orwell"),
    new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry")
];

// Criando 3 alunos
$alunos = [
    new Aluno("Ana Silva", "2023001"),
    new Aluno("Bruno Costa", "2023002"),
    new Aluno("Carlos Pereira", "2023003")
];

// Exemplos de interação:

// Ana pega Dom Casmurro
$alunos[0]->pegarLivro($livros[0]);

// Bruno pega 1984
$alunos[1]->pegarLivro($livros[1]);

// Tento pegar O Pequeno Príncipe (disponível)
echo "Disponível antes: " . ($livros[2]->disponivel ? 'Sim' : 'Não') . "<br>";
$alunos[2]->pegarLivro($livros[2]);
echo "Disponível depois: " . ($livros[2]->disponivel ? 'Sim' : 'Não') . "<br>";

// Carlos devolve O Pequeno Príncipe
$alunos[2]->devolverLivro($livros[2]);
echo "Disponível após devolução: " . ($livros[2]->disponivel ? 'Sim' : 'Não') . "<br>";

// Mostrando todos os alunos e seus livros
echo "<h2>Alunos e Livros Emprestados</h2>";
foreach ($alunos as $aluno) {
    echo "<p><strong>{$aluno->nome}</strong> ({$aluno->matricula}): ";
    if (empty($aluno->livrosEmprestados)) {
        echo "Nenhum livro emprestado";
    } else {
        $titulos = array_map(function($livro) {
            return $livro->titulo;
        }, $aluno->livrosEmprestados);
        echo implode(", ", $titulos);
    }
    echo "</p>";
}

// Mostrando status de todos os livros
echo "<h2>Status dos Livros</h2>";
foreach ($livros as $livro) {
    echo "<p><strong>{$livro->titulo}</strong>: " . ($livro->disponivel ? 'Disponível' : 'Emprestado') . "</p>";
}
?>
