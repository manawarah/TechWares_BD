<?php
    session_start();
    //var_dump($_POST);
    if(isset($_POST['submit'])){

        include_once('../database/conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email = '$email' and senha = '$senha';";
        $return = $conexao->query($sql);

        if(mysqli_num_rows($return) > 0){
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../index.php');
        } else {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);

            header('Location: login.php?err=1');
        }
    } else {

        header('Location: login.php');
    }

    exit();
?>
