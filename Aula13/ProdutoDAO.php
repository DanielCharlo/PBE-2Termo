<?php 

namespace Aula14;

class ProdutoDAO {
    private $produtos = [];
    private $arquivo = 'produtos.json';

    public function __construct() {
        if (file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);
            $dados = json_decode($conteudo, true);

            if ($dados) {
                foreach ($dados as $id => $info) {
                    $this->produtos[$id] = new Produto(
                        $info["codigo"],
                        $info["nome"],
                        $info["preco"]
                    );
                }
            }
        }
    }

    private function salvarEmArquivo() {
        $dados = [];

        foreach ($this->produtos as $id => $produto) {
            $dados[$id] = [
                "codigo" => $produto->getCodigo(),
                "nome"   => $produto->getNome(),
                "preco"  => $produto->getPreco()
            ];
        }

        file_put_contents($this->arquivo, json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    public function criarProduto(Produto $produto) {
        $this->produtos[$produto->getCodigo()] = $produto;
        $this->salvarEmArquivo();
    }

    public function lerProduto() {
        return $this->produtos;
    }

    public function atualizarProduto($codigo, $novoNome, $novoPreco) {
        if (isset($this->produtos[$codigo])) {
            $this->produtos[$codigo]->setNome($novoNome);
            $this->produtos[$codigo]->setPreco($novoPreco);
            $this->salvarEmArquivo();
        }
    }

    public function excluirProduto($codigo) {
        if (isset($this->produtos[$codigo])) {
            unset($this->produtos[$codigo]);
            $this->salvarEmArquivo();
        }
    }
}

?>
