<?php
require_once 'Aluno.php';
require_once 'Matricula.php';

// Recebendo e sanitizando os dados do formulário
$nome = $_POST['nome'] ?? '';
$peso = floatval($_POST['peso'] ?? 0);
$altura = floatval($_POST['altura'] ?? 0);
$plano = $_POST['plano'] ?? '';
$meses = intval($_POST['meses'] ?? 1);

// Atenção ao checkbox: se não marcar nenhum, garante que venha um array vazio
$modalidades = $_POST['modalidades'] ?? [];

// Criação dos objetos com Composição de Objetos (Matricula tem um Aluno)
$aluno = new Aluno($nome, $peso, $altura);
$matricula = new Matricula($aluno, $plano, $meses, $modalidades);

// Inclui o relatório exibindo o resultado
include 'view_relatorio.php';