<?php

 class Produto{

private $preco;

public function setPreco($preco){
    if ($preco < 0) {
            echo "Erro: preço não pode ser negativo! <br>";
        } else {
            $this->preco = $preco;
        }
}

public function getPreco(){
    return $this->preco;
}

}


?>

