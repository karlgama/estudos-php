<?php


namespace Alura\Banco\Service;


use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function logar(Diretor $diretor, string $senha): bool
    {
        if($diretor->podeAutenticar($senha)){
            echo "Login realizado com sucesso!". PHP_EOL;
            return true;
        }
        echo "Senha incorreta" . PHP_EOL;
        return false;
    }
}