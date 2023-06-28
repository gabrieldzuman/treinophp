<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
    <link rel="stylesheet" type="text/css" href="css/meuestilo.css">
</head>
<body>
    
    <h1>Exercício 3</h1>

    <?php include_once 'menu.php'; ?>

    <h2>Exemplo de formulário com envio via POST</h2>

    <h3>Preencha seus dados de contato:</h3>

    <form action="exp1.php" method="post">

        <p>

            <label>Nome:</label><br>
            <input type="text" name="nome" required>

        </p>

        <p>

            <label>Fone:</label><br>
            <input type="phone" name="fone" required>

        </p>

        <p>

            <label>E-mail:</label><br>
            <input type="email" name="email" required>

        </p>

        <p>

            <button type="submit" name="enviar">Enviar</button>

        </p>
    </form>

    <?php 

        //verificar se o formulário foi enviado:
        //se o botão enviar foi enviado via POST

        if (isset($_POST['enviar']))
        { //início do bloco if
    
            $nome = $_POST['nome'];
            $fone = $_POST['fone'];
            $email = $_POST['email'];

            echo "<h4>Dados de Contato:</h4>";
            echo "Nome: $nome <br>";
            echo "Fone: $fone <br>";
            echo "E-mail: $email";

        } //fim do bloco if
    
    ?>

</body>
</html>