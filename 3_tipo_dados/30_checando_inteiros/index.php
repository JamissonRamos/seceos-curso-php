<?php

if(is_int(5)){

    echo "1- esse valor é inteiro";
}

if(is_int("valor em texto")){

    echo "2- esse valor é inteiro";
}

echo '<br>';

$n = 8;

if(is_int($n)){
    
    echo "3- esse valor é inteiro";
}

echo '<br>';
echo is_int(1);


