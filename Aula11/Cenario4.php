<?php
    // =====================================
    // Cenário 4 – Ciclo da Vida
    // Classes: Pessoa, Escolha, BancoDeSangue
    // Métodos:
    //   Pessoa: engravidar(), nascer(), crescer(), fazerEscolha(), doarSangue()
    //   Escolha: executar()
    //   BancoDeSangue: receberDoacao()
    // =====================================

    class Escolha {
        public function executar() {}
    }

    class BancoDeSangue {
        public function receberDoacao(Pessoa $pessoa) {}
    }

    class Pessoa {
        public function engravidar() {}
        public function nascer() {}
        public function crescer() {}
        public function fazerEscolha(Escolha $escolha) {}
        public function doarSangue(BancoDeSangue $banco) {}
    }
?>
