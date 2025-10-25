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
            <label for="inicio">Inicio: </label>
            <input type="number" name="inicio" id="inicio" value="0"><br>
            <label for="final">Final: </label>
            <input type="number" name="final" id="final" value="0"><br>
            <label for="incremento">Incremento: </label>
            <select name="incremento" id="incremento">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>   
                <option value="4">4</option>
            <select>

            <input type="submit" value="Contar">
        </form>
    </div>
</body>
</html>