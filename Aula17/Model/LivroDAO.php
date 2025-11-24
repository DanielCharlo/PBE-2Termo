<?php
require_once 'Livro.php';
require_once 'Connection.php';
session_start();
class LivroDAO {
    private $conn;

    public function __construct() {
        $this->conn = Connection::getInstance();

        // Cria a tabela se não existir
        $this->conn->exec("
            CREATE TABLE IF NOT EXISTS livros (
                id INT AUTO_INCREMENT PRIMARY KEY,
                titulo VARCHAR(200) NOT NULL UNIQUE,
                autor VARCHAR(150) NOT NULL,
                genero VARCHAR(100) NOT NULL,
                anopublicacao INT NOT NULL,
                qtde INT NOT NULL
            )
        ");
    }
    

    // Create
    public function criarLivro(Livro $livro) {
        $stmt = $this->conn->prepare("
            INSERT INTO livros (titulo, autor, genero, anopublicacao, qtde)
            VALUES (:titulo, :autor, :genero, :anopublicacao, :qtde)
        ");
        $stmt->execute([
            ':titulo' => $livro->getTitulo(),
            ':autor' => $livro->getAutor(),
            ':genero' => $livro->getGenero(),
            ':anopublicacao' => $livro->getAnopublicacao(),
            ':qtde' => $livro->getQtde()
        ]);
    }

    // Read
    public function lerLivro() {
        $stmt = $this->conn->query("SELECT * FROM livros ORDER BY titulo");
        $result = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = new Livro(
                $row['titulo'],
                $row['autor'],
                $row['genero'],
                $row['anopublicacao'],
                $row['qtde']
            );
        }
        return $result;
    }

    // Update
    public function atualizarLivro($tituloOriginal, $novoTitulo, $autor, $genero, $anopublicacao, $qtde) {
        $stmt = $this->conn->prepare("
            UPDATE livros
            SET titulo = :novoTitulo, autor = :autor, genero = :genero, anopublicacao = :anopublicacao, qtde = :qtde
            WHERE titulo = :tituloOriginal
        ");
        $stmt->execute([
            ':novoTitulo' => $novoTitulo,
            ':autor' => $autor,
            ':genero' => $genero,
            ':anopublicacao' => $anopublicacao,
            ':qtde' => $qtde,
            ':tituloOriginal' => $tituloOriginal
        ]);
}

    // Delete
    public function excluirLivro($titulo) {
        $stmt = $this->conn->prepare("DELETE FROM livros WHERE titulo = :titulo");
        $stmt->execute([':titulo' => $titulo]);
    }

    // Busca pelo Titulo
    public function buscarPortitulo($titulo) {
        $stmt = $this->conn->prepare("SELECT * FROM livros WHERE titulo = :titulo LIMIT 1");
        $stmt->execute([':titulo' => $titulo]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Livro(
                $row['titulo'],
                $row['autor'],
                $row['genero'],
                $row['anopublicacao'],
                $row['qtde']
            );
        }
        return null;
    }
}