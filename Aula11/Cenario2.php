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
    // Relações:
    // Heroi → LocalDeTreinamento = Associação
    // Heroi → Missao = Associação
    // Heroi → Brinquedo = Associação
    // Heroi → Shopping = Associação
    // Heroi → Crianca = Associação 
    // Shopping → Brinquedo = Agregação 
    // Crianca → Brinquedo = Associação 
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
