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
    <pre>
        <?php
            $valor = array ( 0=> 5,
                             1 => 9,
                            2 => 8,
                            3 => 7);
            unset($valor[2]);
            print_r($valor);
        ?>
    </pre>
</div>
</body>
</html>