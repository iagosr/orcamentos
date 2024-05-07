<?php

namespace Iago\DesignPattern\NotaFiscal;

use DateTimeInterface;

class NotaFiscal
{
    public string $cnpjEmpresa;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public DateTimeInterface $dataEmissao;
    public float $valorImpostos;

    public function valor(): float
    {
        return array_reduce($this->itens, fn ($valorAcumulado, $item) => $valorAcumulado + $item->valor(), 0);
    }

    public function clonar(): NotaFiscal
    {
        $clone = new NotaFiscal();
        $clone->cnpjEmpresa = $this->cnpjEmpresa;
        $clone->razaoSocialEmpresa = $this->razaoSocialEmpresa;
        $clone->itens = $this->itens;
        $clone->observacoes = $this->observacoes;
        $clone->dataEmissao = $this->dataEmissao;
        $clone->valorImpostos = $this->valorImpostos;

        return $clone;
    }
}
