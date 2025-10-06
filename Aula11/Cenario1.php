<?php
    // =====================================
    // Cenário 1 – Viagem pelo Mundo
    // Classes: Turista, Localidade, Atividade (abstrata), Comida, CorpoDagua
    // Métodos:
    //   Turista: visitar(), comer(), nadar()
    //   Localidade: informarAtividades()
    //   Atividade: executar()
    //   Comida: getDescricao()
    //   CorpoDagua: getTipo()
    // Relações:
    // Turista → Localidade = Associação
    // Turista → Atividade  = Associação
    // Turista → Comida = Associação
    // Turista → CorpoDagua = Associação
    // Localidade → Atividade = Agregação
    // Localidade → Comida = Agregação
    // Localidade → CorpoDagua = Agregação
    // Atividade → Comida = Composição 
    // Atividade → CorpoDagua = Composição 
    // =====================================

    abstract class Atividade {
        abstract public function executar();
    }

    class Comida extends Atividade {
        private $descricao;
        public function __construct($descricao) { $this->descricao = $descricao; }
        public function getDescricao() { return $this->descricao; }
        public function executar() { return "Experimentando comida: " . $this->descricao; }
    }

    class CorpoDagua extends Atividade {
        private $tipo;
        public function __construct($tipo) { $this->tipo = $tipo; }
        public function getTipo() { return $this->tipo; }
        public function executar() { return "Nadando em: " . $this->tipo; }
    }

    class Localidade {
        private $nome;
        private $atividades = [];
        public function __construct($nome) { $this->nome = $nome; }
        public function adicionarAtividade(Atividade $atividade) { $this->atividades[] = $atividade; }
        public function informarAtividades() { return $this->atividades; }
    }

    class Turista {
        private $nome;
        public function __construct($nome) { $this->nome = $nome; }
        public function visitar(Localidade $localidade) {}
        public function comer(Comida $comida) {}
        public function nadar(CorpoDagua $corpo) {}
    }
?>
