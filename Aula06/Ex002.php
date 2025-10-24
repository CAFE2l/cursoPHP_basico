<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
   <?php
    $atual  = $_GET["aa"];
    echo "O ano atual é $atual e o ano anterior é ".--$atual;
    
?>
</body>
</html>