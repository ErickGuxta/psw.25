<?php
class Funcionario
{
    public string $nome ;
    private float $salario;

    function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }


    function exibir_dados(): string
    {
        return "Nome: {$this->nome}, Salário: R$ {$this->salario}";
    }

    function get_salario(): float{
        return $this->salario;
    }

}

class Gerente extends Funcionario
{
    public string $departamento;

    function __construct($nome, $salario, $departamento){
        parent::__construct($nome, $salario);
        $this->departamento = $departamento;
    }

    function exibir_dados(): string
    {
        return parent::exibir_dados() . ", Departamento: {$this->departamento}";
    }

}

class Programador extends Funcionario{
    public string $linguagem;

    function __construct($nome, $salario, $linguagem){
        parent::__construct($nome, $salario);
        $this->linguagem = $linguagem;
    }

    function exibir_dados(): string
    {
        return parent::exibir_dados() . ", Linguagem: {$this->linguagem}";
    }

}

$funcionario = new Funcionario("João", 5000);
echo $funcionario->exibir_dados() . "\n";

$gerente = new Gerente("Maria", 8000, "Vendas");
echo $gerente->exibir_dados() . "\n";

$programador = new Programador("Pedro", 6000, "PHP");
echo $programador->exibir_dados() . "\n";


?>