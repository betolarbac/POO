<?php

abstract class Veiculo
{
    protected $marca;
    protected $modelo;
    protected $ano;

    public function __construct($marca, $modelo, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    abstract public function acelerar();
    abstract public function frear();

    public function exibirDetalhes()
    {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Ano: {$this->ano}";
    }
}

class Carro extends Veiculo
{
    public function acelerar()
    {
        return "Carro acelerando...";
    }

    public function frear()
    {
        return "Carro freando...";
    }
}

class Moto extends Veiculo
{
    public function acelerar()
    {
        return "Moto acelerando...";
    }

    public function frear()
    {
        return "Moto freando...";
    }
}

$carro = new Carro("Toyota", "Corolla", 2023);
$moto = new Moto("Honda", "CBR", 2022);

echo $carro->exibirDetalhes() . "<br>";
echo $carro->acelerar() . "<br>";
echo $carro->frear() . "<br>";

echo $moto->exibirDetalhes() . "<br>";
echo $moto->acelerar() . "<br>";
echo $moto->frear() . "<br>";
