<?php

 class Aluno{

private $nome;
private $nota;

public function setNome($nome){
    return $this->nome = $nome;
}
public function setNota($nota){
    return $this->nota = $nota;
}
public function getNome(){
    return $this->nome;
}
public function getNota(){
    return $this->nota;
}

}


?>