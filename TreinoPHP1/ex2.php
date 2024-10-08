<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Volume da Caixa</title>
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
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
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
    <h1>Calculadora de Volume da Caixa</h1>

    <?php include_once 'menu.php'; ?>

    <h3>Calcule o volume de uma caixa (largura x altura x comprimento):</h3>

    <form action="" method="post">
        <label for="lar">Largura (cm):</label>
        <input type="number" name="lar" id="lar" min="1" max="5" step="0.1" required>

        <label for="alt">Altura (cm):</label>
        <input type="number" name="alt" id="alt" min="1" max="5" step="0.1" required>

        <label for="com">Comprimento (cm):</label>
        <input type="number" name="com" id="com" min="1" max="5" step="0.1" required>

        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular'])) {
        $lar = filter_input(INPUT_POST, 'lar', FILTER_VALIDATE_FLOAT);
        $alt = filter_input(INPUT_POST, 'alt', FILTER_VALIDATE_FLOAT);
        $com = filter_input(INPUT_POST, 'com', FILTER_VALIDATE_FLOAT);

        if ($lar !== false && $alt !== false && $com !== false) {
            $vol = $lar * $alt * $com;

            echo "<div class='resultado'>";
            echo "<h4>Resultado:</h4>";
            echo "O volume da caixa de dimensões $lar cm x $alt cm x $com cm é igual a $vol cm³.";
            echo "</div>";
        } else {
            echo "<div class='resultado' style='color: red;'>Valores inválidos. Por favor, insira números válidos.</div>";
        }
    }
    ?>
</body>
</html>
