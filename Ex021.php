<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="Ex021.php">
    Numero: <select name="valor" id="valor">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    <input type="submit" value="tabuada">
    </form>


    <?php 
        // Pega o valor do formulário, usando 1 como padrão se não for enviado.
        $numero =  $_GET['valor'] ?? 1;

        echo "<h3>Exibindo a Tabuada de $numero:</h3>";
        // Laço para contar de 1 a 10
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado <br>";
        }
    ?>
</body>
</html>