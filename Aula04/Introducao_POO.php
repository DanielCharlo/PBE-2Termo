<?php
// Modelagem de dados sem a utilização de POO (Programação Orientada a Objetos)

$marca_carro1="Honda";
$modelo_carro1="Civic";
$ano_carro1="2016";
$revisao_carro1="true";
$Ndonos_carros1=2;

$marca_carro2="BMW";
$modelo_carro2="320i";
$ano_carro2="2012";
$revisao_carro2="false";
$Ndonos_carros2=3;

$marca_carro3="Fiat";
$modelo_carro3="Uno";
$ano_carro3="2005";
$revisao_carro3="false";
$Ndonos_carros3=1;

$marca_carro4="Volkswagem";
$modelo_carro4="Jetta";
$ano_carro4="2020";
$revisao_carro4="true";
$Ndonos_carros4=7;

function revisaoFeita($rev) {
    $rev=true;
    return $rev;
}
$revisao_carro3 = revisaoFeita($revisao_carro3); // Resultado vai ser true

function novoDono($qtde_donos) {
    return $qtde_donos+1;
}

// Exercicios

function exibirCarro($marca, $modelo, $ano, $revisao, $Ndonos) {
    if($revisao==1) {
        return "O $marca $modelo, do ano $ano, já passou por $Ndonos donos e não precisa de revisão.\n";
    } else {
        return "O $marca $modelo, do ano $ano, já passou por $Ndonos donos e precisa de revisão.\n";
    } 
}

echo exibirCarro($marca_carro1, $modelo_carro1, $ano_carro1, $revisao_carro1, $Ndonos_carros1);
echo exibirCarro($marca_carro2, $modelo_carro2, $ano_carro2, $revisao_carro2, $Ndonos_carros2);
echo exibirCarro($marca_carro3, $modelo_carro3, $ano_carro3, $revisao_carro3, $Ndonos_carros3);
echo exibirCarro($marca_carro4, $modelo_carro4, $ano_carro4, $revisao_carro4, $Ndonos_carros4);

function ehSeminovo($marca, $modelo, $ano) {
    if(date("Y") - $ano <= 3){
        return "O $marca $modelo cujo ano é $ano é seminovo\n";
    } else {
        return "O $marca $modelo cujo ano é $ano não é seminovo\n";
    }

}

echo ehSeminovo($marca_carro1, $modelo_carro1, $ano_carro1);
echo ehSeminovo($marca_carro2, $modelo_carro2, $ano_carro2);
echo ehSeminovo($marca_carro3, $modelo_carro3, $ano_carro3);
echo ehSeminovo($marca_carro4, $modelo_carro4, $ano_carro4);

function precisaRevisao($marca, $revisao , $ano) {
    if($revisao == false || (date("Y")) - $ano <=4) {
        return "O $marca precisa de revisão\n";
    } else {
        return "O $marca não precisa de revisão\n"; 
    }
}

echo precisaRevisao($marca_carro1, $revisao_carro1, $ano_carro1);
echo precisaRevisao($marca_carro2, $revisao_carro2, $ano_carro2);
echo precisaRevisao($marca_carro3, $revisao_carro3, $ano_carro3);
echo precisaRevisao($marca_carro4, $revisao_carro4, $ano_carro4);

 
?>