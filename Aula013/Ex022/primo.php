<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $number = isset($_GET["num"]) ? (int)$_GET["num"] : 1;
        $divisores = 0;
        
        echo "<h2>Analisando o número $number...</h2>";
        
        echo "Valores múltiplos: ";
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) {
                echo "$i ";
                $divisores++;
            }
        }
        
        echo "<br>Total de múltiplos: $divisores<br>";
        
        echo "<h3>Resultado: ";
        if ($divisores == 2) {
            echo "O número <span style='color: lightgreen;'>$number É PRIMO!</h3></span>";
        } else {
            echo "O número <span style='color: red;'>$numberNÃO É PRIMO!</h3></span> ";
        }
    ?>
    <br>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>