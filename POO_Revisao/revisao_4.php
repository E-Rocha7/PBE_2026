<?php

class Paciente
{
    private $nome;
    private $idade;
    private $peso;
    private $altura;

    public function __construct($nome, $idade, $peso, $altura)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularIMC()
    {
        $imc = $this->peso / ($this->altura * $this->altura);

        return $imc;
    }

    public function classificarIMC()
    {
        $imc = $this->calcularIMC();

        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc < 25) {
            return "Peso normal";
        } elseif ($imc < 30) {
            return "Sobrepeso";
        } else {
            return "Obesidade";
        }
    }

    public function exibirFicha()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . " anos<br>";
        echo "Peso: " . $this->peso . " kg<br>";
        echo "Altura: " . $this->altura . " metros<br>";
        echo "IMC: " . number_format($this->calcularIMC(), 2, ',', '.') . "<br>";
        echo "Classificação: " . $this->classificarIMC() . "<br>";
    }
}

$paciente1 = new Paciente("Carlos", 25, 70, 1.75);

echo "<h2>Ficha do Paciente</h2>";

$paciente1->exibirFicha();

?>