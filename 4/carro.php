<?php

 class Carro{

private $marca;
private $velocidade;

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    // Getter e Setter da velocidade
    public function getVelocidade() {
        return $this->velocidade;
    }

    public function setVelocidade($velocidade) {
        $this->velocidade = $velocidade;
    }

public function acelerar(){
    $this->velocidade= $this->velocidade + 10;
}

}


?>