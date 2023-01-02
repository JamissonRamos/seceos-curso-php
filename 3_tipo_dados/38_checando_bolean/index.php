<?php

$a = true;

if(is_bool($a)){

    echo "è boleando 1";
}
echo "<br>";

if(is_bool(true)){

    echo "è boleando 2";
}
echo "<br>";

//A função não vai reconhecer os numero de 0 ou 1 como boolean, mais os números são boolean
if(is_bool(1)){

    echo "è boleando 3";
}
echo "<br>";