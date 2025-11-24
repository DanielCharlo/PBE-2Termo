<?php
require_once __DIR__ . '/../Model/LivroDAO.php';
require_once __DIR__ . '/../Model/Livro.php';

class LivroController {
    private $dao;

    public function __construct() {
        $this->dao = new LivroDAO();
    }

    // Lista todos os Livros
    public function criar($titulo, $autor, $genero, $anopublicacao, $qtde) {


        $livro = new Livro( $titulo, $autor, $genero, $anopublicacao, $qtde);
        $this->dao->criarLivro($livro);
    } 
    
    public function ler() {
        return $this->dao->lerLivro();
    }
  
    // Atualiza as informçaões do livro
public function atualizar($tituloOriginal, $novotitulo, $autor, $genero, $anopublicacao, $qtde) {
    $this->dao->atualizarLivro($tituloOriginal, $novotitulo, $autor, $genero, $anopublicacao, $qtde);
}

    // Busca o livro pelo titulo
public function buscarPortitulo($titulo) {
    return $this->dao->buscarPortitulo($titulo);
}
    // Exclui Livro
    public function deletar($titulo) {
        $this->dao->excluirLivro($titulo);
    }
}

