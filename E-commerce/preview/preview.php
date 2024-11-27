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
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <title><?= $produto["nome"] ?></title>
</head>
<body>
    <main style="display: flex; justify-content: center; flex-wrap: wrap;">
        <section class="section-img">
            <img src="../<?= $produto["foto"] ?>" alt="">
        </section>
        <section class="section-desc">
            <h1 style="font-size: 30px;"><?= $produto["nome"] ?></h1>
            <p><?= $produto["descricao"] ?></p>
            <div style="display: flex; margin: 30px 0;">
                <a href="../product/cartao.php?id=<?= $id ?>" class="btn-comprar">R$ <?= str_replace(".", ",", $produto["preco"]) ?></a>
                <button class="btn-carrinho">
                    <i class='fa-solid fa-cart-shopping fa-lg' style='color: white;'></i>
                </button>
            </div>
        </section>
    </main>
</body>
</html>