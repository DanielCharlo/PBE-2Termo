<?php
header('Content-Type: text/html; charset=UTF-8');

require_once __DIR__ . '/../Controller/BebidaController.php';

$controller = new BebidaController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['acao'])) {
        if ($_POST['acao'] === 'salvar') {
            $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        } elseif ($_POST['acao'] === 'deletar') {
            $controller->deletar($_POST['nome']);
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        }
    }
}

$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de bebidas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        form {
            margin: 20px 0;
        }
        input, select, button {
            margin: 5px;
            padding: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn-deletar {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }
        .btn-deletar:hover {
            background-color: #da190b;
        }
        .btn-editar {
            background-color: #2196F3;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-editar:hover {
            background-color: #0b7dda;
        }
    </style>
</head>
<body>
    <h1>Gerenciamento de Bebidas</h1>
    <hr>
    
    <h2>Cadastrar Nova Bebida</h2>
    <form method="POST">
        <input type="hidden" name="acao" value="salvar">
        <input type="text" name="nome" placeholder="Nome da bebida" required>
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
        <input type="text" name="volume" placeholder="Volume (ex: 300ml)" required>
        <input type="number" name="valor" step="0.01" placeholder="Valor em Reais (R$)" required>
        <input type="number" name="qtde" placeholder="Quantidade em estoque" required>
        <button type="submit">Cadastrar</button>
    </form>

    <hr>
    
    <h2>Lista de Bebidas</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Volume</th>
                <th>Valor (R$)</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($lista)): ?>
                <tr>
                    <td colspan="6" style="text-align: center;">Nenhuma bebida cadastrada</td>
                </tr>
            <?php else: ?>
                <?php foreach ($lista as $bebida): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($bebida->getNome()); ?></td>
                        <td><?php echo htmlspecialchars($bebida->getCategoria()); ?></td>
                        <td><?php echo htmlspecialchars($bebida->getVolume()); ?></td>
                        <td><?php echo number_format($bebida->getValor(), 2, ',', '.'); ?></td>
                        <td><?php echo htmlspecialchars($bebida->getQtde()); ?></td>
                        <td>
                            <a href="editar.php?bebida=<?php echo urlencode($bebida->getNome()); ?>" class="btn-editar">Editar</a>
                            
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="acao" value="deletar">
                                <input type="hidden" name="nome" value="<?php echo htmlspecialchars($bebida->getNome()); ?>">
                                <button type="submit" class="btn-deletar" onclick="return confirm('Deseja realmente deletar esta bebida?')">Deletar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>