<?php
    include_once('../database/conexao.php');
    session_start();
    if(isset($_SESSION['email']) == false){

        header('Location: ../login/login.php');
    }
    $pId = $_GET['id'];
    if(isset($pId) == false){
        header('Location: ../index.php');
    }
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
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <title><?php echo $pName ?></title>
</head>
<body>
    <header>
        <a href="../index.php" class="fa-solid fa-right-from-bracket fa-lg"></a>
    </header>
    <form action="compraFinalizada.php">
        <div style="width: 230px; height: 100%;">
            <img src="<?php echo "../$pPhoto" ?>" alt="">
            <h2>R$ <?php echo $pPrice ?></h2>
        </div>
        <div>
            <h1><?php echo $pName ?></h1>
            <img src="../assets/qrcode.jpg" alt="" style="margin: 0;">
            <div class="box-icons">
                <i class="fa-brands fa-paypal icon-buy" title="Paypal" onclick="paypal()"></i>
                <i class="fa-solid fa-credit-card icon-buy" title="Cartão de Crédito" onclick="card()"></i>
            </div>
            <input type="submit" value="Comprar" name="submit">
        </div>

    </form>
    <script>
        function card(){
            location.href = "<?php echo "cartao.php?id=$pId" ?>";
        }
        function paypal(){
            location.href = "<?php echo "paypal.php?id=$pId" ?>";
        }
        document.getElementsByName('submit')[0].addEventListener('click', function(){
            if(confirm('Você deseja realizar a compra?')){
                setTimeout(function(){
                    window.alert('Compra realizada com sucesso!')
                    location.href = '../index.php';
                }, 3000)
            }
        });
    </script>
</body>
</html>