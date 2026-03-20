<?php

include "alunao.php";

$a1 = new Aluninho();

$a1->setNota(5);
$a1 -> verificarAprovacao();
$a1->setNota(8);
$a1 -> verificarAprovacao();
$a1->setNota(1);
$a1 -> verificarAprovacao();


?>