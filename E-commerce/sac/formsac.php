<?php 
require("connector.php");

if(isset($_POST)){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $query = "INSERT INTO sac (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    $stmt = $pdo->prepare($query);
    $stmt->execute();
}

?>