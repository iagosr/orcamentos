<?php

namespace Iago\DesignPattern\EstadosOrcamentos;

use Iago\DesignPattern\Orcamento;

abstract class EstadoOrcamento
{
    /**
     * Calcula o desconto extra do orçamento.
     *
     * @param Orcamento $orcamento O orçamento a ser calculado.
     * @return float O valor do desconto extra.
     * @throws \Exception Se ocorrer algum erro no cálculo do desconto.
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento)
    {
        throw new \DomainException('Orçamento não pode ser aprovado');
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new \DomainException('Orçamento não pode ser reprovado');
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new \DomainException('Orçamento não pode ser finalizado');
    }
}
