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
            echo"A soma vale $soma";
            return $soma;
        }
        soma(3,1)
    ?>
</body>
</html>