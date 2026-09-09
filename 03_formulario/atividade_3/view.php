<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <h2>Calculadora</h2>
        <label for="">Numero:</label>
        <input type="number" name="numero1">
        <br><br>
         <label for="">Numero:</label>
         <input type="number" name="numero2">
        <br><br>
        <button type="submit">Enviar formulario</button>
        <br><br>
        <h2>operação</h2>
        <select name="operacao" required>
            <option value="+">adição</option>
            <option value="-">subtração</option>
            <option value="*">multiplicação</option>
            <option value="/">divisão</option>
    </form>
</body>
</html>