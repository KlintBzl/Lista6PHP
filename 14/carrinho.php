<?php

class Carrinho{

private $produtos = [];

    public function getProdutos() {
        return $this->produtos;
    }

    public function setProdutos($produtos) {
        $this->produtos = $produtos;
    }

    public function adicionarProduto($produto) {
        $this->produtos[] = $produto;
    }

public function calcularTotal() {
        $total = 0;

        foreach ($this->produtos as $p) {
            $total += $p->preco;
        }

        return $total;
    }
}


?>