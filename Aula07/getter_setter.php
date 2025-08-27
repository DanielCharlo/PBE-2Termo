<?php

class Pessoa {
    private $nome;
    private $cpf;
    private $telefone;
    private $idade;
    private $email;
    private $senha;

    //  Crie o construtor para a classe Pessoa.
     
    public function __construct($nome , $cpf, $telefone, $idade, $email, $senha) {
        $this ->setNome($nome);
        $this ->setCpf($cpf);
        $this ->setTelefone($telefone);
        $this ->setIdade($idade);
        $this ->email = $email;
        $this ->senha = $senha;
    }
    public function setNome($nome) {
        $this -> nome= ucwords(strtolower($nome));
    }

    public function getNome() {
        return $this -> nome;
        }
    public function setCpf($cpf) {
        $this->cpf = preg_replace('/\D/', '', $cpf);
    }
    public function getCpf() {
        return $this -> cpf;
    }
    public function setTelefone($telefone) {
        $this->telefone = preg_replace('/\D/', '', $telefone);
    }   
    public function getTelefone() {
        return $this -> telefone;
    }
    public function setIdade($idade) {
        $this -> idade = abs((int) $idade);
    }
    public function getIdade() {
        return $this->idade;
    }
    public function exibirinfo(){
            return"Nome do aluno: $this->nome\nCpf do aluno: $this->cpf\nTelefone do aluno: $this->telefone\nIdade do aluno: $this->idade\nE-mail do aluno: $this->email\nSenha do aluno: $this->senha\n";
        }
}

$pessoa1 = new Pessoa("daNIel", "540.268.508-89", 19987014289, 16, "danielhenriquecharlo@gmail.com", 3030);

echo $pessoa1->getNome();
echo $pessoa1->getCpf();
echo $pessoa1->getTelefone();

?>