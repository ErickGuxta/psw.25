<?php
// 6.Implemente uma classe chamada “Produto” que possua atributos para armazenar o nome, o preço e a quantidade em estoque. Adicione métodos para calcular o valor total em estoque e verificar se o produto está disponível.

class Produto
{
    private string $nome;
    private float $preco;
    private int $quantidade;

    public function __construct(string $nome, float $preco, int $quantidade)
    {
        if ($preco < 0) {
            throw new InvalidArgumentException("O preço não pode ser negativo");
        }
        if ($quantidade < 0) {
            throw new InvalidArgumentException("A quantidade não pode ser negativa");
        }

        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function calcularValorTotal(): float
    {
        return $this->preco * $this->quantidade;
    }

    public function estaDisponivel(): bool
    {
        return $this->quantidade > 0;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function __toString(): string
    {
        return "Produto: {$this->nome} (Preço: R$ " . number_format($this->preco, 2) . ", Quantidade: {$this->quantidade})";
    }
}

$produto = new Produto("Notebook", 3500.00, 5);

echo $produto . PHP_EOL;
echo "Valor total em estoque: R$ " . number_format($produto->calcularValorTotal(), 2) . PHP_EOL;
echo "Disponível: " . ($produto->estaDisponivel() ? "Sim" : "Não") . PHP_EOL;

?>