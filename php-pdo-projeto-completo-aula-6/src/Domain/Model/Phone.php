<?php


namespace Alura\Pdo\Domain\Model;


class Phone
{
    private ?int $id;
    private string $ddd;
    private string $number;

    public function __construct(?int $id, string $ddd, string $number)
    {
        $this->id = $id;
        $this->ddd = $ddd;
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function formatedPhone(): string
    {
        return "($this->ddd) $this->number";
    }
}