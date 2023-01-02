<?php
$a = 10;
$b = 10;
$c = 12;


//Comparação Falsa
if (5 === 6 )
{
    echo "1 Comparação Verdadeira <br>";

} else {
    
    echo "1 Comparação Falsa <br>";
}

if ($a === $c )
{
    echo "2 Comparação Verdadeira <br>";

} else {
    
    echo "2 Comparação Falsa <br>";
}

if ($a === "10" )
{
    echo "3 Comparação Verdadeira <br>";

} else {
    
    echo "3 Comparação Falsa <br>";
}

//Comparação Verdadeira
if (5 === 5 )
{
    echo "4 Comparação Verdadeira <br>";

} else {
    
    echo "4 Comparação Falsa <br>";
}

if ($a === $b )
{
    echo "5 Comparação Verdadeira <br>";

} else {
    
    echo "5 Comparação Falsa <br>";
}

if ($a === 10 )
{
    echo "6 Comparação Verdadeira <br>";

} else {
    
    echo "6 Comparação Falsa <br>";
}

//output
// 1 Comparação Falsa
// 2 Comparação Falsa
// 3 Comparação Falsa
// 4 Comparação Verdadeira
// 5 Comparação Verdadeira
// 6 Comparação Verdadeira
