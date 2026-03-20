<?php

 class Pessoa{

private $nome;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

public function apresentar(){
    echo "Olá, meu nome é " . $this->getNome();
}

}


?>