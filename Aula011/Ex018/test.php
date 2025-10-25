<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $i = 1; // Inicia o contador em 1
        while ($i <= 5) {
            // Cria o nome da variável dinamicamente (ex: "v1", "v2", etc.)
            $nome_campo = "v" . $i; 
            // Pega o valor enviado pelo formulário para aquele campo
            $valor = $_GET[$nome_campo] ?? 0; 
            echo "Valor $i: $valor <br>";
            $i++; // Incrementa o contador
        }
    ?>
    <br>
    <a href="Ex018.php">Voltar</a>
</body>
</html>