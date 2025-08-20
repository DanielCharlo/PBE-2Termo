<?php
 class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $revisao;
    public $Ndonos;

    public function __construct($marca, $modelo, $ano, $revisao, $Ndonos) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->Ndonos = $Ndonos;
    }
 }

 $carro1 = new Carro("Porshe", "911", "2020", false, 3);
 $carro2 = new Carro("Mitsubishi", "lancer", "2014", true, 1);
 $carro3 = new Carro("Nissan", "Silvia", "1999", true, 2);
 $carro4 = new Carro("Ferrari", "458 Speciale", "2015", false, 1);
 $carro5 = new Carro("Mercedes-Bens", "c300", "2024", true, 1);
 $carro6 = new Carro("Fiat", "Palio", "2007", true, 6);
?>