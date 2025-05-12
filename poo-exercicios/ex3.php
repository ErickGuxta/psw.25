<?php
// 3.Implemente uma classe chamada “Carro” com atributos para armazenar a marca, o modelo e a velocidade atual do carro. Adicione métodos para acelerar, frear e exibir a velocidade atual.
class Carro
{
    public $marca;
    public $modelo;
    public $velocidade_atual;


    function __construct($marca, $modelo, $velocidade_atual)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidade_atual = $velocidade_atual;
    }


    function acelerar()
    {
        echo "O CARRO ESTÁ ACELERANDO";
    }
    function frear()
    {
        echo "O CARRO ESTÁ FREANDO";
    }
    function mostrar_veloc()
    {
        echo "A VELOCIDADE ATUAL DO CARRO É " . $this->velocidade_atual . " Km/h";
    }
}


$carro = new Carro("Honda", "Civic type r", 120 );
$carro->acelerar();
echo PHP_EOL;
$carro->frear();
echo PHP_EOL;
$carro->mostrar_veloc();
?>