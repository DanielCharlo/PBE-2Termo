<?php

// Exercicio 1

$idade = readline("Digite sua idade: ");
if ($idade >= 18) {
  echo "Maior de idade";
} else {
  echo "Menor de idade";
}

echo "\n";

//  Exercicio 2

$nota = 10;

if ($nota >= 9) {
  echo "Excelente\n";
} else if ($nota >= 7) {
  echo "bom\n";
} else {
  echo "Reprovado\n";
}

// Exercicio 3

$dia = readline("Digite um numero de 1-7 correspondente ao dia da semana: ");

switch ($dia) {
  case "1":
    echo "Domingo\n";
    break;
  case "2":
    echo "Segunda\n";
    break;
  case "3":
    echo "Terça\n";
    break;
  case "4":
    echo "Quarta\n";
    break;
  case "5":
    echo "Quinta\n";
    break;
  case "6":
    echo "Sexta\n";
    break;
  case "7":
    echo "Sabado\n";
    break;
  default;
    echo "Numero invalido\n";
}

// Exercicio 4

$numero1 = readline("Digite o primeiro numero: ");
$numero2 = readline("Digite o segundo numero: ");
$operacao = readline("Digite a operação: ");

switch ($operacao) {
  case "+":
    $resultado = $numero1 + $numero2;
    echo $resultado, "\n";
    break;
  case "-":
    $resultado = $numero1 - $numero2;
    echo $resultado, "\n";
    break;
  case "/":
    $resultado = $numero1 / $numero2;
    echo $resultado, "\n";
    break;
  case "*":
    $resultado = $numero1 * $numero2;
    echo $resultado, "\n";
    break;
  default;
    echo "Operação Invalida !\n";
    break;
}

// Exercicio 5

for ($i = 1; $i <= 10; $i++) {
  echo "Contagem: ", $i, "\n";
}

// Exercicio 6

$numero = readline("Digite um numero: ");
for ($i = $numero; $i >= 1; $i--)
  echo $i, "\n";

// Exercicio 7

$pares = 0;

$num = readline("Digite até que numero voce quer os pares: ");
for ($i = 0; $i < $num + 1; $i++) {
  if ($i % 2 == 0) {
    $pares += 1;
  }
}

echo "Entre 0 e $num existem $pares \n";

// Exercicio 8

$num = readline("Digite um numero: ");
for ($i = 1; $i <= 10; $i++) {
  $resultado = $num * $i;
  echo $resultado, "\n";
}

// Exercicio 9

$temp = readline("Digite a temperatura: ");
if ($temp <= 15) {
  echo "Frio\n";
} else if ($temp <= 25) {
  echo "Agradavel\n";
} else {
  echo "Quente\n";
}

// Exercicio 10

do {
  echo "1- Olá\n";
  echo "2- Data Atual\n";
  echo "3- Sair\n";

  $op = readline("Digite uma opção: ");

  switch ($op) {
    case "1":
      echo "Olá\n";
      break;
    case "2":
      $data_atual = date("d/m/Y");
      echo "Data atual: " . $data_atual, "\n";
      break;
    case "3";
      echo "Saindo...\n";
      break;
    default:
      echo "opção invalida\n";
      break;
  }

  echo "\n";
} while ($op != 3);

// Desafio Extra

$valor1 = readline("Digite um caracter: ");
$valor2 = readline("Digite outro caracter: ");

echo "O tipo de variavel do caracter 1 é: ", gettype($valor1), "\no segundo é: ", gettype($valor2);
