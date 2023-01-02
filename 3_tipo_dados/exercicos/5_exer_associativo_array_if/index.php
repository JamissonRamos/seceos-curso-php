<?php

$pessoa = [

    "nome" => "Jonas",
    "altura" => 1.47,
    "idade" => 18
];

$nome = $pessoa["nome"];
$altura = $pessoa["altura"];
$idade = $pessoa["idade"];

if($idade >= 18 )
{
    echo "$nome, tem $idade anos, assim ele é maior de idade, e já tem uma altura de $altura";

}else
{
    echo "$nome, tem $idade anos, assim ele não é maior de idade, e já tem uma altura de $altura";
}