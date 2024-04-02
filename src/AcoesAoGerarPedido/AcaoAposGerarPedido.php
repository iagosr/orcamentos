<?php

namespace Iago\DesignPattern\AcoesAoGerarPedido;

use Iago\DesignPattern\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}
