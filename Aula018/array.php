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
        <table border="1"><tr>
            <?php
               $c = range(5,20,5);
               foreach($c as $valor){
                    echo"<td>$valor </td>";
               }
            ?>
        </table>
    </pre>
</div>
</body>
</html>