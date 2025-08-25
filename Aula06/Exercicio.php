<?php
// // Crie uma classe "Moto" com ao menos 4 atributos sem a utilização de um construtor

class Moto{
    public $modelo;
    public $marca;
    public $ano;
    public $Ndonos;
}

// -

// 5° e 6°
class Cachorro {
    public $nome;
    public $raca;

    public function __construct($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }
    public function latir() {
       return "O cachorro ". $this->nome. " esta latindo\n";
    }
    public function marcarTerritorio() {
        return "O cachorro " . $this ->nome . " da raça " . $this->raca .  " está marcando território\n";
    }
}
$cachorro1 = new Cachorro("Toddynho" , "shitzu");
echo $cachorro1 -> latir();
$cachorro2 = new Cachorro("Toddynho" , "pequines");
echo $cachorro2 -> marcarTerritorio();

// 7° e 8°
class Usuarios {
    public $sexo;
    public $casamento;
    
    public $anos_casado;
    
    public function __construct($sexo, $casamento, $anos_casado) {
        $this ->sexo = $sexo;
        $this ->casamento = $casamento;
        $this ->anos_casado = $anos_casado;
    }
    public function testandoReservista() {
        if ($this->sexo == "homem") {
            return "Apresente seu certificado de reservista do tiro de guerra!\n";
        } else {
            return "Tudo certoz\n";
        }
    }
    public function Casamento() {
        if ($this->casamento == "Casado") {
            return "Parabéns pelo seu casamento de " . $this->anos_casado ." anos !\n";
        } else {
            return "oloco\n";
        }
    }
}
$usuario1 = new Usuarios("homem", "Casado", 8);
echo $usuario1 -> testandoReservista();
$usuario2 = new Usuarios("Mulher", "Casado", 5);
echo $usuario2 -> Casamento();
?>