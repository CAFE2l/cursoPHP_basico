<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="get" action="atumalaca.php">
            <select name="num">
                <?php 
                    for($i = 1; $i <= 10; $i++){
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>

            <input type="submit" value="Tabuada"> 
        </form>
    </div>
</body>
</html>