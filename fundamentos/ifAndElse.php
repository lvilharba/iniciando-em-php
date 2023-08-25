<?php

$idade = 14;
$numeroDePessoas = 1; 
echo "Você só pode entrar se tiver pelo menos 18 anos ou se tiver 16 anos e estiver acompanhado" . PHP_EOL;
echo "Você tem $idade anos." . PHP_EOL;
if ($idade >= 18) {
    echo"Pode entrar";
} else if ($idade >= 16 || $numeroDePessoas > 1) {
    echo"Você está acompanhado, pode entrar";
} else {
    echo "Lamento, você não tem a idade permitida.";
}