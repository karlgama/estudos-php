<?php

namespace Alura\Banco\Modelo\Conta;

require_once ('../autoloader.php');

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(string $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
}