<?php
class escola {
    public $diciplina;
    public $professor;
    public $duracao;
    public $num_sala;
    public $bloco;

    function materia($diciplina) {
      $this->diciplina = $this->diciplina + $diciplina;
      echo "O diciplina é: " . $this->diciplina . "<br>";
    }
    function prof($professor) {
      $this->professor = $this->professor + $professor;
      echo "O professor é: " . $this->professor . "<br>";
    }
    function ducao($duracao) {
      $this->duracao = $this->duracao + $duracao;
      echo "O seu saldo é: " . $this->duracao . "<br>";
    }
    function tipos($num_sala) {
      $this->num_sala = $this->num_sala + $num_sala;
      echo "O numero de salas é: " . $this->num_sala . "<br>";
    }
    function block($bloco) {
      $this->bloco = $this->bloco + $bloco;
      echo "O seu bloco é: " . $this->bloco . "<br>";
    }

}

$aluno1 = new escola();

$aluno1->diciplina = "php";
$aluno1->professor = "Gabriel";
$aluno1->duracao = "5 Hr";
$aluno1->num_sala = "6";
$aluno1->bloco = "4";

echo "disciplina: $aluno1->diciplina <br>";
echo "professor: $aluno1->professor <br>";
echo "duração: $aluno1->duracao <br>";
echo "numero de salas: $aluno1->num_sala <br>";
echo "bloco: $aluno1->bloco <br>";
echo "<br>";
$aluno2 = new escola();

$aluno2->diciplina = "LP";
$aluno2->professor = "Leonardo";
$aluno2->duracao = "2 Hr";
$aluno2->num_sala = "5";
$aluno2->bloco = "3";

echo "disciplina: $aluno2->diciplina <br>";
echo "professor: $aluno2->professor <br>";
echo "duraçaõ: $aluno2->duracao <br>";
echo "numero de salas: $aluno2->num_sala <br>";
echo "bloco: $aluno2->bloco <br>";
echo "<br>";
?>