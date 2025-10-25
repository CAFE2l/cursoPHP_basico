<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "Desconhecido";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : date("Y");
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "Indefinido";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos.";
    ?>

    <a href="index.html">Voltar</a>
</body>
</html>