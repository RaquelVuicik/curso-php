<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Genero.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme("Thor - Ragnarok", 2021, Genero::SuperHeroi);
$filme->avalia(7.0);
$filme->avalia(8.1);
$filme->avalia(8.3);

var_dump($filme);

echo $filme->media() . "\n";
