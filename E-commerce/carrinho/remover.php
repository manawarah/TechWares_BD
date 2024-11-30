<?php
include_once('../database/conexao.php');
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: ../login/login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produtoId = $_POST['produto_id'];
    $emailSession = $_SESSION['email'];

    // Remover o produto do carrinho do usuário logado
    $sql = "DELETE FROM carrinho WHERE produto_id = '$produtoId' AND userEmail = '$emailSession'";
    if (mysqli_query($conexao, $sql)) {
        header('Location: carrinho.php');
    } else {
        echo "Erro ao remover o produto: " . mysqli_error($conexao);
    }
} else {
    header('Location: carrinho.php');
}
?>