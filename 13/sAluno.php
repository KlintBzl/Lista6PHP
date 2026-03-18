<?php

 class Saluno{

public $nome;
public $nota1;
public $nota2;

public function media(){
    return ($this->nota1 + $this->nota2) / 2;
}

public function situacao(){
    echo "Nome do estudante: " . $this->nome . "<br>";
    echo "Média do estudante: " . $this->media() . "<br>";
}



}


?>