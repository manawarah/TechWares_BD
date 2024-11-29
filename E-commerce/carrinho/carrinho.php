<?php 
    include_once('../database/conexao.php');
    session_start();
    if(isset($_SESSION['email']) == false){

        header('Location: ../login/login.php');
    }

    $emailSession = $_SESSION['email'];

    $sql = mysqli_query($conexao, "SELECT * FROM carrinho WHERE userEmail = '$emailSession'");

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" ../styles.css">
    <link rel="stylesheet" href=" ../preview/preview.css">
    <link rel="stylesheet" href="carrinho.css">
    <!-- O arquivo default.css serve para guardar estilos que serão usados várias vezes em outras páginas -->
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
        if (isset($_SESSION['email']) == true) {
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
                if($sql->fetch_assoc() == null){
                    echo "
                        <p class='msg'>Não tem produtos no carrinho</p>
                        ";
                } else {
                    while($sql2 = $sql->fetch_assoc()){
                        echo $sql2["nome"];
                    }
                }
            ?>
        </section>
        <section class="footer-rodape">
            <div>
                <h1 style="color: white; padding: 0 0 10px 10px; font-size: 30px;">R$ </h1>
                <a href="" class="btn-comprar">Comprar</a>
            </div>
        </section>
    </main>
</body>
</html>