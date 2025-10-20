<?php
require_once "crud.php";

class AlunoDAO {
    private $alunos = [];

    public function criarAlunos($id, $nome, $curso) {
        $this->alunos[$id] = new Aluno($id, $nome, $curso);
    }

    public function lerAlunos() {
        return $this->alunos;
    }

    public function atualizarAlunos($id, $novoNome, $novoCurso) {
        if (isset($this->alunos[$id])) {
            $this->alunos[$id]->setNome($novoNome);
            $this->alunos[$id]->setCurso($novoCurso);
        }
    }

    public function excluirAlunos($id) {
        unset($this->alunos[$id]);
    }
}
?>
