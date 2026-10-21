<?php

class Aluno {
    private $nome;
    private $nota;

    public function __construct($nome, $nota = 0) {
        $this->nome = $nome;
        $this->nota = $nota;
    }

    public function getStatus() {
        if ($this->nota >= 6) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
}

$aluno1 = new Aluno("enzo gabriel", 7.5);
$aluno2 = new Aluno("caua indin", 2.0);

echo "<pre>";
print_r($aluno1);
echo "Status: " . $aluno1->getStatus . "\n\n";

print_r($aluno2);
echo "Status: " . $aluno2->getStatus() . "\n";
echo "</pre>";
