<?php

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 5;

$notaFilme = $somaDeNotas / 5;
$planoPrime = true;


$incluidoNoPlano = $planoPrime && $anoLancamento < 2020;

echo "Nome do filme: ";
echo $nomeFilme;
echo "\n";
echo "Nota do filme: ";
echo $notaFilme;