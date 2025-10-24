<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        //Atribuição por valor
        $a  = 3;
        $b = $a;
        $b += 5;
        echo "A variável A vale $a";
        echo "<br>A variável B vale $b";
        //Atribuição por referência
        $a = 10;
        $b = &$a;
        $b += 5;
        echo "<br>Agora a variável A vale $a";
        echo "<br>Agora a variável B vale $b";

    ?>
</body>
</html>