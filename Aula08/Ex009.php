<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <?php
       $valor = $_GET["v"];
       $rq = sqrt($valor);
       echo "A raiz quadrada de $valor é igual a ". number_format($rq, 2, ".", ",");
    ?>
    <a href="index.html">voltar</a>
    </div>
</body>
</html>