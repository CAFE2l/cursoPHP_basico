<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é R$ ".number_format($preco, 2, ",", ".");
        echo "<br>O preço com 10% de desconto é R$ ".number_format($preco*0.9, 2, ",", ".");   
    
    ?>
</body>
</html>