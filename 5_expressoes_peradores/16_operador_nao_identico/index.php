<?php

$a = 10;

if(5 !== 5 )        echo"1 Valor é diferente <br>"; // False
if(5 !== 6 )        echo"2 Valor é diferente <br>"; // True
if($a !== 6 )       echo"3 Valor é diferente <br>"; // True
if($a !== 10 )      echo"4 Valor é diferente <br>"; // False
if($a !== "10" )    echo"5 Valor é diferente <br>"; // True

//output
// 2 Valor é diferente
// 3 Valor é diferente
// 5 Valor é diferente