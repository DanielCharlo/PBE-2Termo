<?php
class Aluno {
    private $id;
    private $nome;
    private $curso;

    public function __construct($id, $nome, $curso) {
        $this->id = $id;
        $this->nome = $nome;
        $this->curso = $curso;
    }

    public function getId() { return $this->id; }
    public function setId($id): self { $this->id = $id; return $this; }

    public function getNome() { return $this->nome; }
    public function setNome($nome): self { $this->nome = $nome; return $this; }

    public function getCurso() { return $this->curso; }
    public function setCurso($curso): self { $this->curso = $curso; return $this; }
}
?>
