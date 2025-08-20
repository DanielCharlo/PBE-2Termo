<?php
    class Cachorro {
        public $nome;
        public $idade;
        public $raca;
        public $castrado;
        public $sexo;

        public function __construct($nome, $idade, $raca, $castrado, $sexo) {
          $this->nome = $nome;
          $this->idade = $idade;
          $this->raca = $raca;
          $this->castrado = $castrado;
          $this->sexo = $sexo;
        }

    }

    $cachorro1 = new Cachorro ("Ezequiel",6,"bulldog",false, "Masculino");
    $cachorro2 = new Cachorro ("Bruno",9,"Salsicha",false, "Masculino");
    $cachorro3 = new Cachorro ("Leandro",3,"Pinscher",false, "Masculino");
    $cachorro4 = new Cachorro ("Eduarda",12,"shitzu",true, "Feminino");
    $cachorro5 = new Cachorro ("Eduardo",2,"labrador",true, "Masculino");
    $cachorro6 = new Cachorro ("Sigma",1,"Pug",true, "Masculino");
    $cachorro7 = new Cachorro ("Evandro",11,"Vira-Lata",false, "Masculino");
    $cachorro8 = new Cachorro ("Adolfo",7,"Pastor Alemão",true, "Masculino");
    $cachorro9 = new Cachorro ("Ronaldo",8,"Kangal",true, "Masculino");
    $cachorro10 = new Cachorro ("Princesa",14,"rottweiler",false, "Feminino");

    class Usuario {
        public $Nome;
        public $CPF;
        public $Sexo;
        public $Email;
        public $Estado_civil;
        public $Cidade;
        public $Estado;
        public $Endereco;
        public $CEP;

        public function __construct($Nome, $CPF, $Sexo, $Email, $Estado_civil, $Cidade, $Estado, $Endereco, $CEP) {
            $this->Nome = $Nome;
            $this->CPF = $CPF;
            $this->Sexo = $Sexo;
            $this->Email = $Email;
            $this->Estado_civil = $Estado_civil;
            $this->Cidade = $Cidade;
            $this->Estado = $Estado;
            $this->Endereco = $Endereco;
            $this->CEP = $CEP;
        }
    }

    $usuario1 = new Usuario("Josenildo Afonso Souza","100.200.300-40", "Masculino", "josenewdo.souza@gmail.com", "casado", "Xique-Xique", "Bahia" , "Rua da amizade, 99", "40123-98");
    $usuario2 = new Usuario("Valentina Passos Scherrer","070.070.060-70", "Feminino", "scherrer.valen@outlook.com", "Divorciada", "Iracemápolis", "São Paulo" , "Avenida da saudade, 1942", "23456-24");
    $usuario3 = new Usuario("Claudio Braz Nepumoceno","575.575.242-32", "Masculino", "Clauclau.nepumoceno@gmail.com", "Solteiro", "Piripiri", "Piauí" , "Estrada 3, 33", "12345-99");

?>