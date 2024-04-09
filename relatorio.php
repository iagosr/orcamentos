<?php

use Iago\DesignPattern\Orcamento;
use Iago\DesignPattern\Relatorio\ArquivoXmlExportado;
use Iago\DesignPattern\Relatorio\OrcamentoExportado;

require 'vendor/autoload.php';

$orcamento = new Orcamento;
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoXml = new ArquivoXmlExportado('orcamento');

echo $orcamentoExportadoXml->salvar($orcamentoExportado);
