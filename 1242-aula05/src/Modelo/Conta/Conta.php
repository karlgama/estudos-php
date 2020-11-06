<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private Titular $titular;
    private float $saldo = 0;
    private static $numeDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->saldo = 0;
        $this->titular = $titular;

        self::$numeDeContas +=1;
    }

    public function sacar(float $valor)
    {
        if($valor > $this->saldo)
        {
            return 'Saldo indisponivel';
        }
        $this->saldo -= $valor;
        return $this->saldo;
        
    }

    public function depositar(float $valor):void
    {
        if($valor > 0){
            $this->saldo+=$valor;
            return;
        }
        echo 'Não é possível depositar um valor negativo';
        return;
        
    }

    public function getSaldo():float
    {
        return $this->saldo;
    }

    public static function getNumeroContas():int
    {
        return self::$numeDeContas;
    }

    public function __destruct()
    {
        echo "destruido";
    }
}