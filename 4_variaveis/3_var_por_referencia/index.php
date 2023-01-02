<?php

$nome = "Jamisson";
$idade = 28;

echo $nome;
echo "<br>";
echo $idade;
echo "<br>";

echo "Fazendo referencia";
echo "<br>";
$meuNome =& $nome;
$minhaIdade =& $idade;

echo $meuNome; // Jamisson
echo " = meuNome <br> ";
echo $minhaIdade; // 28
echo " = minhaIdade <br> ";

