<?php

echo"Olá! \n";
$nome ="Daniel Charlo! \n";
$idade ="16";
$ano_atual ="2025";

$data_nasc= $ano_atual - $idade;
echo $nome, "você nasceu em ", $data_nasc;

?>

// Questões AULA01

// EX1

<?php
 
    $nome = "Daniel Charlo";
    $idade = 16;

    echo "Eu sou $nome e tenho $idade anos.";

?>

// EX2

<?php

    $frase = "Charlo";

    echo strtoupper(string: $frase)."\n";
    
    echo strtolower(string: $frase)."\n";

?>

// EX3  

<?php

    $texto = "O PHP foi criado em mil novecentos e noventa e cinco.";

    $texto = str_replace(search: "o",replace: "0", subject: $texto);
    $texto = str_replace(search: "O",replace: "0", subject: $texto);
    $texto = str_replace(search: "a",replace: "4", subject: $texto);
    $texto = str_replace(search: "i",replace: "1", subject: $texto);

    echo "$texto";

?>