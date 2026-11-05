<?php

class Funcionario {
    private $nome;
    private $cargo;
    private $horasExtras;
    private $valeTransporte;
    private $salarioBase;

    public function __construct($nome, $cargo, $horasExtras, $valeTransporte) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->horasExtras = $horasExtras;
        $this->valeTransporte = $valeTransporte;
        $this->definirSalarioBase();
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getHorasExtras() {
        return $this->horasExtras;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function definirSalarioBase() {
        if ($this->cargo == "Auxiliar") {
            $this->salarioBase = 2200.00;
        } elseif ($this->cargo == "Técnico") {
            $this->salarioBase = 3520.00;
        } else {
            $this->salarioBase = 5500.00;
        }
    }

    public function calcularHorasExtras() {
        $valorHora = $this->salarioBase / 220;
        $valorHoraExtra = $valorHora * 1.5;
        return $this->horasExtras * $valorHoraExtra;
    }

    public function calcularSalarioBruto() {
        return $this->salarioBase + $this->calcularHorasExtras();
    }

    public function calcularPercentualINSS() {
        $salarioBruto = $this->calcularSalarioBruto();
        if ($salarioBruto <= 2500.00) {
            return 8;
        } elseif ($salarioBruto <= 5000.00) {
            return 10;
        } else {
            return 12;
        }
    }

    public function calcularINSS() {
        $salarioBruto = $this->calcularSalarioBruto();
        $percentual = $this->calcularPercentualINSS();
        return $salarioBruto * ($percentual / 100);
    }

    public function calcularValeTransporte() {
        if ($this->valeTransporte == "Sim") {
            return $this->salarioBase * 0.06;
        }
        return 0.00;
    }

    public function calcularSalarioLiquido() {
        return $this->calcularSalarioBruto() - $this->calcularINSS() - $this->calcularValeTransporte();
    }
}