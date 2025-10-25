<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="get" action="test.php">
            <?php 
            $cont = 1;
            while ($cont <= 5) {       
            echo "Valor $cont: <input type='number' name='v$cont' min='0' max='100' value='0' required><br>";
            $cont++;
            }
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>