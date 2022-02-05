<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;

    /**
     * @param string $cpfTitular
     * @param string $nomeTitular
     * @param float $saldo
     */
    public function __construct(string $cpfTitular, string $nomeTitular, float $saldo)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = $saldo;
    }

    /**
     * @return string
     */
    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    /**
     * @param string $cpfTitular
     */
    public function setCpfTitular(string $cpfTitular): void
    {
        $this->cpfTitular = $cpfTitular;
    }

    /**
     * @return string
     */
    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    /**
     * @param string $nomeTitular
     */
    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    /**
     * @return float
     */
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * @param float $saldo
     */
    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return "CPF Titular : $this->cpfTitular, Nome Titular : $this->nomeTitular, Saldo : $this->saldo" . PHP_EOL;
    }

}
