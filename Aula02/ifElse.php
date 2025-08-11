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

    $Nota1 = readline("Digite a 1° nota do aluno: ");
    $Nota2 = readline("Digite a 2° nota do aluno: ");
    $Media = ($Nota1 + $Nota2) / 2;
    $Aulas_Totais = readline("Digite o total de aulas da matéria: ");
    $Qtd_Faltas = readline("Digite o total de faltas do aluno: ");;
    $Presença = ($Aulas_Totais - $Qtd_Faltas);
    $Porc_Presença = ($Presença / $Aulas_Totais) * 100;
    $Aluno = readline("Digite o nome de aluno: ");

    if ( $Media >= 7 && $Porc_Presença >= 75 || $Aluno == "Enzo Enrico") {
        echo "Aluno aprovado média:$Media Presença:$Porc_Presença%";
    }
    else {
        echo "Aluno reprovado, média:$Media Presença:$Porc_Presença%";
    }
?>


