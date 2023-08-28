<?php

function exibirMensagem(string $mensagem): void
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorDoSaque): array
{
    if ($valorDoSaque > $conta['saldo']) {
        echo exibirMensagem(mensagem: "Você não possui saldo para realizar esse saque.");
    } else {
        $conta['saldo'] -= $valorDoSaque;
        echo exibirMensagem(mensagem: "Saque de $valorDoSaque reais feito com sucesso na conta de {$conta['titular']}!");
    }
    return $conta;
}

function depositar(array $conta, float $valorDoDeposito): array
{   if ($valorDoDeposito < 0) {
        echo exibirMensagem(mensagem: "Erro na operação, para depositar é necessário que o valor seja positivo. Tente novamente.");
    } else {
        $conta['saldo'] += $valorDoDeposito;
        echo exibirMensagem(mensagem: "Depósito no valor de $valorDoDeposito reais realizado com sucesso na conta de " . $conta['titular'] . "!");
    }
    return $conta;
}

function titularComLetraMaiuscula(array &$conta) //testando criar uma função passando a variável por referência
{
    $conta['titular'] = strtoupper($conta['titular']);
}
