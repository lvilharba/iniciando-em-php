<?php

//treinando arrays associativos e foreach

$tenisList = [
    '1234' => [
        'modelo' => 'Fórum Low', 
        'marca' => 'Adidas'
    ],

    '1115' => [
        'modelo' => 'Air Force 1',
        'marca' => 'Nike'
    ],

    '3957' => [
        'modelo' => '550',
        'marca' => 'New Balance'
    ],

    '7615' => [
        'modelo' => 'Suede',
        'marca' => 'Puma'
    ],

    '1753' => [
        'modelo' => 'Air Jordan 11',
        'marca' => 'Nike'
    ],

    '5501' => [
        'modelo' => 'Haiwee',
        'marca' => 'Adidas'
    ]
];

foreach ($tenisList as $numSerie => $tenis) {
    echo "$numSerie - {$tenis['marca']} - {$tenis['modelo']}" . PHP_EOL;
}