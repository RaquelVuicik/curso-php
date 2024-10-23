<?php

namespace ScreenMatch\Calculos;

use ScreenMatch\Modelo\Avaliavel;
use Throwable;

class ConversorNotaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
            $nota = $avaliavel->media();

            return round($nota) / 2;
        } catch (Throwable $erro) {
            echo $erro->getMessage();
            return 0;
        }
    }
}