<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
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
        input[type="text"],
        input[type="phone"],
        input[type="email"] {
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
    <h1>Formulário de Contato</h1>

    <?php include_once 'menu.php'; ?>

    <h2>Preencha seus dados de contato:</h2>

    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="fone">Fone:</label>
        <input type="phone" name="fone" id="fone" required>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>

        <button type="submit" name="enviar">Enviar</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['enviar'])) {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $fone = filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        if ($nome && $fone && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='resultado'>";
            echo "<h4>Dados de Contato:</h4>";
            echo "Nome: $nome <br>";
            echo "Fone: $fone <br>";
            echo "E-mail: $email";
            echo "</div>";
        } else {
            echo "<div class='resultado' style='color: red;'>Dados fornecidos são inválidos. Verifique e tente novamente.</div>";
        }
    }
    ?>
</body>
</html>
