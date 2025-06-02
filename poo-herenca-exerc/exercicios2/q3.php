<?php
class Produto {
    public string $nome;
    public float $preco;

    function __construct(string $nome, float $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    function exibirProduto(): string {
        return "Nome: {$this->nome}, Preço: R$ {$this->preco}";
    }
}

class Livro extends Produto {
    public string $autor;

    function __construct(string $nome, float $preco, string $autor) {
        parent::__construct($nome, $preco);
        $this->autor = $autor;
    }

    function exibirProduto(): string {
        return parent::exibirProduto() . ", Autor: {$this->autor}";
    }
}

class DVD extends Produto {
    public int $duracao; // duração em minutos

    function __construct(string $nome, float $preco, int $duracao) {
        parent::__construct($nome, $preco);
        $this->duracao = $duracao;
    }

    function exibirProduto(): string {
        return parent::exibirProduto() . ", Duração: {$this->duracao} minutos";
    }
}

// Testando as classes
$livro = new Livro("O Senhor dos Anéis", 89.90, "J.R.R. Tolkien");
$dvd = new DVD("Matrix", 49.90, 136);

echo $livro->exibirProduto() . "\n";
echo $dvd->exibirProduto() . "\n";
