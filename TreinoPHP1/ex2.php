<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
    <link rel="stylesheet" type="text/css" href="/meuestilo.css">
</head>
<body>
    
    <h1>Exercício 2</h1>

    <?php include_once 'menu.php'; ?>

    <h3>
        Calcular o volume de uma caixa (largura x altura x comprimento).
    </h3>

    <form action="ex2.php" method="post">

        <p>
            <label>Largura:</label><br>
            <input type="number" name="lar" min="1" max="5" step="0.1" required>

        </p>

        <p>
            <label>Altura:</label><br>
            <input type="number" name="alt" min="1" max="5" step="0.1" required>
        </p>

        <p>
            <label>Comprimento:</label><br>
            <input type="number" name="com" min="1" max="5" step="0.1" required>
        </p>

        <p>
            <button type="submit" name="calcular">Calcular</button>
        </p>

    </form>

    <?php
    
    if (isset($_POST['calcular']))
    {
     $lar = $_POST['lar'];
     $alt = $_POST['alt'];
     $com = $_POST['com'];

     $vol = $lar * $alt * $com;

     echo "<h4>O volume da caixa de dimensões $lar x $alt x $com (largura x altura x comprimento) = $vol cm²</h4>";
    }
    
    ?>

</body>
</html>
