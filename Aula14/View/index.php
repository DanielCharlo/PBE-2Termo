<?php
require_once __DIR__ . '/../Controller/bebidaController.php';

$controller = new BebidaController();

// Ações da página
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'salvar') {
        $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
    } elseif ($_POST['acao']== 'atualizar') {
        $controller->atualizar($_POST['nome'],$_POST['novoNome'],$_POST['novaCategoria'],$_POST['novoVolume'],$_POST['novoValor'],$_POST['novaQtde']);
    }
}

$lista = $controller->ler();
?>

<!-- Formulário em HTML -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de bebidas</title>
</head>
<body>
<h1>Gerenciamento de bebidas</h1>
<br>
<hr>
    <form method="POST">
    <input type="hidden" name="acao" value="salvar">
    <input type="text" name="nome" placeholder="Nome da bebida:" required>
    <select name="categoria" required>
        <option value="">Selecione a categoria</option>
        <option value="Refrigerante">Refrigerante</option>
        <option value="Cerveja">Cerveja</option>
        <option value="Vinho">Vinho</option>
        <option value="Destilado">Destilado</option>
        <option value="Água">Água</option>
        <option value="Suco">Suco</option>
        <option value="Energético">Energético</option>
    </select>
    <input type="text" name="volume" placeholder="Volume (ex: 300ml):" required>
    <input type="number" name="valor" step="0.01" placeholder="Valor em Reais (R$):" required>
    <input type="number" name="qtde" placeholder="Quantidade em estoque:" required>
    <button type="submit">Cadastrar</button>
    </form>

    <h2>Bebidas cadastradas</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Volume</th>
        <th>Valor (R$)</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($lista as $bebida): ?>
        <tr>
            <td><?= $bebida->getNome(); ?></td>
            <td><?= $bebida->getCategoria(); ?></td>
            <td><?= $bebida->getVolume(); ?></td>
            <td><?= $bebida->getValor(); ?></td>
            <td><?= $bebida->getQtde(); ?></td>

            <td>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="acao" value="deletar">
                    <input type="hidden" name="nome" value="<?= $bebida->getNome(); ?>">
                    <button type="submit">Excluir</button>
                    <br>
                </form>
                <form method="POST" style="display:inline;">
    <input type="hidden" name="acao" value="atualizar">
    <!-- nome original (para identificar no JSON) -->
    <input type="hidden" name="nome" value="<?= $bebida->getNome(); ?>">

    <label>Digite o novo nome:</label>
    <input type="text" name="novoNome" placeholder="Nome da bebida" value="<?= $bebida->getNome(); ?>" required>

    <label>Selecione a categoria:</label>
    <select name="novaCategoria" required>
        <option value="">Selecione a categoria</option>
        <option value="Refrigerante" <?= $bebida->getCategoria() == "Refrigerante" ? "selected" : "" ?>>Refrigerante</option>
        <option value="Cerveja" <?= $bebida->getCategoria() == "Cerveja" ? "selected" : "" ?>>Cerveja</option>
        <option value="Vinho" <?= $bebida->getCategoria() == "Vinho" ? "selected" : "" ?>>Vinho</option>
        <option value="Destilado" <?= $bebida->getCategoria() == "Destilado" ? "selected" : "" ?>>Destilado</option>
        <option value="Água" <?= $bebida->getCategoria() == "Água" ? "selected" : "" ?>>Água</option>
        <option value="Suco" <?= $bebida->getCategoria() == "Suco" ? "selected" : "" ?>>Suco</option>
        <option value="Energético" <?= $bebida->getCategoria() == "Energético" ? "selected" : "" ?>>Energético</option>
    </select>

    <label>Digite o novo volume:</label>
    <input type="text" name="novoVolume" placeholder="Volume (ex: 350ml)" value="<?= $bebida->getVolume(); ?>" required>

    <label>Digite o novo valor:</label>
    <input type="number" name="novoValor" step="0.01" value="<?= $bebida->getValor(); ?>" required>

    <label>Digite a nova quantidade:</label>
    <input type="number" name="novaQtde" value="<?= $bebida->getQtde(); ?>" required>

    <button type="submit">Atualizar</button>
</form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>