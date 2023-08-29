<?php

class Animal
{
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function emitirSom()
    {
        return "O animal emite um som.";
    }
}

class Cachorro extends Animal
{
    public function emitirSom()
    {
        return "O {$this->nome} late.";
    }
}

class Gato extends Animal
{
    public function emitirSom()
    {
        return "O {$this->nome} mia.";
    }
}

$cachorro = new Cachorro("Rex");
$gato = new Gato("Whiskers");

echo $cachorro->emitirSom() . "<br>";
echo $gato->emitirSom();
