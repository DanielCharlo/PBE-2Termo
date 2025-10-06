<?php
    // =====================================
    // Cenário 3 – Fantasia e Destino
    // Classes: Personagem, Jornada, Clima, Dificuldade, Refeicao
    // Métodos:
    //   Personagem: seguirJornada(), enfrentarDesafio(), celebrar()
    //   Jornada: avancar()
    //   Clima: mudar()
    //   Dificuldade: superar()
    //   Refeicao: servir()
    // Relações:
    // Personagem → Jornada = Associação
    // Personagem → Dificuldade = Associação
    // Personagem → Refeicao = Associação
    // Jornada → Clima = Agregação 
    // Dificuldade → Clima = Agregação 
    // Refeicao → Personagem = Associação 
    // =====================================

    class Jornada {
        public function avancar() {}
    }

    class Clima {
        public function mudar() {}
    }

    class Dificuldade {
        public function superar() {}
    }

    class Refeicao {
        public function servir() {}
    }

    class Personagem {
        public function seguirJornada(Jornada $jornada) {}
        public function enfrentarDesafio(Dificuldade $dificuldade) {}
        public function celebrar(Refeicao $refeicao) {}
    }
?>
