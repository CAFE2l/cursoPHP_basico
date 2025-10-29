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
            $vetor = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K" );
            print_r($vetor);
            krsort($vetor);
            print_r($vetor);
            
        ?>
    </pre>
</div>
</body>
</html>