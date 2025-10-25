<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Generico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <?php
    echo "<span class='texto'>$txt</span>";
    ?>
</body>
</html>