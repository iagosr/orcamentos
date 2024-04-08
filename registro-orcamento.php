<?php

use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Http\ReactPHPHttpAdapter;
use Alura\DesignPattern\RegistroOrcamento;
use Iago\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter);
$registroOrcamento->registrar(new Orcamento());
