<?php

$carro1 = [
    'modelo' => 'Argo',
    'marca' => 'Fiat'    
];

$carro2 = [
    'modelo' => 'i30',
    'marca' => 'Hyundai'
];

$carro3 = [
    'modelo' => 'Civic',
    'marca' => 'Honda'
];

$carro4 = [
    'modelo' => 'X1',
    'marca' => 'BMW'
];

$carros = [$carro1, $carro2, $carro3, $carro4];

for ($i = 0; $i < count($carros); $i++) {
    echo $carros[$i] ['modelo'] . PHP_EOL; 
}

/*for ($i = 0; $i < count($carros); $i++) {
    echo $carros[$i] ['modelo'] . ' - ' . $carros[$i] ['marca'] . PHP_EOL; 
}*/