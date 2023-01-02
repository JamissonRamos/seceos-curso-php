<?php

//Comparação Falsa
$a = 10;
$b = 10;
$c = 12;

if (5 == 6 )
{
    echo "1 Comparação Verdadeira <br>";

} else {
    
    echo "1 Comparação Falsa <br>";
}

if ($a == $c )
{
    echo "2 Comparação Verdadeira <br>";

} else {
    
    echo "2 Comparação Falsa <br>";
}

//Comparação Verdadeira
if (5 == 5 )
{
    echo "3 Comparação Verdadeira <br>";a

} else {
    
    echo "3 Comparação Falsa <br>";
}

if ($a == $b )
{
    echo "4 Comparação Verdadeira <br>";

} else {
    
    echo "4 Comparação Falsa <br>";
}

//output
// 1 Comparação Falsa
// 2 Comparação Falsa
// 3 Comparação Verdadeira
// 4 Comparação Verdadeira
