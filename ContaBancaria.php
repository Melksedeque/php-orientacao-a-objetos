<?php

declare(strict_types=1);

class ContaBancaria
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo(): string
    {
        return 'Seu saldo atual é de: R$' . $this->saldo;
    }

    public function depositar(float $valor): string
    {
        $this->saldo += $valor;
        return 'Depósito de R$' . $valor . ' realizado com sucesso!';
    }

    public function sacar(float $valor): string
    {
        $this->saldo -= $valor;
        return 'Saque de R$' . $valor . ' realizado com sucesso!';
    }
}

$conta = new ContaBancaria(
    'Banco do Povo',
    'Fulano de Tal',
    '1234',
    '123456-7',
    0,
);

echo $conta->obterSaldo()."<br><br>"; // 0

echo $conta->depositar(300.00)."<br><br>";

echo $conta->obterSaldo()."<br><br>"; // 300

echo $conta->sacar(150.00)."<br><br>";

echo $conta->obterSaldo()."<br><br>"; // 300

?>