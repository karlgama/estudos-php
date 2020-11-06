<?php

namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends Funcionario implements \Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }

    public function login(string $senha) :bool
    {

    }
}