<?php 

    namespace Aula12;

    class AlunoDAO{
        private $alunos=[];

        public function criarAlunos(Aluno $aluno){
            $this->alunos[$aluno->getId()]=$aluno;
        }

        public function lerAlunos(){
            return $this->alunos;
        }

        public function atualizarAlunos($id, $novoNome, $novoCurso){
            if (isset($this->alunos[$id])) { // ✅ usa $this->alunos
                $this->alunos[$id]->setNome($novoNome);
                $this->alunos[$id]->setCurso($novoCurso);
            }
        }

        public function excluirAlunos($id){
            unset ($this->alunos[$id]);
        }
    }

?>