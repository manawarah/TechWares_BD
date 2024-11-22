<?php
    include_once('../database/conexao.php');   
    //form user data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $tel = $_POST['phone'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $cep = $_POST['cep'] ?? '';
    $address = $_POST['address'] ?? '';
    $pass = $_POST['pass'] ?? '';
    $rpass = $_POST['rpass']  ?? '';
    //confirm data receipt
    //echo "$nome, $email, $tel, $cpf, $cep, $address, $pass, $rpass";
    if(isset($_POST['submit'])){   
        
        if(strlen($name) > 3 && strlen($tel) == 11 && strlen($cpf) == 14 && strlen($cep) == 8 && $pass == $rpass){

            $sql = mysqli_query($conexao, "INSERT INTO users (nome, email, tel, cpf, cep, endereco, senha) VALUES ('$name', '$email', '$tel', '$cpf', '$cep', '$address', '$pass');");
            header('Location: ../login/login.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="../styles/defaults.css">
    <script defer src="register.js"></script>
    <title>Registre-se</title>
</head>
<body>
    <header class="cabecalho">
        <a href="../login/login.php">Voltar</a>
        <div class="logo">
            <a href="#">
                <img src="../assets/Techware.png" alt="logo" width="200px">
            </a>
        </div>
    </header>

    <form action="<?= $_SERVER['PHP_SELF']?>" method="post" onsubmit="return register()">
        <div>
            <label for="name">Nome:</label>
            <input type="text" name='name' placeholder="Nome Completo" class="placeholder-center" value="<?php echo"$name"?>">
            <p class="msg-error msg-nome"></p>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" class="placeholder-center" value="<?php echo"$email"?>">
            <p class="msg-error msg-email"></p>
            <br><br>
            <label for="phone">Telefone:</label>
            <input type="tel" name="phone" placeholder="Digite seu telefone" class="placeholder-center" value="<?php echo"$tel"?>">
            <p class="msg-error msg-phone"></p>
            <br><br>
            <label for="senha">Senha:</label>
            <input type="password" name="pass" placeholder="Digite sua senha" class="placeholder-center">
            <p class="msg-error msg-pass"></p>
            
        </div>
        <div>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" placeholder="Digite seu CPF" class="placeholder-center" value="<?php echo"$cpf"?>">
            <p class="msg-error msg-cpf"></p>
            <br><br>
            <label for="cep">CEP:</label>
            <input type="number" name="cep" placeholder="Digite seu CEP" class="placeholder-center" value="<?php echo"$cep"?>">
            <p class="msg-error msg-cep"></p>
            <br><br>
            <label for="address">Endereço:</label>
            <input type="text" name="address"  placeholder="Digite seu Endereço" class="placeholder-center" value="<?php echo"$address"?>">
            <p class="msg-error msg-address"></p>
            <br><br>
            <label for="rsenha">Confirme a sua senha:</label>
            <input type="password" name="rpass" placeholder="Confirme a sua senha" class="placeholder-center">
            <p class="msg-error msg-rpass"></p>
        </div>
        <input type="submit" value="Registrar" name='submit' onclick="register()">
    </form>
</body>
</html>