<?php

namespace Iago\DesignPattern\AcoesAoGerarPedido;

use Iago\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo 'Enviando pedido por e-mail' . PHP_EOL;
    }
}
