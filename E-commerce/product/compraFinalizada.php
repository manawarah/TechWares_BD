<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="../styles/defaults.css">
    <title>Compra Finalizada</title>
</head>
<body>
    <header>

    </header>
    <form>
        <h1>Compra finalizada com sucesso</h1>
        <img src="../assets/check.png" alt="">
    </form>

    <style>
        h1{

            font-size: 25px;
            text-align: center;
        }
        form{
            display: grid;
            place-items: center;
        }
        img{
            
            width: 250px;
            height: 250px;
            object-fit: cover;
            outline: none;
        }
    </style>
    <script>
        setTimeout(() => {
            location.href = '../index.php';
        }, 3000)
    </script>
</body>
</html>