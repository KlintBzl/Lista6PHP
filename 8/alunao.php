<?php

 class Aluninho{

public $nota;

public function verificarAprovacao(){
    if($this->nota >= 7){
        echo "Aprovado! <br>";
    }else{
        echo "Reprovado! <br>";
    }
}


}


?>