<?php

include "lampada.php";

$l1 = new Lampada();

echo $l1->status . "<br>";
$l1 -> ligar();
echo $l1->status . "<br>";
$l1 -> desligar();
echo $l1->status . "<br>";
$l1 -> desligar();
echo $l1->status . "<br>";
$l1 -> ligar();
echo $l1->status . "<br>";
$l1 -> desligar();
echo $l1->status . "<br>";
$l1 -> ligar();
echo $l1->status . "<br>";
$l1 -> ligar();
echo $l1->status . "<br>";


?>