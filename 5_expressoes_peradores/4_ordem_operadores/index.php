<?php

// Ordem dos operadores 
echo 5 + 2 * 2; // 9
echo "<br>";
echo (5 + 2) * 2; // 17
echo "<br>"; 

//Ordem com Variáveis
$a = 5;
$b = 2;
$c = 2;

echo $a + $b * $c; // 9
echo "<br>";
echo ($a + $b) * $c; // 17
echo "<br>"; 

//encapsulamento das variáveis
$a = 5;
$b = 2;
$c = 2;

$d = $a + $b * $c;

echo $d; // 9