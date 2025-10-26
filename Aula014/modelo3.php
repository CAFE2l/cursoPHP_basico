<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div>
    <?php 
        function soma() {
            $parametro = func_get_args();
            $total = func_num_args();
            $s = 0;
            for($i = 0; $i < $total; $i++){
                $s += $parametro[$i];
            }
            
            return $s;
    }
    
        $resultado = soma(3,5,2,23, 4,5);
        echo "A soma dos valores é $resultado";

    ?>
</div>
</body>
</html>