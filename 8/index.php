<?php

include "alunao.php";

$a1 = new Aluninho();

$a1->nota = 5;
$a1 -> verificarAprovacao();
$a1->nota = 8;
$a1 -> verificarAprovacao();
$a1->nota = 1;
$a1 -> verificarAprovacao();


?>