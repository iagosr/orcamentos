<?php

namespace Iago\DesignPattern\EstadosOrcamentos;

use Iago\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Orçamentos reprovados não podem ter descontos');
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
