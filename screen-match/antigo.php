<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php";

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];


for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;


$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido"
};

echo "O gênero do filme é: $genero\n";

$notasParaOFilme = [
    10, 
    8, 
    9, 
    7.5, 
    5, 
    6.8
];

// var_dump($notasParaOFilme);

$filme = criaFilme(
    nome: "Thor: Ragnarok", 
    anoLancamento: 2021, 
    nota: 7.8, 
    genero: "super-herói"
);

echo $filme->ano;
echo "\n";

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
echo $menorNota;
echo "\n";

var_dump($filme->nome);
$posicaoDoisPontos = strpos($filme->nome, ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme->nome, 0, $posicaoDoisPontos));
//var_dump(substr($filme['nome'], 6, 12));

//echo json_encode($filme);
//echo "\n";

//var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}', true));

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);