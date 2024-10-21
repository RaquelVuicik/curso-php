<?php

class Serie extends Titulo
{
    public function __construct(
        string $nome,
        int $ano,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $episodiosPorTemporadas,
        public readonly int $minutosPorEpisodio
    ) {
        parent::__construct($nome, $ano, $genero);
    }
}