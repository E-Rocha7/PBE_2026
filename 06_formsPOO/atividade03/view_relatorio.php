<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Holerite Gerado</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .destaque { font-weight: bold; background-color: #e6f7ff; }
    </style>
</head>
<body>
    <h2>Holerite de Pagamento</h2>
    <p><strong>Funcionário:</strong> <?= $funcionario->getNome() ?></p>
    <p><strong>Cargo:</strong> <?= $funcionario->getCargo() ?></p>

    <table>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Proventos</th>
                <th>Descontos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Salário Base</td>
                <td>R$ <?= number_format($funcionario->getSalarioBase(), 2, ',', '.') ?></td>
                <td>-</td>
            </tr>
            <tr>
                <td>Horas Extras (<?= $funcionario->getHorasExtras() ?>h)</td>
                <td>R$ <?= number_format($funcionario->calcularHorasExtras(), 2, ',', '.') ?></td>
                <td>-</td>
            </tr>
            <tr>
                <td>INSS (<?= $funcionario->calcularPercentualINSS() ?>%)</td>
                <td>-</td>
                <td>R$ <?= number_format($funcionario->calcularINSS(), 2, ',', '.') ?></td>
            </tr>
            <tr>
                <td>Vale-Transporte</td>
                <td>-</td>
                <td>R$ <?= number_format($funcionario->calcularValeTransporte(), 2, ',', '.') ?></td>
            </tr>
            <tr class="destaque">
                <td>Salário Bruto</td>
                <td>R$ <?= number_format($funcionario->calcularSalarioBruto(), 2, ',', '.') ?></td>
                <td>-</td>
            </tr>
            <tr class="destaque">
                <td>Salário Líquido</td>
                <td>-</td>
                <td>R$ <?= number_format($funcionario->calcularSalarioLiquido(), 2, ',', '.') ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <a href="view.php">Gerar outro holerite</a>
</body>
</html>