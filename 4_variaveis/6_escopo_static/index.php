
<?php

function teste(){
    $a = 10;

    echo $a++; //10 * 10 * 10
    echo "<br>";
}

teste();
teste();
teste();

function testeStatic(){
   static $a = 10;

    echo $a++; //10 * 11 * 12
    echo "<br>";
}

testeStatic();
testeStatic();
testeStatic();