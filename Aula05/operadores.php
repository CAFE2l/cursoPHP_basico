<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritméticas</title>
</head>
<body>
    <?php
        $num1 = filter_input(INPUT_GET, "a", FILTER_VALIDATE_FLOAT);
        $num2 = filter_input(INPUT_GET, "b", FILTER_VALIDATE_FLOAT);
        $num1 = htmlspecialchars($num1 !== false ? $num1 : 0);
        $num2 = htmlspecialchars($num2 !== false ? $num2 : 0);
        echo "<h2>Valores Recebidos: $num1 e $num2</h2>";

        echo "A soma vale " .($num1 + $num2); 
        if ($num2 != 0) {
            echo "A divisão vale " . ($num1 / $num2);
            echo "O módulo vale " . ($num1 % $num2);
        } else {
            echo "A divisão vale: Erro - divisão por zero.";
            echo "O módulo vale: Erro - divisão por zero.";
        }
        echo "A divisão vale ". ($num1 / $num2);
        echo "O módulo vale ". ($num1 % $num2);

    ?>
</body>
</html>