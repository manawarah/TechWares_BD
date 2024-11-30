<?php
include_once('../database/conexao.php');
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: ../login/login.php');
    exit();
}

$emailSession = $_SESSION['email'];
$produtoId = $_POST['produto_id'] ?? null;
$quantidade = $_POST['quantidade'] ?? 1;

if ($produtoId) {
    // Verifica se o produto já está no carrinho
    $query = "SELECT * FROM carrinho WHERE userEmail = '$emailSession' AND produto_id = $produtoId";
    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) > 0) {
        // Atualiza a quantidade do produto no carrinho
        $query = "UPDATE carrinho SET quantidade = quantidade + $quantidade WHERE userEmail = '$emailSession' AND produto_id = $produtoId";
    } else {
        // Adiciona o produto ao carrinho
        $query = "INSERT INTO carrinho (userEmail, produto_id, quantidade) VALUES ('$emailSession', $produtoId, $quantidade)";
    }

    if (mysqli_query($conexao, $query)) {
        echo "Produto adicionado ao carrinho com sucesso!";
    } else {
        echo "Erro ao adicionar produto ao carrinho: " . mysqli_error($conexao);
    }
} else {
    echo "Produto inválido.";
}
?>