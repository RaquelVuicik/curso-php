<?php

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

    public function duracaoEmMinutos(): int
    {
        return $this->duracaoEmMinutos;
    }
}