<?php
class ContaBancaria {
    public $titular;
    public $numero;
    public $saldo;
    public $tipo;

    function titular($titulo) {
       $this->titular = $this->titular;
        echo "O titular é: ". $this->titular . "<br>";
 }
 function numeros($numero){
    $this->numero = $this->numero;
    echo "O numero é: " . $this->numero . "<br>";
 }
 function saldo($titulo){
    $this->saldo = $this->saldo;
    echo "O saldo é: " . $this->saldo . "<br>";
 }
 function tipo($tipo){
    $this->tipo = $this-> tipo;
    echo "O tipo é: " . $this->tipo . "<br>";
 }
}

    $conta1 = new ContaBancaria();

$conta1->titular = "Enzo";
$conta1->numero = "7";
$conta1->saldo = "1000";
$conta1->tipo = "porquinho";


echo "titular: $conta1->titular <br>";
echo "numero: $conta1->numero <br>";
echo "saldo: $conta1->saldo <br>";
echo "tipo: $conta1->tipo <br>";
echo "<br>";


$conta2 = new ContaBancaria();

$conta2->titular = "mateus";
$conta2->numero = "1";
$conta2->saldo = "10030";
$conta2->tipo = "porquinho";


echo "titular: $conta2->titular <br>";
echo "numero: $conta2->numero <br>";
echo "saldo: $conta2->saldo <br>";
echo "tipo: $conta2->tipo <br>";







?>