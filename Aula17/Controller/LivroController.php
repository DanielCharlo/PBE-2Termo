<?php
require_once __DIR__ . '/../Model/LivroDAO.php';
require_once __DIR__ . '/../Model/Livro.php';

class LivroController {
    private $dao;

    // Construtor: cria o objeto DAO (responsável por salvar/carregar)
    public function __construct() {
        $this->dao = new LivroDAO();
    }

<<<<<<< HEAD
    // Lista todos os Livros
    public function criar($titulo, $autor, $genero, $anopublicacao, $qtde) {

=======
    // Lista todas as bebidas
    public function criar($titulo, $autor, $genero, $anopublicacao, $qtde) {

        // // Gera ID automaticamente com base no timestamp (exemplo simples)
        // $id = time(); // Função caso o objeto tenha um atributo de ID
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897

        $livro = new Livro( $titulo, $autor, $genero, $anopublicacao, $qtde);
        $this->dao->criarLivro($livro);
    } 
    
    public function ler() {
<<<<<<< HEAD
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
=======
        return $this->dao->lerLivros();
    }
  
public function atualizar($nomeOriginal, $novoNome, $categoria, $volume, $valor, $qtde) {
    $this->dao->atualizarLivros($nomeOriginal, $novoNome, $categoria, $volume, $valor, $qtde);
}

public function buscarPorNome($nome) {
    return $this->dao->buscarPorNome($nome);
}
    // Exclui bebida
    public function deletar($nome) {
        $this->dao->excluirBebida($nome);
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
    }
}

