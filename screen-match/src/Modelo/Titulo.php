<?php

abstract class Titulo
{
    private array $notas;
    public function __construct(
        public readonly string $nome,
        public readonly int $ano,
        public readonly Genero $genero,
    )
    {
        $this->notas = [];
    }

    public function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaDasNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaDasNotas / $quantidadeNotas;
    }

    abstract public function duracaoEmMinutos(): int;
}