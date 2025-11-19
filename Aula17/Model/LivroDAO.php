<?php
require_once 'Livro.php';
require_once 'Connection.php';

class LivroDAO {
    private $conn;

    public function __construct() {
        $this->conn = Connection::getInstance();

        // Cria a tabela se não existir
        $this->conn->exec("
            CREATE TABLE IF NOT EXISTS livros (
                id INT AUTO_INCREMENT PRIMARY KEY,
                titulo VARCHAR(150) NOT NULL UNIQUE,
                autor VARCHAR(100) NOT NULL,
                genero VARCHAR(50) NOT NULL,
                anopublicacao INT NOT NULL,
                qtde INT NOT NULL
            )
        ");
    }
    

    // CREATE
    public function criarLivro(Livro $livro) {
        $stmt = $this->conn->prepare("
            INSERT INTO livros (titulo, autor, genero, anopublicacao, qtde)
            VALUES (:titulo, :autor, :genero, :anopublicacao, :qtde)
        ");
        $stmt->execute([
            ':titulo' => $livro->getTitulo(),
            ':categoria' => $livro->getAutor(),
            ':volume' => $livro->getGenero(),
            ':valor' => $livro->getAnopublicacao(),
            ':qtde' => $livro->getQtde()
        ]);
    }

    // READ
    public function lerLivros() {
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

    // UPDATE
    public function atualizarLivro($tituloOriginal, $novoTitulo, $autor, $genero, $anopublicacao, $qtde) {
        $stmt = $this->conn->prepare("
            UPDATE livros
            SET titulo = :novoTitulo, autor = :autor, genero = :genero, anopublicacao = :anopublicacao, qtde = :qtde
            WHERE tiu = :nomeOriginal
        ");
        $stmt->execute([
            ':novoTitulo' => $novoTitulo,
            ':autor' => $autor,
            ':genero' => $genero,
            