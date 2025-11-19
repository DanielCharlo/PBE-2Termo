<?php

class Livro {
    private $titulo;
    private $autor;
    private $genero;
    private $anopublicacao;
    private $qtde;

    public function __construct($titulo, $autor, $genero, $anopublicacao, $qtde){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->anopublicacao = $anopublicacao;
        $this->qtde = $qtde;
    } 

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo): self {
        $this->titulo = $titulo;
        return $this;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor): self {
        $this->autor = $autor;
        return $this;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero): self {
        $this->genero = $genero;
        return $this;
    }

    public function getAnopublicacao() {
        return $this->anopublicacao;
    }

    public function setAnopublicacao($anopublicacao): self {
        $this->anopublicacao = $anopublicacao;
        return $this;
    }

    public function getQtde() {
        return $this->qtde;
    }

    public function setQtde($qtde): self {
        $this->qtde = $qtde;
        return $this;
    }
}
