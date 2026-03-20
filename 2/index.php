<?php

include "produto.php";

$p1 = new Produtinho();

$p1 -> setNome("Laptop");
$p1 -> setPreco(3500);

echo "Produto: " . $p1->getNome() . " - R$ " . $p1->getPreco();

?>