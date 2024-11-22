<?php
    $email = $_POST['email'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../styles/defaults.css">
    <title>Login</title>
</head>
<body>  
<header class="cabecalho">
    <div class="logo">
        <a href="../index.php"><img src="../assets/Techware.png" alt="logo" width="200px" class="img-header"></a>
    </div>
    <nav class="nav-bar">
        <div class="nav-div">
            <i class="fa-solid fa-circle-question fa-lg" style="color: #e90313;"></i>
            <span style="font-size: 10pt;">ATENDIMENTO</span>
            <br>
            <a class="nav-link" href="#">AO CLIENTE</a>
        </div>
        <div class="nav-div">
            <i class="fa-solid fa-star fa-lg" style="color: #e90313;"></i>
            <span style="font-size: 10pt;">MEUS</span>
            <br>
            <a class="nav-link" href="#">FAVORITOS</a>
        </div>
    </nav>
</header>
    <div style="width: 600px; display: flex; justify-content: center; align-items: center;">
        <form action="config.php" method="post">
            <label for="email">E-mail:</label>
            <input type="text" name="email" class="" value="<?php echo "$email" ?>
            <label for="password">Senha:</label>
            <input type="password" name="password" class="">
            <input type="submit" value="Entrar" name='submit'>
            <a href="" class="resetPass">Esqueci minha senha</a>
            <span class='line'></span>
            <a href="../register/register.php" class="btn-register">
                Criar Conta
            </a>
        </form>
    </div>
</body>
</html>