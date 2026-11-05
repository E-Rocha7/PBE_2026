<?php
class Matricula {
    private $aluno; // Objeto da classe Aluno
    private $plano;
    private $meses;
    private $modalidades; // Array

    public function __construct($aluno, $plano, $meses, $modalidades) {
        $this->aluno = $aluno;
        $this->plano = $plano;
        $this->meses = $meses;
        $this->modalidades = $modalidades;
    }

    public function getAluno() { return $this->aluno; }
    public function getPlano() { return $this->plano; }
    public function getMeses() { return $this->meses; }
    public function getModalidades() { return $this->modalidades; }

    public function calcularValorPlano() {
        switch ($this->plano) {
            case 'Básico': return 80.00;
            case 'Plus': return 120.00;
            case 'Premium': return 180.00;
            default: return 0.00;
        }
    }

    public function calcularValorModalidade($modalidade) {
        switch ($modalidade) {
            case 'Natação': return 60.00;
            case 'Funcional': return 40.00;
            case 'Lutas': return 50.00;
            default: return 0.00;
        }
    }

    public function calcularMensalidade() {
        $totalMensal = $this->calcularValorPlano();
        foreach ($this->modalidades as $mod) {
            $totalMensal += $this->calcularValorModalidade($mod);
        }
        return $totalMensal;
    }

    public function calcularPercentualDesconto() {
        if ($this->meses >= 1 && $this->meses <= 5) {
            return 0;
        } elseif ($this->meses >= 6 && $this->meses <= 11) {
            return 10;
        } elseif ($this->meses == 12) {
            return 20;
        }
        return 0;
    }

    public function calcularSubtotal() {
        return $this->calcularMensalidade() * $this->meses;
    }

    public function calcularDesconto() {
        $percentual = $this->calcularPercentualDesconto() / 100;
        return $this->calcularSubtotal() * $percentual;
    }

    public function calcularTotal() {
        return $this->calcularSubtotal() - $this->calcularDesconto();
    }
}