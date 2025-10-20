
php
    // =====================================
    // Cenário 6 – Cinema
    // Classes: SistemaDeCinema, Cliente, Filme, Sessao, Ingresso, Sala
    // Métodos:
    //   SistemaDeCinema: exibirSessoes(), venderIngresso()
    //   Cliente: comprarIngresso()
    //   Filme: getDetalhes()
    //   Sessao: reservarAssento(), liberarAssento()
    //   Ingresso: validar()
    //   Sala: verificarDisponibilidade()
    // =====================================

    class Filme {
        public function getDetalhes() {}
    }

    class Sala {
        public function verificarDisponibilidade() {}
    }

    class Sessao {
        public function reservarAssento() {}
        public function liberarAssento() {}
    }

    class Ingresso {
        public function validar() {}
    }

    class Cliente {
        public function comprarIngresso(Sessao $sessao) {}
    }

    class SistemaDeCinema {
        public function exibirSessoes() {}
        public function venderIngresso(Cliente $cliente, Sessao $sessao) {}
    }
?>
