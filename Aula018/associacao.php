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
            $vetor = array("nome" => "Ana",
                            "idade" => 23, 
                            "peso" => 65.5);
            foreach($vetor as $cad => $cont){
                echo"O campo $cad possui o conteúdo $cont<br>";
            }
        ?>

    </pre>
</div>
</body>
</html>