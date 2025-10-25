<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num = isset($_GET["num"]) ? $_GET["num"]:0;
        $oper = isset($_GET["oper"]) ? $_GET["oper"]:"1";
        switch ($oper){
            case 1:
                $resultado  = $num * 2;
                break;
            case 2: 
                $resultado = $num^3;
                break;
            case 3: 
                $resultado = sqrt($num);
                break;
            default:
                $resultado = 0;
                break;
        }


        echo "O resultado a operação solicitada é $resultado";

    ?>

    <a href="index.html">Voltar</a>
</body>
</html>