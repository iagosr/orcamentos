<?php

use Iago\DesignPattern\Orcamento;
use Iago\DesignPattern\Pedido\Pedido;
use Iago\DesignPattern\Pedido\TemplatePedido;

require 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new \Iago\DesignPattern\Pedido\CriadorDePedido;

for ($i = 0; $i < 10000; $i++) {
    $orcamento = new Orcamento();
    $pedido = $criadorPedido->criaPedido('Iago', date('Y-m-d'), $orcamento);

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage() . PHP_EOL;
