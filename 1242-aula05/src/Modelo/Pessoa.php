<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    private string $nome;
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular)<5){
            echo 'Nome inválido';
            exit();
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    protected function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }




}