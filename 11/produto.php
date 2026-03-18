<?php

 class Productos{

public $nome;
public $preco;

public function aplicarDesconto($percentual) {
        $desconto = ($this->preco * $percentual) / 100;
        $this->preco -= $desconto;
    }
}


?>