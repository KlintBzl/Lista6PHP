<?php

 class Carro{

public $marca;
public $velocidade;

public function acelerar(){
    $this->velocidade= $this->velocidade + 10;
}

}


?>