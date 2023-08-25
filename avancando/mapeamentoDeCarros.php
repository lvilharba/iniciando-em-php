<?php

$carros = [
    'ABC-1598' => [
        'modelo' => 'Argo',
        'marca' => 'Fiat'    
    ], 
    'CYW-3719' => [
        'modelo' => 'i30',
        'marca' => 'Hyundai'
    ], 
    'KWA-7939' => [
        'modelo' => 'Civic',
        'marca' => 'Honda'
    ], 
    'DXC-5793' => [
        'modelo' => 'X1',
        'marca' => 'BMW'
    ]
];

$carros['GFQ'] = [ //adicionando itens
    'marca' => 'Chevrolet',
    'modelo' => 'Prisma'
];

foreach ($carros as $placa => $carro) {
    echo "Placa: $placa" . PHP_EOL;
    echo "Marca: " . $carro ['marca'] . PHP_EOL;
    echo "Modelo: " . $carro ['modelo'] . PHP_EOL;
    echo PHP_EOL;
}