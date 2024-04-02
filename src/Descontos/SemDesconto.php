<?php

namespace Iago\DesignPattern\Descontos;

use Iago\DesignPattern\Orcamento;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct($proximoDesconto = null);
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}
