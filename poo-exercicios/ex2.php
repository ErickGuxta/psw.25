<?php
// 2.Crie uma classe chamada “Triângulo” com atributos para armazenar os três lados do triângulo. Implemente métodos para verificar se é um triângulo válido e calcular sua área.

class Triangulo
{
    public $l1;
    public $l2;
    public $l3;

    function __construct($lado1, $lado2, $lado3)
    {
        $this->l1 = $lado1;
        $this->l2 = $lado2;
        $this->l3 = $lado3;
    }

    function validar()
    {

        if ($this->l1 <= 0 and $this->l2 <=0 and $this->l3 <= 0){
            return false;
        }

        if ((($this->l1 + $this->l2) > $this->l3)  and 
            (($this->l2 + $this->l3) > $this->l1) and
            (($this->l1 + $this->l3) > $this->l2)){

                return "É um triângulo válido";
        }
    }

    function area()
    {
        // Usando a formula de heron

        // semi-perimetro
        $p = ($this->l1 + $this->l2 + $this->l3) / 2;

        $area = sqrt($p * ($p-$this->l1)* ($p-$this->l2)* ($p-$this->l3));

        return "A área deve ser essa aqui(não sei se ta certo essa porra): " .  $area;
    }
}


$triangulo00 = new Triangulo(3, 4 ,5);

echo $triangulo00->validar();
echo PHP_EOL;
echo $triangulo00->area();
?>