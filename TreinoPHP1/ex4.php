<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercício 4</title>
    <link rel="stylesheet" type="text/css" href="/meuestilo.css">
  </head>
  <body>

    <h1>Exercício 4</h1>

    <?php include_once 'menu.php'; ?>
    
    <h2>Exemplo de formulário com envio via GET</h2>

    <h3>Preencha os dados do seu curso:</h3>

    <form action="exp2.php" method="get">

        <p>
            <label>Curso:</label><br>
            <input type:="text" name="curso" required>
        </p>

        <p>
            <label>Turno:</label><br>
            <input type:="text" name="turno" required>
        </p>

        <p>
            <label>Unidade:</label><br>
            <select name="Unidade">
                <option value="Osório">Osório</option>
                <option value="Ecoville" selected>Ecoville </option>
                <option value="Santos Andrade">Sts. Andrade</option>
            </select>
        </p>

        <p>
            <button type="submit" name="enviar">Enviar</button>
        </p>

    </form>

    <?php

        if(isset($_GET['enviar']))
        {
            $curso = $_GET['curso'];
            $turno = $_GET['turno'];
            $unidade = $_GET['unidade'];

            echo "<h4>Dados do seu curso</h4>";
            echo "Curso: $curso <br>";
            echo "Turno: $turno <br>";
            echo "Unidade: $unidade";
        }

    ?>

    <p>
        <a href="index.php?origem=exp2.php">Mandar parâmetro para Home</a>
    </p>

  </body>
</html>
