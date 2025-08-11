<?php
session_start();
require_once '../models/livro/Livro.php';
require_once '../models/livro/LivroRepository.php';

$livroRepository = new LivroRepository();

// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $autor  = $_POST['autor'] ?? '';
    $ano    = $_POST['ano'] ?? '';
    $isbn   = $_POST['isbn'] ?? '';

    // Validação simples
    if ($titulo && $autor && $ano && $isbn) {
        $livro = new Livro($titulo, $autor, $ano, $isbn);
        $livroRepository->adicionar($livro);

        $_SESSION['mensagem'] = "📚 Livro cadastrado com sucesso!";
    } else {
        $_SESSION['mensagem'] = "⚠️ Preencha todos os campos!";
    }

    // Redireciona de volta para a página principal
    header("Location: cad.php");
    exit;
} else {
    // Se acessado diretamente sem POST
    $_SESSION['mensagem'] = "⚠️ Acesso inválido!";
    header("Location: cad.php");
    exit;
}
