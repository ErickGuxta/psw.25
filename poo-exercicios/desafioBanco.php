<?php
// Crie uma classe ContaBancaria com os atributos titular e saldo. Implemente os métodos depositar($valor) e sacar($valor). O saque só deve ocorrer se houver saldo suficiente. Crie uma conta, deposite R$500 e tente sacar R$600 e depois R$400. 

class ContaBancaria 
{
    private string $titular;
    private float $saldo;

    function __construct(string $titular, float $saldo = 0)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    function depositar(float $valor): string
    {

        if ($valor <= 0) {
            return "Olá {$this->titular}, não foi possível realizar o depósito. Coloque um valor válido!.";
        } else{
            $this->saldo += $valor;

            return "Olá, {$this->titular}, depósito de R$ " . number_format($valor, 2, ',' , '.') . 
            " foi realizado com sucesso. Seu saldo atual é de: R$ " . number_format($this->saldo, 2, ',', '.');
        }

    }

    function sacar(float $valor): string
    {
        if ($valor > $this->saldo) {
            return "Não há saldo disponível. Seu saldo bancário é de: " . $this->saldo;
        } else{
            $this->saldo -= $valor;
            return "Saque no valor de " .$valor . " realizado com sucesso! Seu saldo bancário é de: " . $this->saldo;
        }
    
    }
    function getTitular(): string
    {
        return $this->titular;
    }
    function getSaldo(): float
    {
        return $this->saldo;
    }
}


$conta = new ContaBancaria("Erick", 0);

echo $conta->depositar(500) .PHP_EOL;
echo $conta->sacar(600).PHP_EOL;
echo $conta->sacar(400).PHP_EOL;

?>