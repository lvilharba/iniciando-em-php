<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$lucas = new Titular(new Cpf('123.456.789-10'), 'Lucas Vilharba');
$primeiraConta = new Conta($lucas);
var_dump($primeiraConta);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); //isso é ok
//queremos privar os dados da conta, pra que só a própria conta consiga acessar os seus atributos

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpf() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$luana = new Titular(new Cpf('123432532543'), 'Luana');
$segundaConta = new Conta($luana);
var_dump($segundaConta);
echo Conta::recuperaNumeroDeContas();