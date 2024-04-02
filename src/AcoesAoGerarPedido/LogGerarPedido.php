<?php

namespace Iago\DesignPattern\AcoesAoGerarPedido;

use Iago\DesignPattern\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo 'Gerando log do pedido' . PHP_EOL;
    }
}
