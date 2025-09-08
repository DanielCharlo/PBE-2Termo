<?php

    // Modificadores de acesso:
    // Existem 3 tipos: Public, Private e Protected
    // Public NomeDoAtributo: metodos e atributos publicos

    // Private NomeDoAtributo: metodos e atributos privados para acesso somente dentro da classe. Utilizamos os getters e setters para acessa-los.

    // Protected NomeDoAtributo: metodos e atributos protegidos para acesso somente da classes e de suas classes filha.

    // Pacotes (packages): sintaxe logo no inicio do codigo, que atribui de onde os arquivos pertence, ou seja, o caminho da pasta em que ele esta contido. Exemplo:

    // namespace Aula09;

    // Caso tenham mais arquivos que formam o BackEnd de uma pagina WEB e possuem a mesma raiz, o namespace sera o mesmo.

    namespace Aula09;

    // Interfaces: É um recurso no qual garante que obrigatoriamente a classe trenho que construir algum método previamente determinado. Funciona como uma promessa ou contrato. Exemplo: Configuramos uma interface "Pagamento" que faz com que qualquer classe que a implemente, tenha que obrigatoriamente construir o metodo "pagar".

interface Pagamento { // Contrato de pagamento
    public function pagar($valor); // Determinando o metodo que tera que ser criado 
}

class CartaoDeCredito implements Pagamento { // Criando classe CartaoDeCredito com implementação da interface pagamento
    public function pagar($valor)  {
        return ". Pagamento realizado com cartão de crédito, valor: $valor\n"; // Criando obrigatoriamente o metodo pagar
    }
}

class PIX implements Pagamento { // Criando classe PIX com implementação da Interface Pagamento
    public function pagar($valor) {
        return ". Pagamento realizado via pix, valor: $valor\n"; // Criando obrigatoriamente o metodo pagar
    }

}

class dinheiroEspecie implements Pagamento {
    public function pagar($valor) {
        return ". Pagamento realizado via dinheiro com desconto de 10%, valor:" . $valor * 0.90;
    }
}

// Testando interface: Deve-se criar objetos associados a cada classe que será textada. Exemplo:

$cred = new CartaoDeCredito(); // Criando Objeto

echo "Testando cartão de credito para pagamento" . $cred->pagar(250) . "\n";

$pix = new PIX();

echo "Testando pix para pagamento" . $pix->pagar(800) . "\n";

$din = new dinheiroEspecie();

echo "Testando dinheiro especie" . $din->pagar(1000) . "\n";


interface calcularArea {
    public function calculo($lado1 , $lado2, $a);
}

class quadrado implements calcularArea {
    public function calculo($lado1, $lado2, $a) {
        return $lado1 **2 . "\n";
    }
}

class circulo implements calcularArea {
        function calculo($lado1, $lado2, $a = null) {
            $area = number_format(($lado1 ** 2) * 3.14, 2);
            return " Círculo de raio {$lado1} tem área de = {$area}\n";
        }
    }

class pentagono implements calcularArea {
    function calculo($lado1, $lado2, $a) {
        $area =((5*$lado1)*$a)/2;
        return " area do pentagono é " . $area . "\n";
    }
}

class hexagono implements calcularArea {
    public function calculo($lado1 , $lado2, $a){
        $area = (($lado1**2)*3)*sqrt(3)/2;
        return " area do hexagono é " . $area . "\n";
    }
    }


    $quadrado = new quadrado();
    $circulo   = new circulo();
    $pentagono = new pentagono();
    $hexagono  = new hexagono();

    echo "A medida do quadrado é " . $quadrado->calculo(100,0,0);
    echo "Um" . $circulo->calculo(9,0,0);
    echo "A" . $pentagono->calculo(3,0,2);
    echo "A" . $hexagono->calculo(5,0,0);
?>