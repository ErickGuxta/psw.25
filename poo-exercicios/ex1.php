<?php
// 1.Crie uma classe chamada Pessoa com os atributos nome e idade. Implemente um método apresentar() que exibe o nome e a idade da pessoa. Instancie dois objetos da classe e chame o método apresentar() para ambos.
class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function apresentar()
    {
        echo $this->nome .  " possui " . $this->idade . " anos";
    }
}

$pessoa00 = new Pessoa("Erick", 17);
$pessoa01 = new Pessoa("Kaique", 29);


$pessoa00->apresentar();
echo PHP_EOL;
$pessoa01->apresentar();



?>