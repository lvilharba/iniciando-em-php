<?php

$contasCorrentes = [
    123456789 => [
        'titular' => 'Lucas',
        'saldo' => 1000
    ],
    123456788 => [
        'titular' => 'Maria',
        'saldo' => 10000,
    ],
    123546789 => [
        'titular' => 'Mateus',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo "CPF: $cpf" . PHP_EOL;
    echo "Titular: " . $conta['titular'] . PHP_EOL;
    echo "Saldo: " . $conta ['saldo'] . PHP_EOL;
    echo PHP_EOL;
}
