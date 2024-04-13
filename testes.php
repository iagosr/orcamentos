<?php

use Iago\DesignPattern\CalculadoraDeDescontos;
use Iago\DesignPattern\CalculadoraDeImpostos;
use Iago\DesignPattern\Impostos\Icms;
use Iago\DesignPattern\Orcamento;

require 'vendor/autoload.php';


$calculadora = new CalculadoraDeImpostos;
$orcamento = new Orcamento;
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms);


/*
$calculadora = new CalculadoraDeDescontos;
$orcamento = new Orcamento;
$orcamento->valor = 200;
$orcamento->quantidadeItens = 7;

echo $calculadora->calculaDescontos($orcamento);
*/