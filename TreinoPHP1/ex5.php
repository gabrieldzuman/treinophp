<?php

$nome = "Gabriel Dzuman";
$idade = 24;

$inteiro = 50;
$flutuante = 3.14;
$texto = "Olá, mundo!";
$verdadeiro = true;

function verificarIdade($nome, $idade) {
    if ($idade >= 18) {
        return "Parabéns, $nome! Você é maior de idade.";
    } else {
        return "Olá, $nome! Você é menor de idade.";
    }
}

echo verificarIdade($nome, $idade) . "<br>";

function saudacao($nome) {
    return "Olá, $nome!";
}

echo saudacao($nome) . "<br>";

$sistemas = array("Windows", "macOS", "Linux");
echo "Sistema escolhido: " . $sistemas[1] . "<br>"; 

if (isset($_GET['nome'])) {
    $nomeUsuario = htmlspecialchars($_GET['nome']); 
    echo "Olá, $nomeUsuario!<br>";
}

$pessoas = array(
    array("nome" => "Gabriel", "idade" => 24),
    array("nome" => "Ana", "idade" => 23)
);

foreach ($pessoas as $pessoa) {
    $nome = $pessoa["nome"];
    $idade = $pessoa["idade"];

    echo verificarIdade($nome, $idade) . "<br>";
}

?>
