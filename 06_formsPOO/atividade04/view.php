!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>PowerFit - Nova Matrícula</title>
</head>
<body>
    <h1>atividade04
    </h1>
    <form action="logica.php" method="POST">
        <h3>Dados do Aluno</h3>
        <label>Nome: <input type="text" name="nome" required></label><br><br>
        <label>Peso (kg): <input type="number" name="peso" step="0.1" required></label><br><br>
        <label>Altura (m): <input type="number" name="altura" step="0.01" required></label><br><br>

        <h3>Dados da Matrícula</h3>
        <label>Plano:
            <select name="plano" required>
                <option value="Básico">Básico - R$ 80,00</option>
                <option value="Plus">Plus - R$ 120,00</option>
                <option value="Premium">Premium - R$ 180,00</option>
            </select>
        </label><br><br>

        <label>Duração do Contrato (meses): 
            <input type="number" name="meses" min="1" max="12" value="1" required>
        </label><br><br>

        <h3>Modalidades Extras (Opcional)</h3>
        <label><input type="checkbox" name="modalidades[]" value="Natação"> Natação (+ R$ 60,00)</label><br>
        <label><input type="checkbox" name="modalidades[]" value="Funcional"> Funcional (+ R$ 40,00)</label><br>
        <label><input type="checkbox" name="modalidades[]" value="Lutas"> Lutas (+ R$ 50,00)</label><br><br>

        <button type="submit">Gerar Matrícula</button>
    </form>
</body>
</html>