<?php
require_once 'Livro.php';
require_once 'Connection.php';
<<<<<<< HEAD
session_start();
=======

>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
class LivroDAO {
    private $conn;

    public function __construct() {
        $this->conn = Connection::getInstance();

        // Cria a tabela se não existir
        $this->conn->exec("
            CREATE TABLE IF NOT EXISTS livros (
                id INT AUTO_INCREMENT PRIMARY KEY,
<<<<<<< HEAD
                titulo VARCHAR(200) NOT NULL UNIQUE,
                autor VARCHAR(150) NOT NULL,
                genero VARCHAR(100) NOT NULL,
=======
                titulo VARCHAR(150) NOT NULL UNIQUE,
                autor VARCHAR(100) NOT NULL,
                genero VARCHAR(50) NOT NULL,
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
                anopublicacao INT NOT NULL,
                qtde INT NOT NULL
            )
        ");
    }
    

<<<<<<< HEAD
    // Create
=======
    // CREATE
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
    public function criarLivro(Livro $livro) {
        $stmt = $this->conn->prepare("
            INSERT INTO livros (titulo, autor, genero, anopublicacao, qtde)
            VALUES (:titulo, :autor, :genero, :anopublicacao, :qtde)
        ");
        $stmt->execute([
            ':titulo' => $livro->getTitulo(),
<<<<<<< HEAD
            ':autor' => $livro->getAutor(),
            ':genero' => $livro->getGenero(),
            ':anopublicacao' => $livro->getAnopublicacao(),
=======
            ':categoria' => $livro->getAutor(),
            ':volume' => $livro->getGenero(),
            ':valor' => $livro->getAnopublicacao(),
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
            ':qtde' => $livro->getQtde()
        ]);
    }

<<<<<<< HEAD
    // Read
    public function lerLivro() {
=======
    // READ
    public function lerLivros() {
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
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

<<<<<<< HEAD
    // Update
=======
    // UPDATE
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
    public function atualizarLivro($tituloOriginal, $novoTitulo, $autor, $genero, $anopublicacao, $qtde) {
        $stmt = $this->conn->prepare("
            UPDATE livros
            SET titulo = :novoTitulo, autor = :autor, genero = :genero, anopublicacao = :anopublicacao, qtde = :qtde
<<<<<<< HEAD
            WHERE titulo = :tituloOriginal
=======
            WHERE tiu = :nomeOriginal
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
        ");
        $stmt->execute([
            ':novoTitulo' => $novoTitulo,
            ':autor' => $autor,
            ':genero' => $genero,
<<<<<<< HEAD
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
=======
            
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
