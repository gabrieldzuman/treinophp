<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/meuestilo.css">
</head>
<body>

    <h1>Home</h1>

    <?php include_once 'menu.php'; ?>

    <p>
        Esta é a página principal. <br>
        Utilize o menu acima para navegar entre as páginas.
    </p>

    <?php

    //verificar se esta página recebeu o parâmetro 'origem'
    if (isset($_GET['origem']));

        $origem = $_GET['origem'];

        echo "<h4>Você chegou nesta página através da $origem</h4>";

    ?>

</body>
</html>