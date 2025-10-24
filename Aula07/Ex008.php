<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
   <?php
     $ano = $_GET["an"];
     $idade = 2025 - $ano;
    echo "Quem nasceu em $ano tem $idade anos em 2025.<br>";
    $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO": "OPCIONAL"; 
    echo "Pra sua idade o voto é $tipo";
   ?>
</body>
</html>