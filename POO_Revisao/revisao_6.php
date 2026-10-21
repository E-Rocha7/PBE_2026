<?php

class Pessoa {

    private $nome;
    private $idade;
    private $cidade;
    private $telefone;

    public function __construct($nome, $idade, $cidade, $telefone) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
        $this->telefone = $telefone;
    }
    public function definirEndereco($cidade) {
        $this->cidade = $cidade;
    }

    public function definirTelefone($numero) {
        $this->telefone = $numero;
    }

    public function aniversario() {
        $this->idade = $this->idade + 1;
    }

    public function exibirPerfil() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . " anos<br>";
        echo "Cidade: " . $this->cidade . "<br>";
        echo "Telefone: " . $this->telefone . "<br>";
    }

}

$pessoa1 = new Pessoa("Cauã", 16, "São Paulo", "19989734204");

echo "<h2>Perfil Inicial</h2>";
$pessoa1->exibirPerfil();

$pessoa1->definirEndereco("Tambaú");
$pessoa1->definirTelefone("19989734204");
$pessoa1->aniversario();

echo "<h2>Perfil Atualizado</h2>";
$pessoa1->exibirPerfil();

?>