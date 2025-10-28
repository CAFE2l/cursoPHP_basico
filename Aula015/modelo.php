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
    <?php 
     function test(&$x){
        $x += 2;
        echo "<p>O valor de X é $x</p>";
     }         

     $a = 3;
     test($a);
     echo"<p>O valor de A é $a</p>";
    ?>
</div>
</body>
</html>