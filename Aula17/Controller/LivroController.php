<?php
require_once __DIR__ . '/../Model/LivroDAO.php';
require_once __DIR__ . '/../Model/Livro.php';

class LivroController {
    private $dao;

    // Construtor: cria o objeto DAO (responsável por salvar/carregar)
    public function __construct() {
        $this->dao = new LivroDAO();
    }

    // Lista todas as bebidas
    public function criar($titulo, $autor, $genero, $anopublicacao, $qtde) {

        // // Gera ID automaticamente com base no timestamp (exemplo simples)
        // $id = time(); // Função caso o objeto tenha um atributo de ID

        $livro = new Livro( $titulo, $autor, $genero, $anopublicacao, $qtde);
        $this->dao->criarLivro($livro);
    } 
    
    public function ler() {
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
    }
}

