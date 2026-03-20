<?php

 class Saluno{

private $nome;
private $nota1;
private $nota2;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNota1() {
        return $this->nota1;
    }

    public function setNota1($nota1) {
        $this->nota1 = $nota1;
    }
    public function getNota2() {
        return $this->nota2;
    }

    public function setNota2($nota2) {
        $this->nota2 = $nota2;
    }

public function media(){
    return ($this->nota1 + $this->nota2) / 2;
}

public function situacao(){
    echo "Nome do estudante: " . $this->nome . "<br>";
    echo "Média do estudante: " . $this->media() . "<br>";
}



}


?>