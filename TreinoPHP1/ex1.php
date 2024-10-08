<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Aumento Salarial</title>
    <link rel="stylesheet" type="text/css" href="/meuestilo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1, h3 {
            color: #333;
        }
        form {
            background: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .resultado {
            margin-top: 20px;
            background: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Calculadora de Aumento Salarial</h1>

    <?php include_once 'menu.php'; ?>

    <h3>Calcule o aumento que será dado a um funcionário:</h3>

    <form action="" method="post">
        <label for="salario">Salário atual (R$):</label>
        <input type="number" name="salario" id="salario" min="800" max="10000" step="0.01" required>

        <label for="porcentagem">Porcentagem de aumento (%):</label>
        <input type="number" name="porcentagem" id="porcentagem" min="1" max="100" step="0.01" required>

        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular'])) {
        $salario = filter_input(INPUT_POST, 'salario', FILTER_VALIDATE_FLOAT);
        $porcentagem = filter_input(INPUT_POST, 'porcentagem', FILTER_VALIDATE_FLOAT);

        if ($salario !== false && $porcentagem !== false) {
            $aumento = $salario * ($porcentagem / 100);
            $salario_final = $salario + $aumento;

            echo "<div class='resultado'>";
            echo "<h4>Resultado:</h4>";
            echo "Seu salário final é de R$ " . number_format($salario_final, 2, ',', '.') . ".<br>";
            echo "Você teve um aumento de R$ " . number_format($aumento, 2, ',', '.') . ".";
            echo "</div>";
        } else {
            echo "<div class='resultado' style='color: red;'>Valores inválidos. Por favor, insira números válidos.</div>";
        }
    }
    ?>
</body>
</html>
