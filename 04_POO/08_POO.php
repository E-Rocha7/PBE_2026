<?php

class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario = 1000) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual) {
        if ($percentual > 0 && $percentual <= 10) {
            $this->salario += $this->salario * ($percentual / 100);
        } else {
            echo "Erro: O percentual de aumento deve ser maior que 0% e menor ou igual a 10%.<br>";
        }
    }

    public function exibirSalario() {
        
        $salarioFormatado = "R$ " . number_format($this->salario, 2, ',', '.');
        echo "Funcionário: {$this->nome} | Salário: {$salarioFormatado}<br>";
    }
}

$func1 = new Funcionario("Enzo", 3500);
$func1->exibirSalario(); 
$func1->aumentarSalario(5); 

$func2 = new Funcionario("Mateus 3500");
$func2->exibirSalario(); 
