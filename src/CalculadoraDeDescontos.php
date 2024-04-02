<?php

namespace Iago\DesignPattern;

use Iago\DesignPattern\Impostos\Imposto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new Descontos\DescontoMaisDe5Itens(
            new Descontos\DescontoMaisDe500Reais(
                new Descontos\SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
