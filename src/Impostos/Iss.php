<?php

namespace Iago\DesignPattern\Impostos;

use Iago\DesignPattern\Orcamento;

class Iss extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
