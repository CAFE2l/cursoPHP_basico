<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num = isset($_GET["num"]) ? $_GET["num"] : 1;
        $resultado = 0;
        for ($i = 1; $i <= 10; $i++){
            $resultado = $num * $i;
            echo "$num x $i = $resultado<br>";
        }
    ?>

    <br><a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>