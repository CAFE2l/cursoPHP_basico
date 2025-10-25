<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $cont = 5;

        do {
            echo "$cont ";
            $cont *= $cont-1; // Decrementa o valor de $cont em 1
        }  while ($cont >= 1);
    ?>
</body>
</html>
