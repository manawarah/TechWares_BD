

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAC - Atendimento</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>


<header>
<div class="logo">
            <a href="../index.php">
                <img src="../assets/Techware.png" alt="logo" width="200px" class="img">
            </a>
        </div>
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
                            <a class='nav-link' href='../sac/sac.php'>AO CLIENTE</a>
                        </div>
                        <div class='nav-div'>
                            <i class='fa-solid fa-star fa-lg' style='color: #e90313;'></i>
                            <span style='font-size: 10pt;'>MEUS</span>
                            <br>
                            <a class='nav-link' href='#'>FAVORITOS</a>
                        </div>
                    </nav>
</header>


<hr>

    <form action="formsac.php" method="post">
        <h2 style="margin: auto; text-align: center; color: red; font-size: 16pt ">SAC - Atendimento ao cliente</h1>

        <hr>

        <p style="color: white;">Estamos aqui para ajudar! Se você tiver alguma dúvida ou precisar de assistência, preencha o formulário abaixo.</p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" require placeholder="Digite seu nome">

        <label for="nome">E-mail:</label>
        <input type="email" name="email" id="email" require placeholder="Digite seu email">
        
        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" id="mensagem" rows="5"></textarea>

        <button type="submit" value="enviar" onclick="enviar()">Enviar</button>
    </form>
</body>
</html>