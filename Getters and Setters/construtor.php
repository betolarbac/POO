<?php


class dados
{

    private $email;
    private $senha;


    public function __construct($email, $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function dadosSenha()
    {
        return "seu email: {$this->email} sua senha: {$this->senha}";
    }
}
