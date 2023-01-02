<?php

$a = "Uma string";
$n = 28.5;

if(is_float($a)){
    
    echo "1 É um float";
}

if(is_float($n)){
    
    echo "2 É um float";
}

echo "<br>";

echo is_float ($n);

echo "<br>";

echo is_float ($a);


?>