<?php

$nomeUsuario = "Vinicius Dias";
$saldoConta = 1000;

mostrarSaldo($nomeUsuario, $saldoConta);

do {
    //$valorDoSaque = 0;
    //$saldoConta = $saldoConta - $valorDoSaque;

    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

    echo "Digite um número: \n";

    $numero = (int) fgets (STDIN);

    echo "O número é: $numero\n";

    if ($numero == 1) {
        echo "1. Consultar saldo atual\n";
        mostrarSaldo($nomeUsuario, $saldoConta);
    } else if ($numero == 2) {
        echo "2. Sacar valor\n";
        echo "Qual valor deseja sacar?\n";
        $valorDoSaque = (int) fgets (STDIN);

        if ($valorDoSaque <= $saldoConta) {
            echo "Você sacou: R$ $valorDoSaque\n";
            $saldoConta = $saldoConta - $valorDoSaque;
            mostrarSaldo($nomeUsuario, $saldoConta);
        } else {
            echo "Saldo insuficiente";
        }
    } else if ($numero == 3) {
        echo "3. Depositar valor\n";
        $valorDoDeposito = (int) fgets (STDIN);
        echo "Você depositou: R$ $valorDoDeposito\n";
        $saldoConta = $saldoConta + $valorDoDeposito;
        mostrarSaldo($nomeUsuario, $saldoConta);
    } else if ($numero == 4) {
        echo "4. Sair\n";
        echo "Adeus";
    } else if ($numero > 4) {
        echo "Opção inválida tente novamente, digite um número: \n";
    }
} while ($numero != 4);

function mostrarSaldo($titular, $saldo) {
    echo "*************\n";
    echo "Titular: $titular\n";
    echo "Saldo atual: R$ $saldo\n";
    echo "*************\n";
}