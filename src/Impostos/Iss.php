<?php

namespace Iago\DesignPattern\Impostos;

use Iago\DesignPattern\Orcamento;

class Iss
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
