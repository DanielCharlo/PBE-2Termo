<?php 

    namespace Aula13;
    class Produtos {

       public $codigo;
       public $nome;
       public $preco;
       
       public function __construct($codigo,$nome,$preco){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
       }

       public function getCodigo()
       {
              return $this->codigo;
       }

       public function setCodigo($codigo): self
       {
              $this->codigo = $codigo;

              return $this;
       }

       public function getNome()
       {
              return $this->nome;
       }

       public function setNome($nome): self
       {
              $this->nome = $nome;

              return $this;
       }

       public function getPreco()
       {
              return $this->preco;
       }

       public function setPreco($preco): self
       {
              $this->preco = $preco;

              return $this;
       }
    }



















?>