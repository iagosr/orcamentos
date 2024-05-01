<?php

namespace Iago\DesignPattern\Log;

abstract class LogManager
{

    /**
     * @param string $severidade
     * @param string $mensagem
     */
    public function log(string $severidade, string $mensagem): void
    {
        $logWritter = $this->criarLogWritter();
        $dataHoje = date('d/m/Y');
        $mensagemFormatada = "[$dataHoje][$severidade]: $mensagem";
        $logWritter->escreve($mensagemFormatada);
    }

    abstract public function criarLogWritter(): Logwriter;
}
