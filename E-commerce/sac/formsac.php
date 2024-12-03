<?php 
require("connector.php");

if(isset($_POST)){

    $nome = $_POST["nome"] ?? "Sem_Nome";
    $email = $_POST["email"] ?? "Sem_Email";
    $mensagem = $_POST["mensagem"] ?? "Sem_Mensagem";

    $query = "INSERT INTO sac (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    $stmt = $pdo->prepare($query);
    $stmt->execute();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechWare - SAC - Atendimento</title>
    <link rel="stylesheet" href="../sac/estilo.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
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
<br><br>
<main class="msgCheck">
<?php 
echo ("<p>$nome, sua mensagem foi enviada com sucesso! No prazo de 24 horas o suporte irá atende-lo</p>")
?>
</main>
</body>
</html>