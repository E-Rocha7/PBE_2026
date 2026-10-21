<?php

class Carro {
    private $modelo;
    private $velocidade;

    public function __construct($modelo) {
        $this->modelo = $modelo;
        $this->velocidade = 0;
    }

    public function acelerar() {
        $this->velocidade += 10;
    }

    public function frear() {
        $this->velocidade -= 10;
        if ($this->velocidade < 0) {
            $this->velocidade = 0;
        }
    }

    public function verVelocidade() {
        echo "O carro " . $this->modelo . " está a " . $this->velocidade . " km/h.\n";
    }
}

$meuCarro = new Carro("");

$meuCarro->verVelocidade();

$meuCarro->acelerar();
$meuCarro->acelerar();
$meuCarro->verVelocidade();

$meuCarro->frear();
$meuCarro->verVelocidade();
