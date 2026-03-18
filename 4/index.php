<?php

include "carro.php";

$c1 = new Carro();

$c1 -> marca = "wolksvagem";
$c1 -> acelerar();
echo "<br> Velocidade atual: " . $c1->velocidade;
$c1 -> acelerar();
echo "<br> Velocidade atual: " . $c1->velocidade;
$c1 -> acelerar();
echo "<br> Velocidade atual: " . $c1->velocidade;
$c1 -> acelerar();
echo "<br> Velocidade atual: " . $c1->velocidade;
$c1 -> acelerar();
echo "<br> Velocidade atual: " . $c1->velocidade;


?>