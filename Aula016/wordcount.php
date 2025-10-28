<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div>
    <?php 
        $frase = "Eu estou estudando PHP agora";
        $cont = str_word_count($frase, 2);
        echo "$frase <br> palavras encontradas nas frases foram: $cont";
        echo "<br>";

        print_r($cont);
    ?>
</div>
</body>
</html>