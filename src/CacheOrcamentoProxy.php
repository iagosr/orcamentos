<?php

namespace Iago\DesignPattern;

class CacheOrcamentoProxy extends Orcamento
{

    private float $valorCache = 0.0;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function addItem(Orcavel $item)
    {
        throw new \DomainException('Não é possível adicionar item a um orçamento cacheado');
    }

    public function valor(): float
    {
        if ($this->valorCache === 0.0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return $this->valorCache;
    }
}
