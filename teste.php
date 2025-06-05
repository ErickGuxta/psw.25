<?php
class Animal {
    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function fazerSom() {
        echo "Som genérico";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "Au au!";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "Miau!";
    }
}

// Testando o polimorfismo
$cachorro = new Cachorro("Rex");
$gato = new Gato("Mingau");

echo "Cachorro: ";
$cachorro->fazerSom();
echo "\nGato: ";
$gato->fazerSom();
