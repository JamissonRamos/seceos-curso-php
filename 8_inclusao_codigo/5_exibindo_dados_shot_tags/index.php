
<?php

    $id = 10;
    $nome = "Jamisson";
    $sobrenome = "Lira Ramos";

    $titulo = ["Cadastro", "Edição"];

?>

<h1> 
    <?php 
        echo $id !== 0 ?   $titulo[1] :  $titulo[0];
    ?>

</h1>


<form >
    
    <div>
        <input type="text" value="<?= $id; ?>">
    </div>
    <div>
        <input type="text" value="<?= $nome; ?>">
    </div>
    <div>
        <input type="text" value="<?= $sobrenome; ?>">
    </div>

<form>