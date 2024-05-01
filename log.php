<?php

use Iago\DesignPattern\Log\FileLogManager;
use Iago\DesignPattern\Log\StdoutLogManager;

require 'vendor/autoload.php';

$logManager = new FileLogManager(__DIR__ . '/src/Log/log.txt');
$logManager->log('info', 'Testando log info');
