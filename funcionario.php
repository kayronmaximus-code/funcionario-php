<?php

abstract class Funcionario
{
    protected string $nome;
    protected float $salario;

    public function __construct(string $nome, float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function exibirDados(): void
    {
        echo "Nome: {$this->nome}" . PHP_EOL;
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . PHP_EOL;
    }

    abstract public function calcularBonus(): float;
}

class Gerente extends Funcionario
{
    // Bônus de 20% do salário
    public function calcularBonus(): float
    {
        return $this->salario * 0.20;
    }
}

class Desenvolvedor extends Funcionario
{
    // Bônus de 10% do salário
    public function calcularBonus(): float
    {
        return $this->salario * 0.10;
    }
}

// Criação dos objetos
$gerente = new Gerente("Carlos", 5000);
$desenvolvedor = new Desenvolvedor("Ana", 3500);

// Exibição dos dados e bônus
echo "=== Gerente ===" . PHP_EOL;
$gerente->exibirDados();
echo "Bônus: R$ " . number_format($gerente->calcularBonus(), 2, ',', '.') . PHP_EOL;

echo PHP_EOL . "=== Desenvolvedor ===" . PHP_EOL;
$desenvolvedor->exibirDados();
echo "Bônus: R$ " . number_format($desenvolvedor->calcularBonus(), 2, ',', '.') . PHP_EOL;
