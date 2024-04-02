<?php

namespace Iago\DesignPattern\Impostos;

use Iago\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}
