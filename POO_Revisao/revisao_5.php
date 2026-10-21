<?php

class Turma {

    private $nome;
    private $professor;
    private $qtdAlunos;
    private $capacidade;

    public function __construct($nome, $professor, $capacidade) {
        $this->nome = $nome;
        $this->professor = $professor;
        $this->capacidade = $capacidade;
        $this->qtdAlunos = 0;
    }

    public function adicionarAluno() {
        if ($this->qtdAlunos < $this->capacidade) {
            $this->qtdAlunos++;
            echo "Aluno adicionado com sucesso!<br>";
        } else {
            echo "Turma lotada! Não é possível adicionar aluno.<br>";
        }
    }

    public function removerAluno() {
        if ($this->qtdAlunos > 0) {
            $this->qtdAlunos--;
            echo "Aluno removido com sucesso!<br>";
        } else {
            echo "Não há alunos para remover.<br>";
        }
    }

    public function exibirTurma() {
        echo "<h2>Resumo da Turma</h2>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Professor: " . $this->professor . "<br>";
        echo "Quantidade de alunos: " . $this->qtdAlunos . "<br>";
        echo "Capacidade máxima: " . $this->capacidade . "<br>";
    }
}

$turma = new Turma("3º Ano A", "Carlos", 3);

$turma->exibirTurma();

echo "<hr>";

$turma->adicionarAluno();
$turma->adicionarAluno();
$turma->adicionarAluno();

$turma->adicionarAluno();

echo "<hr>";

$turma->exibirTurma();

echo "<hr>";

$turma->removerAluno();

$turma->exibirTurma();

?>