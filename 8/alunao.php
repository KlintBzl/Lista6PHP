<?php

 class Aluninho{

private $nota;

public function getNota() {
        return $this->nota;
    }

    public function setNota($nota) {
        $this->nota = $nota;
    }

public function verificarAprovacao(){
    if($this->nota >= 7){
        echo "Aprovado! <br>";
    }else{
        echo "Reprovado! <br>";
    }
}


}


?>