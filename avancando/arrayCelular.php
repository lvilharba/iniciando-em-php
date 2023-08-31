<?php

//treinando array associativo

$celularList = [
    '123' => [
        'marca' => 'Apple',
        'modelo' => 'Iphone 11'
    ],

    '789' => [
        'marca' => 'Motorola',
        'modelo' => 'Moto g6'
    ],

    '156' => [
        'marca' => 'Samsung',
        'modelo' => 'Galaxy Note 5'
    ],

    '739' => [
        'marca' => 'Xiaomi',
        'modelo' => 'Redmi 5'
    ]
];

//$celularList['953'] = ['marca' => 'Apple', 'modelo' => 'Iphone XR'];

//unset($celularList['789'], $celularList['156']);

foreach ($celularList as $codigo => $celular) {
    echo "$codigo - {$celular['marca']} - {$celular['modelo']}" . PHP_EOL;
}