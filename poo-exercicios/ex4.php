<?php
// 3.Implemente uma classe chamada “Carro” com atributos para armazenar a marca, o modelo e a velocidade atual do carro. Adicione métodos para acelerar, frear e exibir a velocidade atual.
class Retangulo
{
    private float $largura;
    private float $altura;

    public function __construct(float $altura, float $largura)
    {
        if($largura <= 0 || $altura <= 0) {
            throw new InvalidArgumentException("Deve ser positivo aí, Tio");
        }

        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function getLargura(): float
    {
        return $this->largura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function calcularArea(): float 
    {
        return $this->largura * $this->altura;
    }
    
    public function calcularPerimetro(): float 
    {
        return 2 * ($this->largura + $this->altura);
    }

    public function __toString(): string
    {
        return "Retângulo {$this->largura}x{$this->altura}";
    }
}

$retangulo = new Retangulo(5.0, 3.0);
    
echo $retangulo . PHP_EOL;
echo "Área: " . $retangulo->calcularArea() . PHP_EOL;
echo "Perímetro: " . $retangulo->calcularPerimetro() . PHP_EOL;
?>