<?php

$nome = null;


if(is_null($nome))
{
    echo "Valor é null";
}

$nome = "Jamisosn";

echo "<br>";

if(!is_null($nome))
{
    echo "Valor não é null: $nome";
}

