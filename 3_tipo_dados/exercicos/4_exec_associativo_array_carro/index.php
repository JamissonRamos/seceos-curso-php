<?php

$carro = [
    "cor" => ["banco", "preto", "marrom"], 
    "ano" => 2022, 
    "marca" => "FIAT"
];

echo "<pre>";

print_r($carro);

echo $carro["cor"][2];
echo "<br>";
echo $carro["ano"];
echo "<br>";
echo $carro["marca"];
echo "<br>";