<?php
class loja {
    public $numero;
    public $cliente;
    public $valor;
    public $status;

    function adicionar ($valor){
        if($this->status == "aguardando"){
        $this->valor =$this->valor + $valor;
    }else{
        echo "Não é possivel adiconar itens.
        O pedido esta $this->status<br>";
    }
}
    function cancelar (){
        $this->status = "Cnacelado";
        echo "Status alterado para $this->status<br>";

    }

    function finalizar(){
        $this->status = "Finalizado";
        echo "status alterado para $this->status <br>";

    }

    function exiberResumo(){
        echo "numero $this->numero <br>";
        echo "cliente $this->cliente <br>";
        echo "valor $this->valor <br>";
        echo "status $this->status <br>";
    }
}