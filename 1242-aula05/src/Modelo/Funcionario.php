<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Pessoa;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, string $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }


    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }



}