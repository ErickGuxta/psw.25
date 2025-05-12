<?php
// Implemente uma classe chamada “Aluno” que possua atributos para armazenar o nome, a matrícula e as notas de um aluno. Adicione métodos para calcular a média das notas e verificar a situação do aluno (aprovado ou reprovado).

class Aluno
{
    private string $nome;
    private string $matricula;
    private array $notas;

    public function __construct(string $nome, string $matricula)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->notas = [];
    }

    public function adicionarNota(float $nota): void
    {
        if ($nota < 0 || $nota > 10) {
            throw new InvalidArgumentException("A nota deve estar entre 0 e 10");
        }
        $this->notas[] = $nota;
    }

    public function calcularMedia(): float
    {
        if (empty($this->notas)) {
            throw new RuntimeException("Não há notas cadastradas");
        }
        return array_sum($this->notas) / count($this->notas);
    }

    public function verificarSituacao(): string
    {
        $media = $this->calcularMedia();
        return $media >= 6.0 ? "Aprovado" : "Reprovado";
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function getNotas(): array
    {
        return $this->notas;
    }

    public function __toString(): string
    {
        return "Aluno: {$this->nome} (Matrícula: {$this->matricula})";
    }
}

// Exemplo de uso
$aluno = new Aluno("João Silva", "2024001");

$aluno->adicionarNota(7.5);
$aluno->adicionarNota(8.0);
$aluno->adicionarNota(6.5);

echo $aluno . PHP_EOL;
echo "Média: " . number_format($aluno->calcularMedia(), 2) . PHP_EOL;
echo "Situação: " . $aluno->verificarSituacao() . PHP_EOL;

?>