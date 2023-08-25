<?php


class pessoa
{

    public $nome;
    public $idade;

    public function Anos()
    {

        echo $this->nome . " tem " . $this->idade . " anos de idade ";
    }
}


$beto = new pessoa;

$beto->nome = "roberto cabral";
$beto->idade = 24;

$beto->Anos();
