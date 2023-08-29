<?php

class login
{

    private $email;
    private $senha;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($e)
    {
        $emailFilter = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $emailFilter;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($s)
    {
        $this->senha = $s;
    }

    public function logar()
    {
        if ($this->email == "teste@teste.com" and $this->senha == "123456") {
            echo "login feito com sucesso";
        } else {
            echo "dados errados";
        }
    }
}


$logar = new login;

$logar->setEmail("teste()/@teste.com");
$logar->setSenha("123456");

$logar->logar();
echo "</br>";
echo $logar->getEmail();
