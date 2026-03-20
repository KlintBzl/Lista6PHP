<?php

 class Lampada{

private $status = "Desligada";

public function getStatus() {
    return $this->status;
}

public function setStatus($status){
    return $this->status = $status;
}

public function ligar(){
    if($this->status == "Desligada"){
        $this->setStatus("Ligada");
    }else{
        echo "A lâmpada já está ligada <br>";
    }
}
public function desligar(){
    if($this->status == "Ligada"){
        $this->setStatus("Desligada");
    }else{
        echo "A lâmpada já está desligada <br>";
    }
}

}


?>