<?php
class Celular {
    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    function ligar() {
      $this->ligado = true;
      echo "O celular foi ligado";
    }

    function Desligar() {
        $this->ligado = false;
        echo "O celular foi desligado <br>";
    }
    
    function usar($consumir) {
       $this->bateria = $this-bateria - $consumir;
       if($this->bateria < 0){
            $this->bateria = 0;
       }
       echo "a bateria foi consumiada em $consumir <br>";
       echo "sobrando um total de $this->bateria";
    }
    function carregar($carga){
        $this->bateria = $this->bateria + $carga;
        if($this->bateria > 100){
            $this->bateria=100;
        }
        echo "A bateria foi CARREGADA em $carga";
        echo "Aumentando a bateria para $this->bateria";
    }
}

$celular1 = new Celular();

$celular1->marca = "motorola";
$celular1->modelo= "g9";
$celular1->cor = "azul";
$celular1->bateria = 50;
$celular1->ligado = true;

echo "marca: $celular1->marca <br>";
echo "modelo: $celular1->modelo <br>";
echo "cor: $celular1->cor <br>";
echo "bateria: $celular1->bateria <br>";
echo "ligado: $celular1->ligado <br>";
echo "<br>";
$celular2 = new Celular();

$celular2->marca = "iphone";
$celular2->modelo= "15 pro max";
$celular2->cor = "azul";
$celular2->bateria = 50;
$celular2->ligado = true;

echo "marca: $celular2->marca <br>";
echo "modelo: $celular2->modelo <br>";
echo "cor: $celular2->cor <br>";
echo "bateria: $celular2->bateria <br>";
echo "ligado: $celular2->ligado <br>";
