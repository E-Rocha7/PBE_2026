<?php
require_once 'Funcionario.php';

// Recebe os dados do formulário de forma segura
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$horasExtras = $_POST['horas_extras'];
$valeTransporte = $_POST['vale_transporte'];

// Cria o objeto funcionário
$funcionario = new Funcionario($nome, $cargo, $horasExtras, $valeTransporte);

// Inclui o arquivo visual do relatório (a view terá acesso à variável $funcionario)
include 'view_relatorio.php';