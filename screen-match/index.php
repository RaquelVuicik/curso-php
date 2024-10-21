<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    "Thor - Ragnarok", 
    2021, 
    Genero::SuperHeroi, 
    180
);

$filme->avalia(7.0);
$filme->avalia(8.1);
$filme->avalia(8.3);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->ano . "\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);

echo $serie->ano . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";
