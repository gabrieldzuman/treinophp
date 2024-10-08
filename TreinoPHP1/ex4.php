<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Curso</title>
    <link rel="stylesheet" type="text/css" href="/meuestilo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1, h2, h3 {
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
        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        select {
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

    <h1>Formulário de Curso</h1>

    <?php include_once 'menu.php'; ?>

    <h2>Preencha os dados do seu curso:</h2>

    <form action="" method="get">

        <p>
            <label for="curso">Curso:</label>
            <input type="text" name="curso" id="curso" required>
        </p>

        <p>
            <label for="turno">Turno:</label>
            <input type="text" name="turno" id="turno" required>
        </p>

        <p>
            <label for="unidade">Unidade:</label>
            <select name="unidade" id="unidade" required>
                <option value="Osório">Osório</option>
                <option value="Ecoville" selected>Ecoville</option>
                <option value="Santos Andrade">Sts. Andrade</option>
            </select>
        </p>

        <p>
            <button type="submit" name="enviar">Enviar</button>
        </p>

    </form>

    <?php
    if (isset($_GET['enviar'])) {
        $curso = htmlspecialchars($_GET['curso']);
        $turno = htmlspecialchars($_GET['turno']);
        $unidade = htmlspecialchars($_GET['unidade']);

        echo "<div class='resultado'>";
        echo "<h4>Dados do seu curso</h4>";
        echo "Curso: $curso <br>";
        echo "Turno: $turno <br>";
        echo "Unidade: $unidade";
        echo "</div>";
    }
    ?>

    <p>
        <a href="index.php?origem=exp2.php">Mandar parâmetro para Home</a>
    </p>

</body>
</html>
