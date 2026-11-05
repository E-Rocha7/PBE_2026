<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>atividade03</title>
</head>
<body>
    <h2>Cadastro de Funcionário para Holerite</h2>
    <form action="logica.php" method="POST">
        <div>
            <label for="nome">Nome do Funcionário:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <br>
        <div>
            <label for="cargo">Cargo:</label>
            <select id="cargo" name="cargo" required>
                <option value="">Selecione um cargo</option>
                <option value="Auxiliar">Auxiliar (R$ 2.200,00)</option>
                <option value="Técnico">Técnico (R$ 3.520,00)</option>
                <option value="Analista">Analista (R$ 5.500,00)</option>
            </select>
        </div>
        <br>
        <div>
            <label for="horas_extras">Horas Extras no Mês:</label>
            <input type="number" id="horas_extras" name="horas_extras" min="0" required>
        </div>
        <br>
        <div>
            <label>Utiliza Vale-Transporte?</label>
            <label><input type="radio" name="vale_transporte" value="Sim" required> Sim</label>
            <label><input type="radio" name="vale_transporte" value="Não" required> Não</label>
        </div>
        <br>
        <button type="submit">Gerar Holerite</button>
    </form>
</body>
</html>