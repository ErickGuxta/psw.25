<?php
class Animal {
    public string $nome;

    function __construct(string $nome) {
        $this->nome = $nome;
    }

    function fazerSom(): void {
        echo "Som genérico\n";
    }
}

class Cachorro extends Animal {
    function fazerSom(): void {
        echo "Au au!\n";
    }
}

class Gato extends Animal {
    function fazerSom(): void {
        echo "Miau!\n";
    }
}

// Testando as classes
$cachorro = new Cachorro("Rex");
$gato = new Gato("Mingau");

echo "Cachorro {$cachorro->nome} faz: ";
$cachorro->fazerSom();

echo "Gato {$gato->nome} faz: ";
$gato->fazerSom();
