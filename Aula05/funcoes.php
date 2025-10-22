<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritiméticas em PHP</title>
    <style>
        h2{
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: white;
        }

        body{
            background-color:black;
        }

    </style>
</head>
<body>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        echo "<h2>Valores Recebidos: $v1 e $v2</h2>";    
        echo "<br>O valor absolute de $v2 é " . abs($v2);
        echo "<br>O valor potencial de $v1 é ".pow($v1, $v2);
        echo "<br>A raiz quadrada de $v1 é ".sqrt($v1);
        echo "<br>O valor arredondado de $v2 é ".round($v2); // ceil floor;
        echo "<br>A parte inteira de $v2 é ".intval($v2);
        echo "<br> O valor de $v1 em moeda é R$ ".number_format($v1, 2, ",", ".");
    ?>
</body>
</html>