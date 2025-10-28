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
        $produto = "Leite";
        $preço = 4.5;
        //echo "O $produto custa R$ $preço";

        printf ("O %s custa R$ %.2f", $produto, $preço);
    ?>
</div>
</body>
</html>