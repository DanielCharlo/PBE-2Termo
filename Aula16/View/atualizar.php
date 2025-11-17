<?php
header('Content-Type: text/html; charset=UTF-8');

require_once __DIR__ . '/../Controller/BebidaController.php';

$controller = new BebidaController();

// 1. pegar dados enviados pelo formulário
$nome_original = $_POST['nome_original'] ?? null;
$nome          = $_POST['nome'] ?? null;
$categoria     = $_POST['categoria'] ?? null;
$volume        = $_POST['volume'] ?? null;
$valor         = $_POST['valor'] ?? null;
$qtde          = $_POST['qtde'] ?? null;

// 2. validação básica
if (!$nome_original || !$nome || !$categoria || !$volume || !$valor || !$qtde) {
    echo "Erro: todos os campos são obrigatórios.";
    exit;
}

// 3. chama o controller para atualizar
$controller->atualizar($nome_original, $nome, $categoria, $volume, $valor, $qtde);

// 4. volta para a página inicial
header("Location: index.php");
exit;