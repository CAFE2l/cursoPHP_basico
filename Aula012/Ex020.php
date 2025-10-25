<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Fatorial</title>
</head>
<body>
    <?php 
        $valor = $_GET["val"] ?? 1;
        echo "<h1>Calculando o Fatorial de $valor</h1>";
        $cont = $valor;
        $fat = 1; // 1. Inicializa o fatorial com 1
    
        do {
            $fat *= $cont; // 2. Multiplica e atribui o resultado a $fat
            $cont--; // 3. Decrementa o contador
        } while($cont >= 1);
        echo "<h2>$valor! = $fat</h2>";
    ?>
    <a href="index.html">Voltar</a>
</body>
</html>