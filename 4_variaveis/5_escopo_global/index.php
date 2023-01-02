
<?php

$teste = "asd";

echo "teste global 1 $teste";
echo "<br>";

if (true){

    $teste = "dsa";

    echo "teste if $teste";
    echo "<br>";
}
echo "teste global 2 $teste";
echo "<br>";

function testando () {

    global $teste;

    $teste = 200;

    echo "teste dentro da funcao local $teste";
    echo "<br>";
}

testando();


echo "teste global 3 $teste";
echo "<br>";