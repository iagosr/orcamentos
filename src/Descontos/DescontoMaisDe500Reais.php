<?php

namespace Iago\DesignPattern\Descontos;

use Iago\DesignPattern\Orcamento;

class DescontoMaisDe500Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
