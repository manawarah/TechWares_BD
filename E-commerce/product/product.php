<?php
    include_once('../database/conexao.php');
    session_start();
    if(isset($_SESSION['email']) == false){

        header('Location: ../login/login.php');
    }
    $pId = $_GET['id'];
    $sql = mysqli_query($conexao, "SELECT * FROM produtos WHERE idProduto = $pId");
    $pro = $sql->fetch_assoc();

    $pName = $pro['nome'];
    $pPhoto = $pro['foto'];
    $pPrice = $pro['preco'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="../styles/defaults.css">
    <title><?php echo $pName ?></title>
</head>
<body>
    <main>
        <div style="width: 230px;">
            <img src="<?php echo "../$pPhoto" ?>" alt="">
            <h2>R$ <?php echo $pPrice ?></h2>
        </div>
        <div>
            <h1><?php echo $pName ?></h1>
            <input type="text" name="" placeholder="Digite o nome do cartão *">
            <input type="number" name="" placeholder="Digite o número do cartão *">
            <input type="number" name="" placeholder="MM / AA *" style="width: 150px;">
            <input type="number" name="" placeholder="CVV *" style="width: 150px;">
            <select name="" id="">
                <option value="">1x no cartão sem juros</option>
                <option value="">2x no cartão sem juros</option>
                <option value="">3x no cartão sem juros</option>
                <option value="">4x no cartão sem juros</option>
            </select>
        </div>
        <input type="submit" value="Comprar" name="submit">
    </main>
</body>
</html>