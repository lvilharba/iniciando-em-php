<?php

$peso = 85.9;
$altura = 1.83;
$imc = $peso / $altura ** 2;
$imc = number_format($imc, 2);

if ($imc < 18.5) {
    echo "O seu IMC está em {$imc}, você está abaixo do peso.";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "O seu IMC está em {$imc}, você está no peso ideal.";
} elseif ($imc >= 25 && $imc < 30) {
    echo "O seu IMC está em {$imc}, você está com sobrepeso.";
} elseif ($imc >= 30 && $imc < 35) {
    echo "O seu IMC está em {$imc}, você está com obesidade grau 1.";
} elseif ($imc >= 35 && $imc < 40) {
    echo "O seu IMC está em {$imc}, você está com obesidade grau 2.";
} elseif ($imc > 40) {
    echo "O seu IMC está em {$imc}, você está com obesidade grau 3.";
}