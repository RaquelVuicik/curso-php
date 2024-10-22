<?php

namespace ScreenMatch\Modelo;

class Filme extends Titulo
{
    public function __construct(
        string $nome,
        int $ano,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
    ) {
        parent::__construct($nome, $ano, $genero);
    }

    #[Override]
    public function duracaoEmMinutos(): int
    {
        return $this->duracaoEmMinutos;
    }
}