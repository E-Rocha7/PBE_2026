
<?php

class Pedido {

    private $cliente;
    private $valorItens;

    public function __construct($cliente) {
        $this->cliente = $cliente;
        $this->valorItens = 0;
    }

    public function adicionarItem($valor) {
        $this->valorItens = $this->valorItens + $valor;
    }

    public function getTotal() {
        return $this->valorItens;
    }

    public function exibirPedido() {
        echo "<h2>Pedido</h2>";
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Subtotal dos itens: R$ " . number_format($this->valorItens, 2,) . "<br>";
    }
}


class NotaFiscal {

    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function __construct($totalPedido, $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0;
    }

    public function calcularTotal() {
        $valorImposto = $this->totalPedido * $this->imposto / 100;
        $this->totalPagar = $this->totalPedido + $valorImposto;
    }

    public function exibirNota() {
        $valorImposto = $this->totalPedido * $this->imposto / 100;

        echo "<h2>Nota Fiscal</h2>";
        echo "Subtotal: R$ " . number_format($this->totalPedido, 2, ) . "<br>";
        echo "Imposto: " . $this->imposto . "%<br>";
        echo "Valor do imposto: R$ " . number_format($valorImposto, 2,) . "<br>";
        echo "Total a pagar: R$ " . number_format($this->totalPagar, 2,) . "<br>";
    }
}

$pedido = new Pedido("Enzo");
$pedido->adicionarItem(100);
$pedido->adicionarItem(50);
$pedido->adicionarItem(30);
$pedido->exibirPedido();

$total = $pedido->getTotal();

$nota = new NotaFiscal($total, 10);

$nota->calcularTotal();

$nota->exibirNota();

?>
