<?php

namespace Iago\DesignPattern\EstadosOrcamentos;

use Iago\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Orçamentos finalizados não podem ter descontos');
    }
}
