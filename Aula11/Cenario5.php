<?php
    // =====================================
    // Cenário 5 – Biblioteca
    // Classes: SistemaDeBiblioteca, Usuario (Aluno, Professor), ItemBibliotecario (Livro, Revista), Emprestimo
    // Métodos:
    //   SistemaDeBiblioteca: registrarEmprestimo(), registrarDevolucao()
    //   Usuario: solicitarEmprestimo(), devolverItem()
    //   ItemBibliotecario: emprestar(), devolver()
    //   Emprestimo: finalizar()
    // =====================================

    class Emprestimo {
        public function finalizar() {}
    }

    abstract class ItemBibliotecario {
        public function emprestar() {}
        public function devolver() {}
    }

    class Livro extends ItemBibliotecario {}
    class Revista extends ItemBibliotecario {}

    abstract class Usuario {
        public function solicitarEmprestimo(ItemBibliotecario $item) {}
        public function devolverItem(ItemBibliotecario $item) {}
    }

    class Aluno extends Usuario {}
    class Professor extends Usuario {}

    class SistemaDeBiblioteca {
        public function registrarEmprestimo(Emprestimo $emprestimo) {}
        public function registrarDevolucao(Emprestimo $emprestimo) {}
    }
?>
