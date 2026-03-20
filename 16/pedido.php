<?php

class Pedido {

    private $cliente;
    private $produtos = [];

    public function getCliente() {
        return $this->cliente;
    }

    public function setCleinte($cliente) {
        $this->cliente = $cliente;
    }

    public function getProdutos() {
        return $this->produtos;
    }

    public function setPreco($produtos) {
        $this->produtos = $produtos;
    }

    public function __construct($cliente) {
        $this->cliente = $cliente;
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

    public function resumo() {
        echo "Cliente: " . $this->cliente->nome . "<br>";
        echo "Produtos:<br>";

        foreach ($this->produtos as $p) {
            echo "- " . $p->nome . " (R$ " . $p->preco . ")<br>";
        }

        echo "Total: R$ " . $this->calcularTotal();
    }

}

?>