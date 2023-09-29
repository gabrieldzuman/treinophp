<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
    <link rel="stylesheet" type="text/css" href="/meuestilo.css">
</head>
<body>
    
    <h1>Exercício 1</h1>

    <?php include_once 'menu.php'; ?>

    <h3>Calcular o aumento que será dado a um funcionário, obtendo
        do usuário as seguintes informações: salário atual e a porcentagem
        de aumento. Apresentar p novo valor do salário e o valor do aumento.
    </h3>

    <form action="ex1.php" method="post">

        <p>
            <label>Salário atual</label><br>
            <input type="number" name="salario" min="800" max="10000" step="0.01" required>

        </p>

        <p>
            <label>Porcentagem de aumento</label><br>
            <input type="number" name="porcentagem" min="1" max="100" step="0.01" required>
        </p>

        <p>
            <button type="submit" name="calcular">Calcular</button>
        </p>

    </form>

    <?php

    //verificar se o formulário foi enviado   
    if (isset($_POST['calcular']))
    {
        //receber os dados do formulário e armazenar nas respectivas variáveis
        $salario = $_POST['salario'];
        $porcentagem = $_POST['porcentagem'];

        //processamento
        $aumento = $salario * ($porcentagem/100);
        $salario_final = $salario + $aumento;

        //saída de dados
        echo "<h4>Seu salário final é de R$ $salario_final. Você teve um aumento
        de R$ $aumento.</h4>";
    }
    ?>

</body>
</html>
