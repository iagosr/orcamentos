<?php

use Iago\DesignPattern\ItemOrcamento;
use Iago\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

$orcamento = new Orcamento();
$item1 = new ItemOrcamento();
$item1->valor = 300;
$item2 = new ItemOrcamento();
$item2->valor = 500;

$orcamento->addItem($item1)->addItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new ItemOrcamento();
$item3->valor = 150;
$orcamentoAntigo->addItem($item3);

$orcamentoMaisAntigoAinda = new Orcamento();
$item4 = new ItemOrcamento();
$item4->valor = 50;
$item5 = new ItemOrcamento();
$item5->valor = 100;
$orcamentoMaisAntigoAinda->addItem($item4)->addItem($item5);

$orcamentoAntigo->addItem($orcamentoMaisAntigoAinda);

$orcamento->addItem($orcamentoAntigo);

$proxyCache = new \Iago\DesignPattern\CacheOrcamentoProxy($orcamento);

echo $proxyCache->valor();
