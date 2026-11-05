<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividade 02</title>
</head>
<body>
    <h1>Gerador de Boletim Escolar</h1>
    <form action="logica.php" method="POST">
        <label for="nome">Nome do Aluno:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="turma">Turma:</label><br>
        <select id="turma" name="turma" required>
            <option value="">Selecione...</option>
            <option value="1º IDS">1º IDS</option>
            <option value="2º IDS">2º IDS</option>
            <option value="3º IDS">3º IDS</option>
        </select><br><br>

        <label for="nota1">Nota 1:</label><br>
        <input type="number" id="nota1" name="nota1" min="0" max="10" step="0.1" required><br><br>

        <label for="nota2">Nota 2:</label><br>
        <input type="number" id="nota2" name="nota2" min="0" max="10" step="0.1" required><br><br>

        <label for="nota3">Nota 3:</label><br>
        <input type="number" id="nota3" name="nota3" min="0" max="10" step="0.1" required><br><br>

        <label for="faltas">Faltas (Máximo 80):</label><br>
        <input type="number" id="faltas" name="faltas" min="0" max="80" required><br><br>

        <button type="submit">Gerar Boletim</button>
    </form>
</body>
</html>