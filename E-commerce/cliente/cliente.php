<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/defaults.css">
    <link rel="stylesheet" href="cliente.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <title>Atendimento ao Cliente</title>
</head>
<body style="width: 100%;">
    <header class="cabecalho">
        <div class="logo">
            <a href="../index.php"><img src="../assets/Techware.png" alt="logo" width="200px"></a>
        </div>
        <nav class="nav-bar">
            <div class="nav-div">
                <i class="fa-solid fa-star fa-lg" style="color: #e90313;"></i>
                <span style="font-size: 10pt;">MEUS</span>
                <br>
                <a class="nav-link" href="#">FAVORITOS</a>
            </div>
            <div class="nav-div">
                <i class="fa-solid fa-user fa-lg" style="color: #e90313;"></i>
                <span style="font-size: 10pt;">MINHA CONTA</span>
                <br>
                <a class="nav-link" href="../login/login.php">ENTRAR / CADASTRO</a>
            </div>
        </nav>
        <button class="btn-carrinho">
            <i class="fa-solid fa-cart-shopping fa-lg" style="color: white;"></i>
        </button>
    </header>

    <main class="container">

            <div class="div-tipografia">
                <nav class="nav-tipografia">
                    <ol class="ol-tipografia">
                        <li class="li-tipografia"><a href="../index.php"><i class="fa-solid fa-house fa-2xs" style="color: #ffffff;"></i></a></li>
                        <li class="li-tipografia"><i class="fa-solid fa-chevron-right fa-2xs" style="color: #ffffff;"></i></li>
                        <li class="li-tipografia"><p style="color: white;">Atendimento ao Cliente</p></li>
                    </ol>
                </nav>
            </div>

            <section class="clienteDuvidas">
                
                <div class="duvidas">
                    <h2 style="font-size: 30pt; color: white; margin-top: 2%;">Dúvidas frequentes</h2>
                    <button class="btn-duvidas">
                        DÚVIDAS SOBRE CADASTRO <i class="fa-solid fa-chevron-right fa-2xs" style="color: #ffffff;"></i>
                    </button>
                    <button class="btn-duvidas">
                        DÚVIDAS SOBRE PAGAMENTO <i class="fa-solid fa-chevron-right fa-2xs" style="color: #ffffff;"></i>
                    </button>
                    <button class="btn-duvidas">
                        DÚVIDAS SOBRE ENTREGA <i class="fa-solid fa-chevron-right fa-2xs" style="color: #ffffff;"></i>
                    </button>
                    <button class="btn-duvidas">
                        DÚVIDAS SOBRE TROCA E DEVOLUÇÃO <i class="fa-solid fa-chevron-right fa-2xs" style="color: #ffffff;"></i>
                    </button>
                    <button class="btn-duvidas">
                        DÚVIDAS SOBRE CADASTRO <i class="fa-solid fa-chevron-right fa-2xs" style="color: #ffffff;"></i>
                    </button>

                    <h2 style="font-size: 30pt; color: white; margin-top: 2%;">Serviços mais buscados</h2>
                    <button class="btn-duvidas">
                        DÚVIDAS SOBRE O SEU PEDIDO <i class="fa-solid fa-chevron-right fa-2xs" style="color: #ffffff;"></i>
                    </button>
                    <button class="btn-duvidas">
                        ENTENDA AS ETAPAS DA SUA COMPRA <i class="fa-solid fa-chevron-right fa-2xs" style="color: #ffffff;"></i>
                    </button>
                </div>
                <div class="imgTech">
                    <img src="tech.png" alt="imgTech" width="100%" style="margin-top: 10%;">
                </div>
                
            </section>
    </main>
</body>
</html>