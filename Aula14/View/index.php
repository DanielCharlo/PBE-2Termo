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

<style>
/* === RESET & VARIÁVEIS === */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --primary: #3b82f6;
    --primary-hover: #2563eb;
    --secondary: #8b5cf6;
    --success: #10b981;
    --danger: #ef4444;
    --bg-dark: #0f172a;
    --bg-card: #1e293b;
    --bg-hover: #334155;
    --text-primary: #f1f5f9;
    --text-secondary: #94a3b8;
    --border: #334155;
}

/* === BODY === */
body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    min-height: 100vh;
    color: var(--text-primary);
    padding: 40px 20px;
}

/* === TÍTULOS === */
h1 {
    text-align: center;
    font-size: 2.8rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 20px;
    letter-spacing: -0.5px;
}

hr {
    border: none;
    height: 1px;
    background: var(--border);
    margin: 30px auto;
    max-width: 600px;
    opacity: 0.5;
}

h2 {
    text-align: center;
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--text-primary);
    margin: 60px 0 30px;
}

/* === FORMULÁRIO PRINCIPAL === */
body > form {
    background: var(--bg-card);
    padding: 30px;
    border-radius: 12px;
    max-width: 1000px;
    margin: 30px auto;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    border: 1px solid var(--border);
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    align-items: flex-end;
}

/* === INPUTS & SELECT === */
input[type="text"],
input[type="number"],
select {
    flex: 1 1 200px;
    min-width: 180px;
    padding: 12px 16px;
    border: 1px solid var(--border);
    border-radius: 8px;
    background: var(--bg-dark);
    color: var(--text-primary);
    font-size: 0.95rem;
    transition: all 0.2s ease;
    outline: none;
}

input::placeholder {
    color: var(--text-secondary);
}

input:focus,
select:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

select {
    cursor: pointer;
}

select option {
    background: var(--bg-dark);
    color: var(--text-primary);
}

/* === BOTÃO PRINCIPAL === */
body > form button[type="submit"] {
    padding: 12px 28px;
    background: var(--primary);
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 0.95rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
}

body > form button[type="submit"]:hover {
    background: var(--primary-hover);
    transform: translateY(-1px);
}

body > form button[type="submit"]:active {
    transform: translateY(0);
}

/* === TABELA === */
table {
    width: 98%;
    max-width: 1600px;
    margin: 0 auto;
    background: var(--bg-card);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    border-collapse: separate;
    border-spacing: 0;
    border: 1px solid var(--border);
}

/* === CABEÇALHO === */
th {
    background: var(--bg-dark);
    color: var(--text-primary);
    padding: 16px 20px;
    text-align: left;
    font-weight: 600;
    font-size: 0.9rem;
    border-bottom: 2px solid var(--border);
}

/* === CÉLULAS === */
td {
    padding: 16px 20px;
    border-bottom: 1px solid var(--border);
    color: var(--text-primary);
    vertical-align: middle;
    font-size: 0.95rem;
}

/* === LINHAS ALTERNADAS === */
tr:nth-child(even) td {
    background-color: rgba(30, 41, 59, 0.5);
}

tr:nth-child(odd) td {
    background-color: transparent;
}

tr:hover td {
    background: var(--bg-hover);
}

/* === FORMULÁRIOS INLINE === */
td form {
    display: inline-block;
    margin: 0;
    padding: 0;
    background: transparent;
    box-shadow: none;
    border-radius: 0;
    vertical-align: middle;
}

td label {
    display: block;
    font-size: 0.75rem;
    color: var(--text-secondary);
    margin-top: 10px;
    margin-bottom: 4px;
    font-weight: 500;
}

td input,
td select {
    width: 160px;
    margin: 4px 0;
    padding: 8px 12px;
    border: 1px solid var(--border);
    border-radius: 6px;
    background: var(--bg-dark);
    color: var(--text-primary);
    font-size: 0.85rem;
}

td input:focus,
td select:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.1);
}

/* === BOTÕES DA TABELA === */
td button {
    padding: 8px 16px;
    font-size: 0.85rem;
    font-weight: 600;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.2s ease;
    margin: 4px 6px 4px 0;
}

/* Botão Excluir */
td form:has(input[value="deletar"]) button {
    background: var(--danger);
    color: white;
}

td form:has(input[value="deletar"]) button:hover {
    background: #dc2626;
    transform: translateY(-1px);
}

/* Botão Atualizar */
td form:has(input[value="atualizar"]) button {
    background: var(--success);
    color: white;
}

td form:has(input[value="atualizar"]) button:hover {
    background: #059669;
    transform: translateY(-1px);
}

td button:active {
    transform: translateY(0);
}

/* === SCROLLBAR === */
::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    background: var(--bg-dark);
}

::-webkit-scrollbar-thumb {
    background: var(--border);
    border-radius: 5px;
}

::-webkit-scrollbar-thumb:hover {
    background: var(--bg-hover);
}

/* === RESPONSIVIDADE === */
@media (max-width: 1024px) {
    h1 {
        font-size: 2.2rem;
    }
    
    body > form {
        padding: 25px;
        flex-direction: column;
    }
    
    input[type="text"],
    input[type="number"],
    select {
        width: 100%;
        min-width: unset;
    }
}

@media (max-width: 768px) {
    body {
        padding: 20px 10px;
    }
    
    h1 {
        font-size: 1.8rem;
    }
    
    h2 {
        font-size: 1.5rem;
    }
    
    table {
        width: 100%;
        font-size: 0.85rem;
    }
    
    th, td {
        padding: 12px;
    }
    
    td input,
    td select {
        width: 100%;
    }
    
    td button {
        width: 100%;
        margin: 4px 0;
    }
    
    td form {
        display: block;
        width: 100%;
    }
}
</style>
</body>
</html>