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
            $matriz = array(
                array(6,5),
                array(4,9),
                array(3,2)
            );
            $matriz[0][1] = $matriz[2][0];
            print_r($matriz);
        ?>
    </pre>
</div>
</body>
</html>