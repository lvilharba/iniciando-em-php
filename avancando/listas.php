<?php

$idadeList = [21, 23, 19, 21, 30, 25];

/*list($idadeLucas, $idadeJulia, $idadeJoao) = $idadeList;

echo $idadeLucas . PHP_EOL;
echo $idadeJulia . PHP_EOL;
echo $idadeJoao . PHP_EOL;*/

unset($idadeList[3]);

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}