<?php

//treinando arrays associativos

$tenis1 = [
    'modelo' => 'Fórum Low', 
    'marca' => 'Adidas'
];

$tenis2 = [
    'modelo' => 'Air Force 1',
    'marca' => 'Nike'
];

$tenis3 = [
    'modelo' => '550',
    'marca' => 'New Balance'
];

$tenis4 = [
    'modelo' => 'Suede',
    'marca' => 'Puma'
];

$tenis5 = [
    'modelo' => 'Air Jordan 11',
    'marca' => 'Nike'
];

$tenis6 = [
    'modelo' => 'Haiwee',
    'marca' => 'Adidas'
];

$tenisList = [$tenis1, $tenis2, $tenis3, $tenis4, $tenis5, $tenis6];

for ($i = 0; $i < count($tenisList); $i++) {
    echo "{$tenisList[$i] ['marca']} - {$tenisList[$i] ['modelo']}" . PHP_EOL;
}