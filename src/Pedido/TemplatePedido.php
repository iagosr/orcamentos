<?php

namespace Iago\DesignPattern\Pedido;


class TemplatePedido
{
    private string $nomeCliente;
    private \DateTimeInterface $dataFinalizacao;

    public function __construct(string $nomeCliente, \DateTimeInterface $dataFinalizacao)
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFinalizacao = $dataFinalizacao;
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function getDataFinalizacao(): \DateTimeInterface
    {
        return $this->dataFinalizacao;
    }
}
