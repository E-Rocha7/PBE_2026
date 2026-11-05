<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contrato de Matrícula</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-top: 15px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        .total-destaque { font-size: 1.3em; font-weight: bold; color: green; }
        .mensagem { font-style: italic; margin-top: 15px; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Contrato de Matrícula - PowerFit</h1>
    
    <p><strong>Nome do Aluno:</strong> <?= $matricula->getAluno()->getNome(); ?></p>
    <p><strong>IMC:</strong> <?= number_format($matricula->getAluno()->calcularIMC(), 1, ',', '.'); ?> </p>
    <p><strong>Classificação:</strong> <?= $matricula->getAluno()->classificarIMC(); ?></p>

    <h3>Demonstrativo da Mensalidade</h3>
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Valor Mensal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Plano <?= $matricula->getPlano(); ?></td>
                <td>R$ <?= number_format($matricula->calcularValorPlano(), 2, ',', '.'); ?></td>
            </tr>
            <?php foreach ($matricula->getModalidades() as $mod): ?>
                <tr>
                    <td>Modalidade: <?= $mod; ?></td>
                    <td>R$ <?= number_format($matricula->calcularValorModalidade($mod), 2, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
            <tr style="background-color: #f2f2f2; font-weight: bold;">
                <td>Valor Mensalidade Total</td>
                <td>R$ <?= number_format($matricula->calcularMensalidade(), 2, ',', '.'); ?></td>
            </tr>
        </tbody>
    </table>

    <h3>Resumo do Contrato</h3>
    <p><strong>Duração:</strong> <?= $matricula->getMeses(); ?> mês(es)</p>
    <p><strong>Subtotal:</strong> R$ <?= number_format($matricula->calcularSubtotal(), 2, ',', '.'); ?></p>
    <p><strong>Desconto (<?= $matricula->calcularPercentualDesconto(); ?>%):</strong> R$ <?= number_format($matricula->calcularDesconto(), 2, ',', '.'); ?></p>
    <p class="total-destaque">TOTAL DO CONTRATO: R$ <?= number_format($matricula->calcularTotal(), 2, ',', '.'); ?></p>

    <div class="mensagem">
        <?php if ($matricula->calcularPercentualDesconto() > 0): ?>
            Parabéns! Você ganhou <?= $matricula->calcularPercentualDesconto(); ?>% de desconto.
        <?php else: ?>
            Dica: fechando 6 meses ou mais você ganha desconto.
        <?php endif; ?>
    </div>
    
    <br>
    <a href="view.php"><button>Nova Matrícula</button></a>
</body>
</html>