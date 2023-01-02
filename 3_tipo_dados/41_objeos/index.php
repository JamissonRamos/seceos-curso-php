<?php

class Pessoa {
    
    function falar() {

        echo "Olá pessoal!";
    }
}

$jamisson = new Pessoa;

$jamisson->nome="Lucia";

echo $jamisson->nome;

echo "<br>";

$jamisson->falar();