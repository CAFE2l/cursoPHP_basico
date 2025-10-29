<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div>
    <pre>
        <?php
            $vetor = array("A", "J", "M", "X", "K" );
            print_r($vetor);
           array_unshift($vetor, "O");
           array_shift($vetor);
           print_r($vetor);
           
            
        ?>
    </pre>
</div>
</body>
</html>