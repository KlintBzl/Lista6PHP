<?php

class Usuario {

    public $email;
    public $senha;

    public function __construct($email, $senha) {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function login($email, $senha) {
        if ($this->email == $email && $this->senha == $senha) {
            echo "Login realizado com sucesso! <br>";
        } else {
            echo "Email ou senha inválidos! <br>";
        }
    }

}

?>