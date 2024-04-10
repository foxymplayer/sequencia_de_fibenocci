<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Fibonacci</title>
</head>
<body>
    <h1>Calculadora Fibonacci</h1>
    <form action="" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular</button>
    </form>
    <?php
    function fibonacci($n) {
        if ($n == 0) return 0;
        elseif ($n == 1) return 1;
        else return fibonacci($n - 1) + fibonacci($n - 2);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        echo "<h2>Resultado:</h2>";
        echo "<p>A sequência de Fibonacci para o número $numero é:</p>";
        echo "<ul>";
        for ($i = 0; $i < $numero; $i++) {
            echo "<li>" . fibonacci($i) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
