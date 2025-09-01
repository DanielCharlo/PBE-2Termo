<?php
//Exercicio1
class Carro {
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo) {
        $this->setMarca($marca);
        $this->setModelo($modelo);
    }

    public function setMarca($marca) {
        $this->marca=ucwords(strtolower($marca));
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setModelo($modelo) {
        $this->modelo = ucwords(strtolower($modelo));
    }
    
    public function getModelo(){
        return $this->modelo;
    }
}

$carro1 = new Carro("RENAULT", "duster");
echo $carro1->getMarca() . "\n";
echo $carro1->getModelo() . "\n";

//Exercicio2
class Pessoa {
    private $nome;
    private $idade;
    private $email;

    public function __construct($nome, $idade, $email) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }
    public function setNome() {
        $this->nome = "Daniel";
    }
    public function setIdade() {   
         $this->idade = 16;
    }
    public function setEmail() {
        $this->email = "danielhenriquecharlo@gmail.com";
    }
    public function getNome() {
        return $this->nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getEmail() {
        return $this->email;
    }
}
$pessoa1 = new Pessoa("d", 1 , "d");
$pessoa1->setNome();
$pessoa1->setIdade();
$pessoa1->setEmail();
echo "O nome é:" . $pessoa1->getNome() . ", tem:" . $pessoa1->getIdade(). " anos" . ", seu email é:" . $pessoa1->getEmail() . "\n";

//Exercicio3
class Aluno {
    private $nome;
    private $nota;

    public function __construct($nome, $nota) {
        $this->nome = $nome;
        $this->setNota($nota);
    }
    public function setNome($nome){
        $this->nome=ucwords(strtolower($nome));
    }
    public function setNota($nota) {
        if ($nota >=0 && $nota <=10) {
            $this->nota = $nota;
        } else {
            $this->nota = 0;
        }
    }
    public function getNome() {
        return $this->nome;
    }
    public function getNota() {
        return $this->nota;
    }

}

 $aluno1 = new Aluno("daniel", 11);
 echo $aluno1->getNome() . "\n";
 echo $aluno1->getNota() . "\n";

 //Exercicio4
 class Produto {
    private $nome;
    private $preco;
    private $estoque;

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setPreco($preco) {
        $this->preco = $preco;
    }
    public function getPreco() {
        return $this->preco;
    }
    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }
    public function getEstoque() {
        return $this->estoque;
    }
}

$produto = new Produto();
$produto->setNome("Notebook");
$produto->setPreco(3500.99);
$produto->setEstoque(15);
echo "O produto " . $produto->getNome() . " custa R$ " . number_format($produto->getPreco(), 2, ',', '.') . " e possui " . $produto->getEstoque() . " unidades em estoque.\n";

// exercicio 5
class Funcionario {
    private $nome;
    private $salario;
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSalario() {
        return $this->salario;
    }
}

$funcionario = new Funcionario();   
$funcionario->setNome("Pedro");
$funcionario->setSalario(2500.00);


echo "Funcionário: " . $funcionario->getNome() . " - Salário: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . "\n";
$funcionario->setNome("Pedro Silva");
$funcionario->setSalario(3000.50);
echo "Funcionário alterado: " . $funcionario->getNome() . " - Salário alterado: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . "\n";
?>