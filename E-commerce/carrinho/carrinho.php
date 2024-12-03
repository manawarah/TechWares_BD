<?php 
include_once('../database/conexao.php');
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: ../login/login.php');
    exit();
}

$emailSession = $_SESSION['email'];

// Consulta para obter os produtos do carrinho do usuário logado
$sql = mysqli_query($conexao, "
    SELECT p.idProduto, p.nome, p.preco, p.foto, c.quantidade 
    FROM carrinho c 
    JOIN produtos p ON c.produto_id = p.idProduto 
    WHERE c.userEmail = '$emailSession'
");

if (!$sql) {
    die("Erro na consulta: " . mysqli_error($conexao));
}

$total = 0;
while ($produto = mysqli_fetch_assoc($sql)) {
    $total += $produto["preco"] * $produto["quantidade"];
    $produtos[] = $produto;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../preview/preview.css">
    <link rel="stylesheet" href="carrinho.css">
    <link rel="stylesheet" href="../styles/defaults.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <title>Carrinho</title>
</head>
<body>
<header class="cabecalho">
    <div class="logo">
        <a href="../">
            <img src="../assets/Techware.png" alt="logo" width="200px" class="img">
        </a>
    </div>
    <?php
    if (isset($_SESSION['email'])) {
        echo "
            <nav class='nav-bar'>
                <div class='nav-div'>
                    <i class='fa-solid fa-circle-question fa-lg' style='color: #e90313;'></i>
                    <span style='font-size: 10px;'>ATENDIMENTO</span>
                    <br>
                    <a class='nav-link' href='../cliente/cliente.php'>AO CLIENTE</a>
                </div>
                <div class='nav-div'>
                    <i class='fa-solid fa-star fa-lg' style='color: #e90313;'></i>
                    <span style='font-size: 10px;'>MEUS</span>
                    <br>
                    <a class='nav-link' href='#'>FAVORITOS</a>
                </div>
                <div class='nav-div' style='color: #e90313;'>
                    <i class='fa-solid fa-right-from-bracket fa-lg'></i>
                    <a href='../logoff.php' class='nav-link' style='margin: 0 10px'>SAIR</a>
                    <br>
                </div>
            </nav>
        ";
    } else {
        echo "
            <nav class='nav-bar'>
                <div class='nav-div'>
                    <i class='fa-solid fa-user' fa-lg style='color: #e90313;'></i>
                    <span style='font-size: 10pt;'>MINHA CONTA</span>
                    <br>
                    <a class='nav-link' href='../login/login.php'>ENTRAR/CADASTRO</a>
                </div>
                <div class='nav-div'>
                    <i class='fa-solid fa-circle-question fa-lg' style='color: #e90313;'></i>
                    <span style='font-size: 10pt;'>ATENDIMENTO</span>
                    <br>
                    <a class='nav-link' href='../cliente/cliente.html'>AO CLIENTE</a>
                </div>
                <div class='nav-div'>
                    <i class='fa-solid fa-star fa-lg' style='color: #e90313;'></i>
                    <span style='font-size: 10pt;'>MEUS</span>
                    <br>
                    <a class='nav-link' href='#'>FAVORITOS</a>
                </div>
            </nav>
        ";
    }
    ?>
</header>

<main>
    <section>
        <?php 
            if (empty($produtos)) {
                echo "<p class='msg'>Não tem produtos no carrinho</p>";
            } else {
                foreach ($produtos as $produto) {
                    echo "<div class='produto'>";
                    echo "<img src='../" . htmlspecialchars($produto["foto"]) . "' alt='" . htmlspecialchars($produto["nome"]) . "' style='width: 100px; height: auto;'>";
                    echo "<h2>" . htmlspecialchars($produto["nome"]) . "</h2>";
                    echo "<p>Preço: R$ " . htmlspecialchars($produto["preco"]) . "</p>";
                    echo "<p>Quantidade: " . htmlspecialchars($produto["quantidade"]) . "</p>";
                    echo "<form action='remover.php' method='POST'>";
                    echo "<input type='hidden' name='produto_id' value='" . htmlspecialchars($produto["idProduto"]) . "'>";
                    echo "<button type='submit' class='btn-remover'>Remover</button>";
                    echo "</form>";
                    echo "</div>";
                }
            }
        ?>
    </section>
    <section class="footer-rodape">
        <div>
            <h1 style="color: white; padding: 0 0 10px 10px; font-size: 30px;">Total: R$ <?php echo number_format($total, 2, ',', '.'); ?></h1>
            <a href="../product/cartao.php" class="btn-comprar">Comprar</a>
        </div>
    </section>
</main>
</body>
</html>