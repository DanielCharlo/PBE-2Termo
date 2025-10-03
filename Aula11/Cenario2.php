<?php
    // =====================================
    // Cenário 2 – Heróis e Personagens
    // Classes: Heroi, Missao, LocalDeTreinamento, Shopping, Brinquedo, Crianca
    // Métodos:
    //   Heroi: treinar(), realizarMissao(), doarBrinquedo()
    //   Missao: iniciar(), finalizar()
    //   LocalDeTreinamento: oferecerTreinamento()
    //   Shopping: receberDoacao()
    //   Brinquedo: getTipo()
    //   Crianca: receberBrinquedo()
    // =====================================

    class Missao {
        public function iniciar() {}
        public function finalizar() {}
    }

    class LocalDeTreinamento {
        public function oferecerTreinamento() {}
    }

    class Brinquedo {
        private $tipo;
        public function __construct($tipo) { $this->tipo = $tipo; }
        public function getTipo() { return $this->tipo; }
    }

    class Crianca {
        public function receberBrinquedo(Brinquedo $brinquedo) {}
    }

    class Shopping {
        public function receberDoacao(Brinquedo $brinquedo) {}
    }

    class Heroi {
        public function treinar(LocalDeTreinamento $local) {}
        public function realizarMissao(Missao $missao) {}
        public function doarBrinquedo(Brinquedo $brinquedo, Shopping $shopping) {}
    }
?>
