<?php

use Iago\DesignPattern\ItemOrcamento;
use Iago\DesignPattern\NotaFiscal\ConstrutorNotaFiscal;
use Iago\DesignPattern\NotaFiscal\ConstrutorNotaFiscalProduto;

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalProduto;

$item1 = new ItemOrcamento();
$item1->valor = 300;
$item2 = new ItemOrcamento();
$item2->valor = 500;

$notaFiscal = $builder->paraEmpresa('123456789', 'Empresa de Tecnologia')
    ->comItem($item1)
    ->comItem($item2)
    ->comObservacoes('Esta nota fiscal foi construída com um Builder.')
    ->comDataEmissao(new DateTimeImmutable())
    ->build();

$notaFiscal2 = clone $notaFiscal;
$notaFiscal2->observacoes = 'Esta nota fiscal foi clonada.';

var_dump($notaFiscal, $notaFiscal2);
