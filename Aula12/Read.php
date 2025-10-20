<?php
require_once "AlunoDAO.php";

$dao = new AlunoDAO();

$dao->criarAlunos(1, "Josias", "Panificação");
$dao->criarAlunos(2, "Victor Hugo", "Manicure");
$dao->criarAlunos(3, "Beatriz", "Eletricista");

echo "Listagem inicial:\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "(".$aluno->getId().") - ".$aluno->getNome()." - ".$aluno->getCurso()."\n";
}

$dao->atualizarAlunos(1, "Josias", "Técnico em borracharia");

echo "\nApós atualização:\n";
foreach ($dao->lerAlunos() as $aluno) {
    echo "(".$aluno->getId().") - ".$aluno->getNome()." - ".$aluno->getCurso()."\n";
}
?>
