<?php

include "ProdutoS.php";
include "Cliente.php";
include "Pedido.php";

$cliente = new Cliente("Ana");

$p1 = new ProdutoS("Camiseta", 50);
$p2 = new ProdutoS("Tênis", 200);
$p3 = new ProdutoS("Boné", 30);

$pedido = new Pedido($cliente);

$pedido->adicionarProduto($p1);
$pedido->adicionarProduto($p2);
$pedido->adicionarProduto($p3);

$pedido->resumo();

?>