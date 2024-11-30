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
    <script>
        function adicionarAoCarrinho(produtoId) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "../carrinho/adicionar.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        alert("Produto adicionado ao carrinho!");
                        // Atualizar a interface do carrinho, se necessário
                    } else {
                        alert("Erro ao adicionar produto ao carrinho.");
                    }
                }
            };

            xhr.send("produto_id=" + produtoId + "&quantidade=1");
        }
    </script>
</head>
<body>
    <header>
        <a href="../index.php" class="fa-solid fa-right-from-bracket fa-lg"></a>
    </header>
    <main style="display: flex; justify-content: center; flex-wrap: wrap;">
        <section class="section-img">
            <img src="../<?= $produto["foto"] ?>" alt="">
        </section>
        <section class="section-desc">
            <h1 style="font-size: 30px;"><?= $produto["nome"] ?></h1>
            <p><?= $produto["descricao"] ?></p>
            <div style="display: flex; margin: 30px 0;">
                <a href="../product/cartao.php?id=<?= $id ?>" class="btn-comprar">R$ <?= str_replace(".", ",", $produto["preco"]) ?></a>
                <button class="btn-carrinho" onclick="adicionarAoCarrinho(<?= $id ?>)">
                    <i class='fa-solid fa-cart-shopping fa-lg' style='color: white;'></i>
                </button>
            </div>
        </section>
    </main>
    <section class="section-info" style="width: 100%; display: flex; justify-content: center; margin-top: 20px;">
        <table style="width: 80%; border-collapse: collapse; background-color: #fff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
            <thead>
                <tr style="background-color: #424242; color: white;">
                    <th style="padding: 10px; text-align: left;">Atributo</th>
                    <th style="padding: 10px; text-align: left;">Descrição</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ccc;">Marca</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ccc;"><?= htmlspecialchars($produto["marca"] ?? 'N/A') ?></td>
                </tr>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ccc;">Dimensões</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ccc;"><?= htmlspecialchars($produto["dimensoes"] ?? 'N/A') ?></td>
                </tr>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ccc;">Peso</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ccc;"><?= htmlspecialchars($produto["peso"] ?? 'N/A') ?></td>
                </tr>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ccc;">Cor</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ccc;"><?= htmlspecialchars($produto["cor"] ?? 'N/A') ?></td>
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>