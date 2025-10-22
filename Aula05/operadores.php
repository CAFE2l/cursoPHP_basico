<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritiméticas</title>
</head>
<body>
    <?php
        $num1 = $_GET["a"];
        $num2 = $_GET["b"];
        echo "<h2>Valores Recebidos: $num1 e $num2</h2>";
        
        echo "A soma vale " .($num1 + $num2); 
        echo "A subtração vale ". ($num1 - $num2);
        echo " A multiplicação vale ". ($num1 * $num2);
        echo "A divisão vale ". ($num1 / $num2);
        echo "O módulo vale ". ($num1 % $num2);

    ?>
</body>
</html>