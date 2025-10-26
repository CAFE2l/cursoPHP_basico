<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="get" action="primo.php">
            <label for="num">Número: </label>
            <select name="num" id="num">
                <?php 
                    for($i = 1; $i <= 100; $i++){
                        echo "<option value='$i'>$i</option>";
                    }
                    
                ?>

                <input type="submit" value="Verificar">
            </select>

        </form>
    </div>
</body>
</html>