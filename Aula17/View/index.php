<?php
require_once __DIR__ . '/../Controller/LivroController.php';

$controller = new LivroController();
$acao = $_POST['acao'] ?? '';
$editarLivro = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Create
    if ($acao === 'criar') {
        $controller->criar(
            trim($_POST['titulo']),
            trim($_POST['autor']),
            trim($_POST['genero']),
            (int) $_POST['anopublicacao'],
            (int) $_POST['qtde']
        );
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }

    // Delete
    if ($acao === 'deletar') {
        $controller->deletar(trim($_POST['titulo']));
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }

    // Edição
    if ($acao === 'editar') {
        $editarLivro = $controller->buscarPorTitulo(trim($_POST['titulo']));
    }

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

        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }
}

// Ler os livros cadastrados
$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca</title>
</head>
<body>

<div class="Container">
<h1>Gerenciamento de Livros</h1>
<br>

    <div class="Tabela">
    <h2>Livros Cadastrados</h2>
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
        <input type="text" name="novoAutor" placeholder="Novo Autor:" value="<?= $editarLivro->getAutor(); ?>" required>
        <input type="text" name="novoGenero" placeholder="Novo Genero:" value="<?= $editarLivro->getGenero(); ?>" required>
        <input type="number" name="novoAnopublicacao" placeholder="Ano de Publicação" value="<?= $editarLivro->getAnopublicacao(); ?>" required>
        <input type="number" name="novaQtde" placeholder="Nova Quantidade" value="<?= $editarLivro->getQtde(); ?>" required>

        <button type="submit">Atualizar</button>
    </form>
    </div>
<?php endif; ?>
</div>

</body>
</html>