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
        $frase = "Gosto de estudar Matematica, matematica é muito legal!"; 
        $noveFrase = str_ireplace("matematica", "PHP", $frase);
        echo "$noveFrase";
    ?>
</div>
</body>
</html>