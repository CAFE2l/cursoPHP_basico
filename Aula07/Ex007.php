<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];

    $m = ($nota1 + $nota2) / 2;

    echo "A média entre $nota1 e $nota2 é igual a $m <br>";

    // $sit = ($m < 6) ? "REPROVADO" : "APROVADO";
    echo "O aluno está " . (($m < 6) ? "REPROVADO" : "APROVADO");//contcatenação diretamente no echo
    ?>
</body>
</html>