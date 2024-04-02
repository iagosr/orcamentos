<?php

use Iago\DesignPattern\GerarPedido;
use Iago\DesignPattern\GerarPedidoHandler;

require_once 'vendor/autoload.php';


$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAposGerarPedido(new \Iago\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAposGerarPedido(new \Iago\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionarAcaoAposGerarPedido(new \Iago\DesignPattern\AcoesAoGerarPedido\LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);
