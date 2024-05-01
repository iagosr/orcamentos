<?php

use Iago\DesignPattern\Venda\VendaProdutoFactory;
use Iago\DesignPattern\Venda\VendaServicoFactory;

require 'vendor/autoload.php';

$fabricaVenda = new VendaProdutoFactory(1000);
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);
