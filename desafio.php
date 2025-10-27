<?php 
    class Livro{

        private int $id;
        private string $titulo;
        private string $autor;
        private string $descricao;
        private string $editora;
        private string $genero;
        private float $valor;
        private int $ano;
        private int $idadeR;

        public function __construct(int $id, string $titulo, string $autor, string $descricao, string $editora, string $genero, int $valor, float $ano, int $idadeR){
            $this->id = $id;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->descricao = $descricao;
            $this->editora = $editora;
            $this->genero = $genero;
            $this->valor = $valor;
            $this->ano = $ano;
            $this->idadeR = $idadeR;
        }

        public function getId(){ return $this->id; }
        public function getTitulo(){ return $this->titulo; }
        public function getAutor(){ return $this->autor; }
        public function getDescricao(){ return $this->descricao; }
        public function getEditora(){ return $this->editora; }
        public function getGenero(){ return $this->genero; }
        public function getValor(){ return $this->valor; }
        public function getAno(){ return $this->ano; }
        public function getIdadeR(){ return $this->idadeR; }

        public function setId(int $id){ $this->id = $id; }
        public function setTitulo(string $titulo){ $this->titulo = $titulo; }
        public function setAutor(string $autor){ $this->autor = $autor; }
        public function setDescricao(string $descricao){ $this->descricao = $descricao; }
        public function setEditora(string $editora){ $this->editora = $editora; }
        public function setGenero(string $genero){ $this->genero = $genero; }
        public function setValor(float $valor){ $this->valor = $valor; }
        public function setAno(int $ano){ $this->ano = $ano; }
        public function setIdadeR(int $idadeR){ $this->idadeR = $idadeR; }

        public function exibirLivro(){
            return "Título : {$this->titulo}\nAutor : {$this->autor}\nDescrição : {$this->descricao}\nEditora : {$this->editora}\nGênero : {$this->genero}\nValor : {$this->valor}\nAno : {$this->ano}\nIdade recomendada : {$this->idadeR}\n";
        }

        private function alterarLivro(int $id,string $titulo, string $autor, string $descricao, string $editora, string $genero, float $valor, int $ano, int $idadeR){
            $this->id = $id;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->descricao = $descricao;
            $this->editora = $editora;
            $this->genero = $genero;
            $this->valor = $valor;
            $this->ano = $ano;
            $this->idadeR = $idadeR;
        }
    }

    $ocsgFF1ddsw5IHuXnxfL2ZtIrG85l3 = new Livro(
    1,
    "A Divina Comédia",
    "Dante Alighieri",
    "Poema épico do século XIV que descreve a jornada pelo Inferno, Purgatório e Paraíso.",
    "LandMark",   
    "Clássico / Poesia épica",
    149.90,       
    1320,       
    14           
    );

    $ocsgFF1ddswSIlHuXnxfL2ZtIrG85l3 = new Livro(
    2,
    "O Poder do Hábito",
    "Charles Duhigg",
    "Livro de não ficção que explora como os hábitos funcionam, como se formam e como podem ser transformados para melhorar a vida pessoal e profissional.",
    "Objetiva",   
    "Autoajuda / Psicologia",
    59.90,       
    2012,       
    12            
    );

    $ocsgFF1ddsw5IHuXnxfL2ZtIrG85l3 = new Livro(
    3,
    "O Alquimista",
    "Paulo Coelho",
    "Romance filosófico que narra a jornada de Santiago, um jovem pastor andaluz em busca de sua 'lenda pessoal'.",
    "Paralela",   
    "Romance / Ficção filosófica",
    44.90,        
    1988,         
    12            
    );

    $ocsgFFlddsw5IHuXnxfL2ZtIrG85l3 = new Livro(
    4,
    "O Senhor dos Anéis",
    "J. R. R. Tolkien",
    "Obra épica de fantasia que narra a luta entre o bem e o mal na Terra-média, acompanhando a jornada da Sociedade do Anel para destruir o Um Anel.",
    "HarperCollins Brasil",   
    "Fantasia / Aventura",
    199.90,     
    1954,      
    14         
    );

    $ocsgFF1ddsw5lHuXnxfL2ZtlrG85l3 = new Livro(
    5,
    "Percy Jackson e a Batalha do Labirinto",
    "Rick Riordan",
    "Quarto livro da saga 'Percy Jackson e os Olimpianos'. Percy e seus amigos precisam enfrentar o perigoso Labirinto de Dédalo para impedir os planos de Luke e do exército de Cronos.",
    "Intrínseca",  
    "Fantasia / Aventura",
    49.90,          
    2008,           
    12             
    );

    $livros = [
    $ocsgFF1ddsw5IHuXnxfL2ZtIrG85l3,    
    $ocsgFF1ddswSIlHuXnxfL2ZtIrG85l3,    
    $ocsgFF1ddsw5IHuXnxfL2ZtIrG8513,      
    $ocsgFFlddsw5IHuXnxfL2ZtIrG85l3,     
    $ocsgFF1ddsw5lHuXnxfL2ZtlrG85l3       
];

    foreach ($livros as $i => $livro) {
        echo "\n--- Testando objeto Livro " . ($i+1) . " ---\n";

        echo "ID: " . $livro->getId() . "\n";
        echo "Título: " . $livro->getTitulo() . "\n";
        echo "Autor: " . $livro->getAutor() . "\n";
        echo "Descrição: " . $livro->getDescricao() . "\n";
        echo "Editora: " . $livro->getEditora() . "\n";
        echo "Gênero: " . $livro->getGenero() . "\n";
        echo "Valor: " . $livro->getValor() . "\n";
        echo "Ano: " . $livro->getAno() . "\n";
        echo "Idade recomendada: " . $livro->getIdadeR() . "\n";

        $livro->setTitulo($livro->getTitulo() . " [TESTE]");
        $livro->setAutor($livro->getAutor() . " Jr.");
        $livro->setDescricao($livro->getDescricao() . " Alterado para teste.");
        $livro->setEditora($livro->getEditora() . " Editado");
        $livro->setGenero($livro->getGenero() . " Teste");
        $livro->setValor($livro->getValor() + 10);
        $livro->setAno($livro->getAno() + 1);
        $livro->setIdadeR($livro->getIdadeR() + 1);

        echo $livro->exibirLivro();

        $livro->alterarlivro(
            999,
            "Alterado diretamente",
            "Autor X",
            "Descrição X",
            "Editora X",
            "Gênero X",
            123.45,
            2025,
            99
        );

        echo $livro->exibirLivro();
    }

?>