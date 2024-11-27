<?php 

    include_once('../database/conexao.php');

    if($_GET["id"]){
        $id = $_GET["id"];

        $produtoBD = mysqli_query($conexao,"SELECT * FROM produtos WHERE idProduto = $id");
        $produto = $produtoBD->fetch_assoc();

    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="preview.css">
    <link rel="stylesheet" href="../styles/defaults.css">
    <title><?= $produto["nome"] ?></title>
</head>
<body>
    <main style="display: flex; justify-content: center; flex-wrap: wrap;">
        <section class="section-img">
            <img src="../<?= $produto["foto"] ?>" alt="">
        </section>
        <section class="section-desc">
            <h1><?= $produto["nome"] ?></h1>
            <p><?= $produto["descricao"] ?></p>
        </section>
    </main>
</body>
</html>