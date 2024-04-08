<?php

require 'vendor/autoload.php';

$orcamentoZip = new Iago\DesignPattern\Relatorio\OrcamentoZip();
$orcamento = new Iago\DesignPattern\Orcamento();
$orcamento->valor = 500;

$orcamentoZip->exportar($orcamento);
