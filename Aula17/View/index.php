<?php
require_once __DIR__ . '/../Controller/LivroController.php';

$controller = new LivroController();
$acao = $_POST['acao'] ?? '';
$editarLivro = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

<<<<<<< HEAD
    // Create
=======
    // CREATE
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
    if ($acao === 'criar') {
        $controller->criar(
            trim($_POST['titulo']),
            trim($_POST['autor']),
<<<<<<< HEAD
            trim($_POST['genero']),
            (int) $_POST['anopublicacao'],
=======
            trim($_POST['anopublicacao']),
            (float) $_POST['genero'],
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
            (int) $_POST['qtde']
        );
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }

<<<<<<< HEAD
    // Delete
=======
    // DELETE
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
    if ($acao === 'deletar') {
        $controller->deletar(trim($_POST['titulo']));
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }

<<<<<<< HEAD
    // Edição
=======
    // EDIÇÃO
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
    if ($acao === 'editar') {
        $editarLivro = $controller->buscarPorTitulo(trim($_POST['titulo']));
    }

<<<<<<< HEAD
    // Atualizar
    if ($acao === 'atualizar') {
        $controller->atualizar(
        $_POST['titulo'],
        $_POST['novoTitulo'],
        $_POST['novoAutor'],
        $_POST['novoGenero'],
        $_POST['novoAnopublicacao'],
        $_POST['novaQtde']
    );

=======
    // ATUALIZAR
    if ($acao === 'atualizar') {
        $controller->atualizar(
            trim($_POST['titulo_original']),
            trim($_POST['titulo']),
            trim($_POST['autor']),
            trim($_POST['genero']),
            (int)($_POST['anopublicacao']),
            (int) $_POST['qtde']
        );
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }
}

<<<<<<< HEAD
// Ler os livros cadastrados
=======
// LER LIVROS CADASTRADOS
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca</title>
</head>
<body>

<div class="Container">
<h1>Gerenciamento de Livros</h1>
<br>

    <div class="Tabela">
    <h2>Livros Cadastrados</h2>
=======
    <title>Biblioteca</title>
</head>
<body>
<h1>Gerenciamento de Livros</h1>
<br>
<hr>
    <form method="POST">
    <input type="hidden" name="acao" value="salvar">
    <input type="text" name="titlo" placeholder="Titulo:" required>
    <input type="text" name="autor" placeholder="Autor:" required>
    <input type="number" name="genero" placeholder="Genero Literario:" required>
    <input type="number" name="anopublicacao" placeholder="Ano de Publicação:" required>
    <input type="number" name="qtde" placeholder="Quantidade:" required>
    <button type="submit">Cadastrar</button>
    </form>

    <h2>Livros cadastrados</h2>
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897
<table border="1" cellpadding="8">
    <tr>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Genero</th>
        <th>Ano de Publicação</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($lista as $livro): ?>
        <tr>
            <td><?= $livro->getTitulo(); ?></td>
            <td><?= $livro->getAutor(); ?></td>
            <td><?= $livro->getGenero(); ?></td>
            <td><?= $livro->getAnopublicacao(); ?></td>
            <td><?= $livro->getQtde(); ?></td>

            <td>
<<<<<<< HEAD
    <!-- Botão de excluir -->
    <form method="POST" style="display:inline;">
        <input type="hidden" name="acao" value="deletar">
        <input type="hidden" name="titulo" value="<?= $livro->getTitulo(); ?>">
        <button type="submit">Excluir</button>
    </form>

    <!-- Botão de editar -->
    <form method="POST" style="display:inline;">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="titulo" value="<?= $livro->getTitulo(); ?>">
    <button type="submit">Editar</button>
</form>


        </tr>
    <?php endforeach; ?>
</table>
</div>

<?php if (!$editarLivro): ?>
<div class="Cadastrar">
<h2>Cadastrar Livro</h2>
    <form method="POST">
    <input type="hidden" name="acao" value="criar">
    <input type="text" name="titulo" placeholder="Titulo:" required>
    <input type="text" name="autor" placeholder="Autor:" required>
    <input type="text" name="genero" placeholder="Genero Literario:" required>
    <input type="number" name="anopublicacao" placeholder="Ano de Publicação:" required>
    <input type="number" name="qtde" placeholder="Quantidade:" required >
    <button type="submit">Cadastrar</button>
    </form>
    </div>
<?php endif; ?>


<?php if ($editarLivro): ?>
    <div class="Atualizar">
    <h2>Editar Livro</h2>

    <form method="POST">
        <input type="hidden" name="acao" value="atualizar">
        <input type="hidden" name="titulo" value="<?= $editarLivro->getTitulo(); ?>">
        <input type="text" name="novoTitulo" placeholder="Novo Titulo:" value="<?= $editarLivro->getTitulo(); ?>" required>
        <input type="text" name="novoAutor" placeholder="Novo Autor:" value="<?= $editarLivro->getAutor(); ?>" required>>
        <input type="text" name="novoGenero" placeholder="Novo Genero:" value="<?= $editarLivro->getGenero(); ?>" required>
        <input type="number" name="novoAnopublicacao" placeholder="Ano de Publicação" value="<?= $editarLivro->getAnopublicacao(); ?>" required>
        <input type="number" name="novaQtde" placeholder="Nova Quantidade" value="<?= $editarLivro->getQtde(); ?>" required>

        <button type="submit">Atualizar</button>
    </form>
    </div>
<?php endif; ?>
</div>
=======
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="acao" value="deletar">
                    <input type="hidden" name="titulo" value="<?= $livro->getTitulo(); ?>">
                    <button type="submit">Excluir</button>
                    <br>
                </form>
                <form method="POST" style="display:inline;">
    <input type="hidden" name="acao" value="atualizar">
    <!-- nome original (para identificar no JSON) -->
    <input type="hidden" name="titulo" value="<?= $livro->getTitulo(); ?>">

    <label>Digite o novo Titulo:</label>
    <input type="text" name="novoTitulo" placeholder="Nome do Titulo" value="<?= $livro->getTitulo(); ?>" required>

    <label>Digite o novo Autor:</label>
    <input type="text" name="novoAutor" placeholder="Nome do Autor" value="<?= $livro->getAutor(); ?>" required>


    <label>Digite o novo Genero:</label>
    <input type="text" name="novoGenero" placeholder="Nome do Genero" value="<?= $livro->getGenero(); ?>" required>

    <label>Digite o Ano de Publicação:</label>
    <input type="number" name="novoAnopublicacao" value="<?= $livro->getAnopublicacao(); ?>" required>

    <label>Digite a nova quantidade:</label>
    <input type="number" name="novaQtde" value="<?= $livro->getQtde(); ?>" required>

    <button type="submit">Atualizar</button>
</form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
>>>>>>> 0126ede70a4bcdd8c98dfce9d506d78873b83897

</body>
</html>