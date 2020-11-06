<?php


interface Autenticavel
{
    public function login(string $senha): bool;
}