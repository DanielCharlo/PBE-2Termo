<?php
header('Content-Type: text/html; charset=UTF-8');

require_once __DIR__ . '/../Controller/BebidaController.php';

$controller = new BebidaController();

// 1. pegar nome da bebida da URL
$nome = $_GET['bebida'] ?? null;

if (!$nome) {
    echo "Erro: nenhuma bebida informada.";
    exit;
}

// 2. pegar lista de bebidas
$lista = $controller->ler();

// 3. procurar a bebida específica
$bebida = null;
foreach ($lista as $item) {
    if ($item->getNome() === $nome) {
        $bebida = $item;
        break;
    }
}

if (!$bebida) {
    echo "Bebida não encontrada.";
    exit;
}

// categorias disponíveis
$categorias = [
    "Refrigerante",
    "Cerveja",
    "Vinho",
    "Destilado",
    "Água",
    "Suco",
    "Energético"
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Bebida</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-sizing: border-box;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .btn-voltar {
            background-color: #999;
            margin-left: 10px;
        }
        .btn-voltar:hover {
            background-color: #777;
        }
    </style>
</head>
<body>

<h1>Editar Bebida</h1>

<form action="atualizar.php" method="POST">

    <!-- nome original escondido (para identificar qual bebida atualizar) -->
    <input type="hidden" name="nome_original" value="<?php echo htmlspecialchars($bebida->getNome()); ?>">

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($bebida->getNome()); ?>" required>

    <label for="categoria">Categoria:</label>
    <select id="categoria" name="categoria" required>
        <?php foreach ($categorias as $cat): ?>
            <option value="<?php echo htmlspecialchars($cat); ?>"
                <?php if ($cat === $bebida->getCategoria()) echo "selected"; ?>>
                <?php echo htmlspecialchars($cat); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="volume">Volume:</label>
    <input type="text" id="volume" name="volume" value="<?php echo htmlspecialchars($bebida->getVolume()); ?>" required>

    <label for="valor">Valor (R$):</label>
    <input type="number" id="valor" step="0.01" name="valor" value="<?php echo htmlspecialchars($bebida->getValor()); ?>" required>

    <label for="qtde">Quantidade:</label>
    <input type="number" id="qtde" name="qtde" value="<?php echo htmlspecialchars($bebida->getQtde()); ?>" required>

    <button type="submit">Salvar alterações</button>
    <button type="button" class="btn-voltar" onclick="window.location.href='index.php'">Cancelar</button>

</form>

</body>
</html>