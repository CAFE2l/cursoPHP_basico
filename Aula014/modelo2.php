<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function soma($a, $b){
            $soma = $a + $b;
            return $soma;
        }
     $x = 3;
     $y = 4;
     $resultado = soma($x, $y);
     echo "<p>A soma entre $x e $y é $resultado.</p>";
    ?>
</body>
</html>