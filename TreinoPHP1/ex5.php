<?php

$nome = "Gabriel Dzuman";
$idade = 23;

$inteiro = 50;
$flutuante = 3.14;
$texto = "Olá, mundo!";
$verdadeiro = true;

$idade = 23;
if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}

function saudacao($nome) {
    echo "Olá, $nome!";
}
saudacao("Gabriel Dzuman");

$sistema = array("windows", "macos", "linux");
echo $sistema[1]; // Saída: macos

$nome = $_GET['nome'];
echo "Olá, $nome!";

// Função para verificar a idade e imprimir uma mensagem personalizada
function verificarIdade($nome, $idade) {
    if ($idade >= 18) {
        return "Parabéns, $nome! Você é maior de idade.";
    } else {
        return "Olá, $nome! Você é menor de idade.";
    }
}

// Array associativo com informações sobre várias pessoas
$pessoas = array(
    array("nome" => "Gabriel", "idade" => 23),
    array("nome" => "Ana", "idade" => 23)
);

// Iterar sobre o array de pessoas e chamar a função verificarIdade para cada uma
foreach ($pessoas as $pessoa) {
    $nome = $pessoa["nome"];
    $idade = $pessoa["idade"];
    
    // Chamar a função verificarIdade e imprimir a mensagem
    $mensagem = verificarIdade($nome, $idade);
    echo $mensagem . "<br>";
}
?>