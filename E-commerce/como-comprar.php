<?php 
include_once('./database/conexao.php');
session_start();
$email = $_SESSION['email'] ?? '';
$sql = mysqli_query($conexao, "SELECT * FROM users WHERE email = '$email';");
$return = $sql->fetch_assoc();

$name = $return['nome'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- O arquivo default.css tem como função armazenar/salvar estilos que serão usados em várias ocasiões em outras páginas -->
    <link rel="stylesheet" href="styles/defaults.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Como Comprar | TechWareJP</title>
</head>

<body>

    <!-- Cabeçalho do site -->

    <header class="cabecalho">
        <div class="logo">
            <a href="#">
                <img src="assets/Techware.png" alt="logo" width="200px" class="img">
            </a>
        </div>
        <?php
        if (isset($_SESSION['email']) == true) {
            echo "
                <nav class='nav-bar'>
                    <div class='nav-div'>
                        <i class='fa-solid fa-circle-question fa-lg' style='color: #e90313;'></i>
                        <span style='font-size: 10pt;'>ATENDIMENTO</span>
                        <br>
                        <a class='nav-link' href='cliente/cliente.php'>AO CLIENTE</a>
                    </div>
                    <div class='nav-div'>
                        <i class='fa-solid fa-star fa-lg' style='color: #e90313;'></i>
                        <span style='font-size: 10pt;'>MEUS</span>
                        <br>
                        <a class='nav-link' href='#'>FAVORITOS</a>
                    </div>
                    <div class='nav-div'>
                        <i class='fa-solid fa-user fa-lg' style='color: #e90313;'></i>
                        <span style='font-size: 10pt;'>MINHA CONTA</span>
                        <br>
                        <p class='nav-link'>Olá $name</p>
                    </div>
                    <div class='nav-div' style='color: #e90313;'>
                        <i class='fa-solid fa-right-from-bracket fa-lg'></i>
                        <a href='logoff.php' class='nav-link' style='margin: 0 10px'>SAIR</a>
                        <br>
                    </div>
                    <button class='btn-carrinho'>
                        <a href='carrinho/carrinho.php' class='fa-solid fa-cart-shopping fa-lg' style='color: white; text-decoration: none;'></a>
                    </button>
                </nav>

            ";
        } else {
            echo "
                <nav class='nav-bar'>
                    <div class='nav-div'>
                        <i class='fa-solid fa-user' fa-lg style='color: #e90313;'></i>
                        <span style='font-size: 10pt;'>MINHA CONTA</span>
                        <br>
                        <a class='nav-link' href='login/login.php'>ENTRAR/CADASTRO</a>
                    </div>
                    <div class='nav-div'>
                        <i class='fa-solid fa-circle-question fa-lg' style='color: #e90313;'></i>
                        <span style='font-size: 10pt;'>ATENDIMENTO</span>
                        <br>
                        <a class='nav-link' href='/cliente/cliente.html'>AO CLIENTE</a>
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

    <!-- Página de Como Comprar -->

    <main class="como-comprar">
        <section class="info-como-comprar">
            <h1 class="title-page">Como Comprar na TechWareJP</h1>
            <p class="text-como-comprar">
                Bem-vindo à nossa página de instruções! Aqui, você aprenderá como comprar os melhores produtos no nosso site.
            </p>
            <h2>Passo 1: Crie uma Conta</h2>
            <p class="text-como-comprar">
                Para realizar suas compras, é necessário criar uma conta na TechWareJP. Clique em "Entrar/Cadastro" na parte superior da página para criar sua conta.
            </p>
            <h2>Passo 2: Navegue pelos Produtos</h2>
            <p class="text-como-comprar">
                Após logar, navegue pelas diversas categorias de produtos como hardware, periféricos, computadores, etc. Utilize os filtros para refinar sua busca.
            </p>
            <h2>Passo 3: Adicione ao Carrinho</h2>
            <p class="text-como-comprar">
                Selecione os produtos que deseja comprar e clique em "Adicionar ao Carrinho". Você pode continuar comprando ou finalizar a compra.
            </p>
            <h2>Passo 4: Finalize sua Compra</h2>
            <p class="text-como-comprar">
                Após adicionar todos os produtos ao carrinho, clique no ícone de carrinho no canto superior direito da página para revisar seu pedido e finalizar a compra.
            </p>
        </section>
    </main>

    <footer>
        <ul>
            <li style="color: red;">Redes Sociais</li>
            <li>Instagram</li>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Whatsapp</li>
        </ul>
        <ul>
            <li style="color: red;">Conheça-nos</li>
            <li>Sobre o e-commerce</li>
            <li>Comunicados</li>
            <li>Comunidade</li>
            <li>Acessibilidade</li>
        </ul>
        <ul>
            <li style="color: red;">Formas de pagamento</li>
            <li>PIX</li>
            <li>Boleto</li>
            <li>Paypal</li>
            <li>Cartão de Crédito</li>
        </ul>
        <ul>
            <li style="color: red;">Outros</li>
            <li>Receba dinheiro conosco</li>
            <li>Realize vendas no e-commerce</li>
            <li>Proteja e construa o seu PC</li>
            <li>Anuncie os seus Produtos</li>
            <li><a href="como-comprar.php">Como Comprar</a></li> <!-- Link mantido aqui -->
        </ul>
    </footer>
</body>

</html>
