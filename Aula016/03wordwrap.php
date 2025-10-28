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
    $txt = "lorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem lorem lorem ipsum dolor sit ametlorem ipsum dolor sit amet";    
    $resultado = wordwrap($txt, 20, "<br>\n");
    echo $resultado;
?>


</div>
</body>
</html>