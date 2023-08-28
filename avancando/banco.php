<?php

require_once 'funcoesBanco.php';

$contasCorrentes = [
    '123456789-10' => [
        'titular' => 'Lucas',
        'saldo' => 1000
    ],
    '123456788-11' => [
        'titular' => 'Maria',
        'saldo' => 10000,
    ],
    '123546789-12' => [
        'titular' => 'Mateus',
        'saldo' => 300
    ]
];

//testando as funções sacar e depositar
$contasCorrentes['123456788-11'] = sacar($contasCorrentes['123456788-11'], valorDoSaque:800);
$contasCorrentes['123546789-12'] = sacar($contasCorrentes['123546789-12'], valorDoSaque:800);
$contasCorrentes['123456789-10'] = depositar($contasCorrentes['123456789-10'], valorDoDeposito:450);

unset($contasCorrentes['123456788-11']); //testando a função unset

titularComLetraMaiuscula($contasCorrentes['123546789-12' ]); //testando a função escrita como referência ao invés de valor

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta; //testando a função list
    echo exibirMensagem(mensagem: "$cpf $titular $saldo"); //como atribuímos o titular e o saldo a variáveis, não precisamos mais acessar o array para obter as informações.
}

