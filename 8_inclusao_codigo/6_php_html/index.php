
<?php

    include_once "backend.php";
?>

<h1>
    <?= $nome; ?> Bem vindo 
</h1>

<h3> Nossos melhores produtos </h3>

<ul>
    <?php foreach ($produtos as $produto): ?>

        <li>
            <?= $produto; ?>
        </li>
    
    <?php endforeach; ?>
    
</ul>