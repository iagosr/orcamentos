<?php

namespace Iago\DesignPattern\NotaFiscal;

use DateTimeInterface;
use Iago\DesignPattern\ItemOrcamento;

abstract class ConstrutorNotaFiscal
{
    protected NotaFiscal $notaFiscal;

    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dataEmissao = new \DateTimeImmutable();
    }

    public function paraEmpresa(string $cnpjEmpresa, string $razaoSocial): self
    {
        $this->notaFiscal->cnpjEmpresa = $cnpjEmpresa;
        $this->notaFiscal->razaoSocialEmpresa = $razaoSocial;

        return $this;
    }

    public function comItem(ItemOrcamento $item): self
    {
        $this->notaFiscal->itens[] = $item;

        return $this;
    }

    public function comObservacoes(string $observacoes): self
    {
        $this->notaFiscal->observacoes = $observacoes;

        return $this;
    }

    public function comDataEmissao(DateTimeInterface $dataEmissao): self
    {
        $this->notaFiscal->dataEmissao = $dataEmissao;

        return $this;
    }

    abstract public function build(): NotaFiscal;
}
