<?php

namespace Iago\DesignPattern\Venda;

use DateTimeInterface;

class VendaServico extends Venda
{
    private string $nomePrestador;

    public function __construct(DateTimeInterface $dataVenda, string $nomePrestador)
    {
        parent::__construct($dataVenda);
        $this->nomePrestador = $nomePrestador;
    }
}
