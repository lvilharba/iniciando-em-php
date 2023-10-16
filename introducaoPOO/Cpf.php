<?php

class CPF
{
    private $numero;

    public function __construct(string $numero)
    {
        $this->numero = $numero;
    }

    public function getCpf(): string
    {
        return $this->numero;
    }
}