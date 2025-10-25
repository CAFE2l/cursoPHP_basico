<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
        $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
        $media = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é igual a $media.<br>";

        if($media <= 5){
            $situacao = "REPROVADO";
        } elseif($media > 5 && $media <6){
            $situacao = "RECUPERAÇÃO";
        } else{
            $situacao = "APROVADO";
        }
        echo "Situação do aluno: $situacao.";
    ?>
</body>
</html>