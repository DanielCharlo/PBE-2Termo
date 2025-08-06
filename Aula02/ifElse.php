//EXEMPLO IF, ELSEIF, ELSE
<?php

 $Aluno_Nota = 8;

if ($Aluno_Nota > 7) {
    echo "O aluno foi bem na prova";
} elseif ($Aluno_Nota > 5) {
    echo "O aluno ficou na média";
} else {
    echo "O aluno foi mal na prova";
}
?>


//MÉDIA IF E ELSE
<?php

    $Nota1 = 0;
    $Nota2 = 0;
    $Media = ($Nota1 + $Nota2) / 2;
    $Aulas_Totais = 20;
    $Qtd_Faltas = 0;
    $Presença = ($Aulas_Totais - $Qtd_Faltas);
    $Porc_Presença = ($Presença / $Aulas_Totais) * 100;
    $Aluno = "Enzo Enrico";

    if ( $Media >= 7 && $Porc_Presença >= 75 || $Aluno == "Enzo Enrico") {
        echo "Aluno aprovado média:$Media Presença:$Porc_Presença%";
    }
    else {
        echo "Aluno reprovado, média:$Media Presença:$Porc_Presença%";
    }
?>


