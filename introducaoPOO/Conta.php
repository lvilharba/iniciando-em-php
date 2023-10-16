<?php

/*queremos definir a criação de uma conta e que ninguém consiga criar uma conta se não for através desse arquivo, ou seja, essa é a nossa forma de bolo e precisa ser utilizada, essa forma em POO é chamada de classe */

class Conta
{
    //aqui dentro é nossa forma, podemos criar uma variável conta que será do tipo conta, ao criar uma classe, criamos um novo tipo. e Como criamos uma variável conta? exatamente como dissemos, informamos que queremos uma NOVA conta, ou seja, new Conta();, veja o exemplo na linha 22
    private string $cpfTitular; //até o momento, nossos dados são publicos, qualquer um pode acessar, então escrevemos assim. não definimos os valores aqui, definimos em cada uma das variáveis, ou seja, em cada um dos objetos
    private string $nomeTitular; //podemos definir o tipo do atributo da classe antes de inicializar ele, assim garantimos que sempre será uma string, e que não poderá ser um outro tipo
    private float $saldo; //Quando uma conta é criada, o saldo inicial sempre é zero
    private static $numeroDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        if (self::$numeroDeContas > 2) {
            echo "Há mais de uma conta ativa.";
        }
    }

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) { //this se refere a referência que chamou o método -> Se o valor do saque for maior que ESSE saldo (o do objeto), "Saldo Indisponível", Se não, subtrair o valor do saque no saldo.
            echo "Saldo Indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorDoDeposito): void
    {
        if ($valorDoDeposito <= 0) {
            echo "O valor depósito precisa ser positivo.";
            return;
        }
        $this->saldo += $valorDoDeposito;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo insuficiente.";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCpfTitular(): string
    {
        return $this->cpfTitular;
    }
    
    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }

    public static function recuperaNumeroDeContas(): int{
        return self::$numeroDeContas;
    }
}

/*$primeiraConta = new Conta();

//a forma é a conta e o bolo o que é devolvido -> "new Conta", onde o bolo é salvo? Guardamos numa variável "umaNovaConta", a partir dela acessamos o bolo

//para definir os dados, precisamos usar a abstração e utilizar somente o necessário para que nossa classe funcione, para o nosso sistema precisamos do cpf, nome do titular e o saldo.

//para acessarmos e definirmos os valores, utilizamos uma flecha "->", significa que estamos acessando um atributo
$primeiraConta->nomeTitular = 'Lucas Vilharba'; //O nomeTitular na primeira conta é 'Lucas Vilharba'
$primeiraConta->cpfTitular= '123.456.789-10'; //o cpfTitular na primeira conta é '123.456.789-10', e assim por diante
var_dump($primeiraConta);

$segundaConta = new Conta();
$segundaConta->cpfTitular = '789.456.123-00';
$segundaConta->nomeTitular = 'Heloisa Mendes';
$segundaConta->depositar(250);
//uma função dentro de uma classe é chamada de método
var_dump($segundaConta);*/