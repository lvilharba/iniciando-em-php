<?php

$alunosList = array("Lucas", "Jenifer", "Heloisa", "Eduardo");

$totalAlunos = count($alunosList); //Chamar a função count antes do for e atribuir a mesma a uma variável melhora a performance do nosso programa, principalmente em arrays maiores.
for ($i = 0; $i < $totalAlunos; $i++) {
    echo $alunosList[$i] . PHP_EOL;
}