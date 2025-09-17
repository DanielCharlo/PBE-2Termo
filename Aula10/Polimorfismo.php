<?php

//Polimorfismo:
//O termo Polimorfismo significa "Várias formas" . Associando isso a Programação Orientada a Objetos, o conceito se trata de várias classes e suas instancias (Objetos) respondendo a um mesmo método de formas diferentes. No exemplo do Interface da Aula_09, temos um método CalcularArea() que responde de forma diferente á classe Quadrado, à classe Pentágono e a classe Circulo. Isso quer dizerque a função é a mesma - calcular a area da forma geométrica - mas a operação muda de acordo com a figura.

//Crie um metodo chamado "mover()", aonde ele responde de varias formas diferentes, para as sub-classes: Carro, Avião, Barco e Elevador. Dica: Utilize Interfaces.

namespace Aula10;

use Aula09\calcularArea;

interface veiculo {
    public function mover();
}

class Carros implements veiculo {
    public $nome;
    public function mover() {
        echo "O carro {$this->nome} esta andando \n";
    }
}

class Avioes implements veiculo {
    public $nome;
    public function mover() {
        echo "O aviao {$this->nome} esta voando \n";
    }
}

$Car1 = new Carros();
$Car1->nome = "Mustang";
$Car1->mover();

$Car2 = new Carros();
$Car2->nome = "Kadett";
$Car2->mover();

$AirPlane1 = new Avioes();
$AirPlane1->nome = "Lockheed Martin F-35";
$AirPlane1->mover();

$AirPlane2 = new Avioes();
$AirPlane2->nome = "Boeing F-15";
$AirPlane2->mover();

//Exercicios 1

interface forma {
    public function calcularArea();
}

class Quadrado implements forma {
    public $lado;
    public function calcularArea(){
        return $this->lado**2;
    }       
}

$quadrado = new Quadrado();
$quadrado->lado = 10; 
echo "A área do quadrado é " . $quadrado->calcularArea() . "\n";

class Retangulo implements forma {
    public $base;
    public $altura;
    public function calcularArea() {
        return $this->base * $this->altura;
    }
}

$retangulo = new Retangulo();
$retangulo->base = 10;
$retangulo->altura = 5;

echo "A área do retângulo é " . $retangulo->calcularArea() . "\n";

class Circulo implements Forma {
    public $raio;

    public function calcularArea() {
        return pi() * ($this->raio ** 2);
    }
}

$circulo = new Circulo();
$circulo->raio = 2;

echo "A área do círculo é " . $circulo->calcularArea() . "\n";

//Exercicio2

class Animal {
    public function fazerSom()  {}
}

class Cachorro extends Animal {
    public $nome;
    public function fazerSom() {
        echo "O cachorro {$this->nome} faz Au au! \n";
    }
}

class Gato extends Animal {
     public $nome;
    public function fazerSom() {
        echo "O gato {$this->nome} faz Miau! \n";
    }
}

class Vaca extends Animal {
     public $nome;
    public function fazerSom() {
        echo "A vaca {$this->nome} faz Muuu! \n";
    }
}

$cachorro = new Cachorro();
$cachorro->nome = "Jorge";
$cachorro->fazerSom();

$gato = new Gato();
$gato->nome = "Matheus";
$gato->fazerSom();

$vaca = new Vaca();
$vaca->nome = "Grace";
$vaca->fazerSom();

//Exercicio 3

abstract class Transporte {
    abstract public function mover();
}

class Carro extends Transporte {
    public $nome;
    public function mover() {
        echo "O carro {$this->nome} está andando na estrada\n";
    }
}

class Barco extends Transporte {
    public $nome;
    public function mover() {
        echo "O barco {$this->nome} está navegando/afundando no mar\n";
    }
}

class Aviao extends Transporte {
    public $nome;
    public function mover() {
        echo "O avião {$this->nome} está voando no céu\n";
    }
}

class Elevador extends Transporte {
    public $nome;
    public function mover() {
        echo "O elevador {$this->nome} está correndo pelo prédio\n";
    }
}

$carro = new Carro();
$carro->nome = "Lexus lc 500";
$carro->mover();

$barco = new Barco();
$barco->nome = "Titanic";
$barco->mover();

$aviao = new Aviao();
$aviao->nome = "Boeing 737";
$aviao->mover();

$elevador = new Elevador();
$elevador->nome = "LiftMaster";
$elevador->mover();

//Exercicio 4

class Email {
    public function enviar() {
        return "Enviando email...";
    }
}

class Sms {
    public function enviar() {
        return "Enviando SMS...";
    }
}

function notificar($meio) {
    echo $meio->enviar() . "\n";
}

$email = new Email();
$sms = new Sms();

notificar($email);
notificar($sms);

// Exercicio 5

class Calculadora {
    public function somar($numero1, $numero2, $numero3 = 0) {
        return $numero1 + $numero2 + $numero3;
    }
}

$calculadora = new Calculadora();

echo $calculadora->somar(2, 3) . "\n";
echo $calculadora->somar(9, 20, 3) . "\n";

// Extra

interface Movel{
        public function mover();
    }

    interface Abastecivel{
        public function abastecer($quantidade);
    }

    interface Manutenivel{
        public function fazerManutencao();
    }

    class carro2 implements Movel,Abastecivel{

        public function mover(){
            return "O carro está se movimentando";
        }

        public function abastecer($quantidade){
            return "O carro foi abastecido com " . $quantidade . " litros";
        }

    }

    class Bicicleta implements Movel, Manutenivel{

        public function mover(){
            return "A bicicleta está pedalando";
        }

        public function fazerManutencao(){
            return "A bicicleta foi lubrificada";
        }

    }

    class Onibus implements Movel, Abastecivel, Manutenivel{

        public function mover(){
            return "O ônibus está transportando passageiros";
        }

        public function abastecer($quantidade){
            return "O ônibus foi abastecido com " . $quantidade . " litros";
        }

        public function fazerManutencao(){
            return "O ônibus está passando por revisão";
        }

    }

    $carro2 = new carro2();
    $bicicleta1 = new Bicicleta();
    $onibus1 = new Onibus();

    echo $carro2->mover() . "\n";
    echo $carro2->abastecer(40) . "\n";
    echo $bicicleta1->mover() . "\n";
    echo $bicicleta1->fazerManutencao() . "\n";
    echo $onibus1->mover() . "\n";
    echo $onibus1->abastecer(100) . "\n";
    echo $onibus1->fazerManutencao() . "\n";

?>